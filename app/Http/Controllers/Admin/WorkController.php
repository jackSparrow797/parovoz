<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Tag;
use App\Models\Work;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::paginate(15);

        return view('admin.work.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $sections = Section::all();

        return view('admin.work.create', [
            'tags' => $tags,
            'sections' => $sections,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = Work::create($request->all());


        if ($request->input('tags')) {
            $work->tags()->attach($request->input('tags'));
        }

        if ($request->file('file')) {
            $files = Files::saveFiles($request->file('file'), 'uploads/works');
            $work->files()->saveMany($files);
        }
        return redirect()->route('work.index');
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
        $work = Work::find($id);
        $tags = Tag::all();
        $sections = Section::all();

        $tags_arr= $work->tags()->select('id')->get();
        $tags_active = [];
        foreach ($tags_arr as $tags_item) {
            $tags_active[] = $tags_item->id;
        }
        unset($tags_item);
        return view('admin.work.edit', [
            'tags' => $tags,
            'work' => $work,
            'tags_active' => $tags_active,
            'sections' => $sections,
        ]);
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
        $work = Work::find($id);
        $work->update($request->all());

        //update tags
        if ($request->input('tags')) {
            $work->tags()->detach();
            $work->tags()->attach($request->input('tags'));
        }

        //update files
        if ($request->file('file')) {
            //delete old files
            Files::delFiles($work->files);
            $work->files()->delete();
            //add new files
            $files = Files::saveFiles($request->file('file'), 'uploads/works');
            $work->files()->saveMany($files);
        }

        return redirect()->route('work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);
        $work->tags()->detach();
        $work->delete();

        Files::delFiles($work->files);
        $work->files()->delete();

        return redirect()->route('work.index');
    }
}
