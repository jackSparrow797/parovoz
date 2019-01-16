<?php

namespace App\Http\Controllers\Landing;

use App\Models\LandingSlider;
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
//        $data['sections_offer'] = $page->section()->get();
//        $data['offers'] = Offer::with('files', 'section')->orderBy('section_id', 'asc')->get();
//        $data['offers'] = DB::table('offers')
//            ->select('title', 'section_id')
//            ->orderBy('section_id')
//            ->get();

//        dd($data);
        return view('landing.index', $data);
    }
}
