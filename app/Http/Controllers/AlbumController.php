<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $albumU = Album::all();

        $userId = Auth::id();
        $albums = DB::table('albums')->where('userId', $userId)->get();

        return view('tutor.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        error_log('Entra a crear');
        return view('tutor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$userId = Auth::user()->id;*/
        $id = Auth::id();

        error_log('Entra a store');
        Album::create([
            'title' => $request->title,
            'userId' => $id
        ]);
        return redirect()->route('album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        $photos = $album->getMedia();
        return view('tutor.show', compact('album', 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('tutor.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $album->update([
            'title' => $request -> title
        ]);
        return redirect()->route('album.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->back();
    }

    public function upload(Request $request, Album $album)
    {
        if ($request ->has('image')) {
            $album->addMedia($request->image)->toMediaCollection();
        }
        return redirect()->back();
    }

    public function showImage(Album $album, $id)
    {
        $media = $album->getMedia();
        $image = $media->where('id', $id)->first();
        /*dd($image);*/

        return view('tutor.image-show', compact('album', 'image'));
    }

    public function destroyImage(Album $album, $id)
    {
        $media = $album->getMedia();
        $image = $media->where('id', $id)->first();
        $image->delete();

        return redirect()->back();
    }
}
