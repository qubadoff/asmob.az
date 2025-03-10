<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Project;
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

    public function ourProjects(): View
    {
        $data = Project::query()->orderBy('created_at', 'desc')->paginate(20);

        return \view('Frontend.ourProjects', compact('data'));
    }

    public function singleOurProjects($id): View
    {
        $data = Project::with(['category', 'otherCategory'])->findOrFail($id);

        $relatedProjects = Project::query()
            ->where('category_id', $data->category_id)
            ->with(['category', 'otherCategory'])
            ->get();

        return view('Frontend.singleOurProjects', [
            'data' => $data,
            'projects' => $relatedProjects
        ]);
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
}
