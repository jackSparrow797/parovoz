<?php

namespace App\Http\Controllers\Landing;

use App\Models\LandingSlider;
use App\Models\News;
use App\Models\Review;
use App\Models\SiteOptions;
use Illuminate\Support\Facades\DB;
use App\Models\Offer;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['sliders'] = LandingSlider::with('files')->orderBy('sort', 'asc')->get();
        $page = Page::where('title', 'Предложения')->first();
        $data['sections_offer'] = Section::with( 'offer', 'page')->where('page_id', $page->id)->get();
        $data['sections_work'] = Section::with( 'work', 'page')->where('page_id', $page->id)->get();
        $data['news'] = News::orderBy('sort', 'asc')->get(['id', 'title', 'created_at']);
        $data['reviews'] = Review::orderBy('sort', 'asc')->get();
        $data['options'] = SiteOptions::find(1);
        return view('landing.index', $data);
    }
}
