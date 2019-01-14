<?php

namespace App\Http\Controllers\Landing;

use App\Models\LandingSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['sliders'] = LandingSlider::with('files')->orderBy('sort', 'asc')->get();

        return view('landing.index', $data);
    }
}
