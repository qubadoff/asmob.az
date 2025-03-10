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
        $data = Project::with('category')->findOrFail($id);

        // Aynı kategoriye ait, kendisi hariç, other_category_id'si farklı projeleri getir
        $relatedProjects = Project::query()
            ->where('category_id', $data->category_id)
            ->where('other_category_id', '!=', $data->other_category_id)
            ->where('id', '!=', $data->id) // Kendisi hariç
            ->get();

        // İlk sıraya kendi projemizi ekle, ki sıralamada baştan başlasın
        $projects = collect([$data])->merge($relatedProjects);

        return view('Frontend.singleOurProjects', [
            'data' => $data, // İlk açılışta gösterilecek proje
            'projects' => $projects, // Tüm gezilecek projeler (kendi dahil)
        ]);
    }






    public function singleBlog($id): View
    {
        $data = News::query()->where('id', $id)->first();

        return \view('Frontend.singleBlog', compact('data'));
    }
}
