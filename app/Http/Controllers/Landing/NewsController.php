<?php

namespace App\Http\Controllers\Landing;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    /**
     * @param int $news_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $news_id)
    {
        $news = News::find($news_id);
        return response()->json([
            'title'  => $news->title,
            'created_at'  => $news->created_at->format('d.m.Y'),
            'html'  => $news->text
        ]);
    }
}
