<?php

namespace App\Http\Controllers\Admin;

use App\Models\Files;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::paginate(15);

        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = Review::create($request->except('logo'));

        if ($request->file('logo')) {
            $logo = Files::saveFiles([$request->file('logo')], 'uploads/reviews/logo');
            $review->update(['logo' => $logo[0]->path]);
        }

        if ($request->file('file')) {
            $files = Files::saveFiles($request->file('file'), 'uploads/reviews');
            $review->files()->saveMany($files);
        }
        return redirect()->route('review.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->update($request->except('logo'));

        if ($request->file('logo')) {
            //del old
            $path = $review->logo;
            Storage::disk('public')->delete($path);
            //add new
            $logo = Files::saveFiles([$request->file('logo')], 'uploads/reviews/logo');
            $review->update(['logo' => $logo[0]->path]);
        }

        //update files
        if ($request->file('file')) {
            //delete old files
            Files::delFiles($review->files);
            $review->files()->delete();
            //add new files
            $files = Files::saveFiles($request->file('file'), 'uploads/reviews');
            $review->files()->saveMany($files);
        }

        return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        //del logo
        $path = $review->logo;
        Storage::disk('public')->delete($path);

        Files::delFiles($review->files);
        $review->files()->delete();
        $review->delete();
        return redirect()->route('review.index');
    }
}
