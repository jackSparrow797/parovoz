<?php

namespace App\Http\Controllers\Admin;

use App\Models\Files;
use App\Models\LandingSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = LandingSlider::with('files')->orderBy('sort', 'asc')->paginate(15);

        return view('admin.slider.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = LandingSlider::create($request->all());
        if ($request->file('file')) {
            $path = $request->file('file')->store('uploads/slider', 'public');
            $file = new Files(['path' => $path]);
            $slider->files()->save($file);
        }
        return redirect()->route('slider.index');
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
        $slide = LandingSlider::find($id);
//        dd($slide);
        return view('admin.slider.edit', compact('slide'));
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
        $slide = LandingSlider::find($id);
        $slide->update($request->all());


        if ($request->file('file')) {
            $path = [];
            foreach ($slide->files as $file) {
                $path[] = $file->path;
            }
            $del = Storage::disk('public')->delete($path);
            $slide->files()->delete();

            $path = $request->file('file')->store('uploads/slider', 'public');
            $file = new Files(['path' => $path]);
            $slide->files()->save($file);
        }
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = LandingSlider::find($id);

        $path = [];
        foreach ($slide->files as $file) {
            $path[] = $file->path;
        }
        $del = Storage::disk('public')->delete($path);
        $slide->files()->delete();
        $slide->delete();
        return redirect()->route('slider.index');
    }
}
