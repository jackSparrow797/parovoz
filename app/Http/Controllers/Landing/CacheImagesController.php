<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CacheImagesController extends Controller
{
    public function getImage($filename)
    {
        $img = Image::cache(function($image) use($filename) {
            return $image->make(env('APP_URL') . '/storage/uploads/works/' . $filename)
                ->fit(310, 215, null, 'top');
            //->response();
        }, 42500, true);

        return $img->response();
    }
}
