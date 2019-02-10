<?php

namespace App\Http\Controllers\Admin;

use App\Models\Files;
use App\Models\Offer;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::paginate(15);

        return view('admin.offer.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('admin.offer.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = Offer::create($request->all());

        if ($request->file('file')) {
            foreach ($request->file('file') as $file) {
                $path = $file->store('uploads/offer', 'public');
                $file = new Files(['path' => $path]);
                $offer->files()->save($file);
            }

        }
        return redirect()->route('offer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        $sections = Section::all();
        $data = [
            'offer' => $offer,
            'sections' => $sections,
        ];
        return view('admin.offer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::find($id);
        $offer->update($request->all());

        if ($request->input('files_sort')) {
            foreach ($request->input('files_sort') as $file_id => $file_sort) {
                $file = Files::find($file_id);
                $file->sort = $file_sort;
                $save = $file->save();
            }
        }

        if ($request->file('file')) {

            foreach ($request->file('file') as $file) {
                $path = $file->store('uploads/offer', 'public');
                $file = new Files(['path' => $path]);
                $offer->files()->save($file);
            }
        }
        return redirect()->route('offer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);

        $path = [];
        foreach ($offer->files as $file) {
            $path[] = $file->path;
        }

        $del = Storage::disk('public')->delete($path);
        $offer->files()->delete();
        $offer->delete();
        return redirect()->route('offer.index');
    }
}
