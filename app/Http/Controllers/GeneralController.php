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
        $currentProject = Project::findOrFail($id);

        // Aynı kategoriye sahip ama farklı otherCategory'ye ait projeleri getir
        $relatedProjects = Project::query()
            ->where('category_id', $currentProject->category_id)
            ->where('other_category_id', '!=', $currentProject->other_category_id)
            ->get();

        return view('Frontend.singleOurProjects', compact('currentProject', 'relatedProjects'));
    }


    public function singleBlog($id): View
    {
        $data = News::query()->where('id', $id)->first();

        return \view('Frontend.singleBlog', compact('data'));
    }
}
