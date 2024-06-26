<?php

namespace App\Http\Controllers\admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //dd(Comic::all());

        //Print all comics
        return view('admin.comics.index', ['comics' => Comic::orderByDesc('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // Validate data
        $validate_data = $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'required|max:150',
            'price' => 'required|decimal:2',
            'series' => 'max:100',
            'sale_date' => 'date_format:Y-m-d',
            'type' => 'max:80',

        ]);

        //dd($validate_data);
        //$dataComic = $request->all();


        //* Create a data
        // To create a new object to insert into database or do in this way
        // $comic = new Comic();
        // $comic->title = $dataComic['title'];
        // $comic->description = $dataComic['description'];
        // $comic->thumb = $dataComic['thumb'];
        // $comic->price = $dataComic['price'];
        // $comic->series = $dataComic['series'];
        // $comic->sale_date = $dataComic['sale_date'];
        // $comic->type = $dataComic['type'];
        // $comic->save();
        // otherwise use a class but must add fillable inside the class
        //*
        Comic::create($validate_data);

        //* Redirect the user to a get view (from Post to Get)
        return to_route('comics.index');
        //or use redirect
        // return redirect()->to('admin.comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        //Print a select comic
        //dd($comic);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        // dd($comic);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // dd($request->all(), $comic);
        // Validate data
        $validate_old_data = $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'required|max:150',
            'price' => 'required|decimal:2',
            'series' => 'max:100',
            'sale_date' => 'date_format:Y-m-d',
            'type' => 'max:80',

        ]);

        $comic->update($validate_old_data);
        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
