<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectGallery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        return view('Frontend.index');
    }

    public function about(): View
    {
        return \view('Frontend.about');
    }

    public function contact(): View
    {
        return \view('Frontend.contact');
    }

    public function news($id): View
    {
        $data = News::query()->where('id', $id)->first();

        return \view('Frontend.news', compact('data'));
    }

    public function singleProject($id): View
    {
        $project = Project::query()->findOrFail($id);

        $galleries = ProjectGallery::query()
            ->where('project_id', $id)
            ->whereNotNull('project_category_id')
            ->with(['projectCategory'])
            ->get();

        $categories = $galleries
            ->groupBy('project_category_id')
            ->map(function ($group) {
                $first = $group->first();
                return (object)[
                    'id' => $first->projectCategory?->id,
                    'name' => $first->projectCategory?->name ?? 'Bilinmeyen Kategori',
                    'image_count' => $group->reduce(fn($carry, $item) => $carry + count($item->images ?? []), 0),
                ];
            })
            ->filter(fn($cat) => $cat->id !== null)
            ->values();

        return view('Frontend.singleProject', compact('project', 'galleries', 'categories'));
    }



    public function blog(): View
    {
        return \view('Frontend.blog');
    }

    public function singleBlog($id): View
    {
        $data = News::query()->where('id', $id)->first();

        return \view('Frontend.singleBlog', compact('data'));
    }

    public function sendMessage(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:200',
            'phone' => 'required|max:200',
            'email' => 'required|email|max:200',
            'body' => 'required|max:50000',
        ]);

        Message::query()->create($request->all());

        return redirect()->route('contact')->with('success', 'Mesajınız uğurla göndərildi');
    }
}
