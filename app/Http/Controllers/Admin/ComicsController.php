<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    public function getComics(){

        $comics = Comic::all();

        return view('welcome', compact('comics'));
    }
}
