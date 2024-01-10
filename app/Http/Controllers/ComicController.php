<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (!empty($request->query('search'))) {
            $search = $request->query('search');
            $comics = Comic::where('type', $search)->get();

        } else {
            $comics = Comic::all();
        }
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StoreComicRequest $request)
    {
        // $request->validate([
        //     'description' => '|required|min:5|max:255',
        //     'thumb' => '|required|min:5|max:255',
        //     'price'=> '|required|min:5|max:255',
        //     'title'=> '|required|min:5|max:255',
        //     'sale_date'=> '|required|',
        //     'series'=> '|required|min:5|max:255',
        //     'type'=> '|required|min:5|max:255'
        // ]);
        $formData = $request->validated();
        $new_comic = Comic::create($formData);

        return to_route('comics.index', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $formData = $request->validated();
        $comic->fill($formData);
        $comic->update();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato");;
    }
    // private function validation($data)
    // {
    //     $validator = Validator::make($data,
    //     [
    //         'description' => '|required|min:5|max:255',
    //         'thumb' => 'url',
    //         'price'=> '|required|min:5|max:255',
    //         'title'=> '|required|min:5|max:255',
    //         'sale_date'=> '|required|',
    //         'series'=> '|required|min:5|max:255',
    //         'type'=> '|required|min:5|max:255'
    //     ],[
    //         'description.min' => 'Il campo descrizione deve avere :min caratteri',
    //         'thumb.required' => 'Il campo immagine è obbligatorio',
    //         'price.required' => 'Il campo prezzo è obbligatorio',
    //         'title.required' => 'Il campo titolo è obbligatorio',
    //         'sale_date.required' => 'Il campo data è obbligatorio',
    //         'series.max' => 'Il campo serie non può superare i :max caratteri',
    //         'type.max' => 'Il campo tipo non può superare i :max caratteri',
    //     ])->validate();

    //     return $validator;
    // }
}

