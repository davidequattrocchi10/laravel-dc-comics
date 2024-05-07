<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display welcome page for the user.
     */
    public function index()
    {

        $comics = Comic::all();

        return view('guests.welcome', compact('comics'));
    }

    /**
     * Display sign up page for the user.
     */
    public function signUp()
    {

        return view('guests.signUp');
    }


    /**
     * Display page with comics for the user.
     */
    public function allComics()
    {

        $comics = Comic::all();

        return view('guests.comics.allComics', compact('comics'));
    }


    /**
     * Display page with a comic for the user.
     */
    public function comic(Comic $comic)
    {

        return view('guests.comics.comic', compact('comic'));
    }
}
