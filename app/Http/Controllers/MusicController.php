<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Request;
use App\Http\Requests\MusicsRequest;

class MusicController extends Controller
{
    /**
     * @var \App\Music;
     */
    protected $music = null;

    /**
     * Constructor
     * 
     * @param \App\Model $music
     */
    public function __construct(Music $music)
    {
        $this->music = $music;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = $this->music->all();

        return view('musics.index', compact('musics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $music = $this->music->create($request->all());

        return redirect()
            ->route('musics.index')
            ->with('success', sprintf("Song `%s` added successfully.", $music->Song_name));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $music = $this->music->find( $id );
        if (is_null($music)) {
            abort(404);
        }
        $music->increment('count');
        return view('musics.show', compact('music'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        //
    }
    public function mood($tag)
    {
       $musics = $this->music->where( 'tag' , '=', $tag  )->get();

        if (is_null($musics)) {
            abort(404);
        }

        return view('musics.mood', compact('musics'));
    }
    public function toplist()
    {
        $musics = $this->music->orderBy('count', 'DESC')->get();
        return view('musics.mood', compact('musics'));
    }
   
}
