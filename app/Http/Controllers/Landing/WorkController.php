<?php

namespace App\Http\Controllers\Landing;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class WorkController extends Controller
{
    public function show(int $work_id)
    {
        $work = Work::find($work_id);
        $html = view('landing.work.html', compact('work'))->render();
        return response()->json([
            'title'  => $work->title,
            'site'  => $work->site,
            'html'  => $html
        ]);
    }
}
