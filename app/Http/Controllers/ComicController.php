<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{   

    protected $validation = [
        'title'=> 'required|max:120',
        'original_title'=> 'nullable|max:120',
        'volume_n'=> 'required|',
        'photo'=> 'required|string',
        'editor'=> 'required|string |max:50',
        'author'=> 'required|string |max:50',
        'price'=> 'required|',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(15);
        $data = ['comics' => $comics];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validateData = $request->validate($this->validation);
        $dataArray = $request->all();

        $comic = new Comic();
        $comic->title = $dataArray['title'];
        $comic->original_title = $dataArray['original_title'];
        $comic->volume_n = $dataArray['volume_n'];
        $comic->photo = $dataArray['photo'];
        $comic->editor = $dataArray['editor'];
        $comic->author = $dataArray['author'];
        $comic->price = $dataArray['price'];

        $save = $comic->save();

        if (!$save) {
            dd('salvataggio non riuscito');
        }

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = ['comic' => $comic];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   
        $validateData = $request->validate($this->validation);
        $data = $request->all();
        $updated = $comic->update($data);

        if (!$updated) {
            dd('Update non riuscito');
        }

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
