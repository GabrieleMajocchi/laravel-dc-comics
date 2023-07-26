<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class AdminComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $links = config('db.links');
        $dc = config('db.dc');
        $sites = config('db.sites');

        return view('welcome', compact('links', 'dc', 'sites', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $links = config('db.links');
        $dc = config('db.dc');
        $sites = config('db.sites');
        return view('admin.create', compact('links','dc', 'sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('admin.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $links = config('db.links');
        $dc = config('db.dc');
        $sites = config('db.sites');
        return view('admin.show', compact('links', 'dc', 'sites', 'comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $links = config('db.links');
        $dc = config('db.dc');
        $sites = config('db.sites');
        return view('admin.edit', compact('comic','links','dc','sites'));
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
        $data = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('admin.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('welcome');
    }
}
