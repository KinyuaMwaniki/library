<?php

namespace Modules\Books\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Books\Entities\Genre;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Books\Http\Requests\CreateGenreRequest;
use Modules\Books\Http\Requests\UpdateGenreRequest;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $genres = Genre::all();
        return view('books::genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('books::genre.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateGenreRequest $request)
    {
        $genre = Genre::create([
            'name' => $request->name,
        ]);

        Session::flash('message', "Genre Saved");
        return redirect(route('genres.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('books::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $genre = Genre::find($id);
        
        if (empty($genre)) {
            Session::flash('message', "Genre Not Found");
            return redirect(route('genres.index'));
        }

        return view('books::genre.edit', compact(['genre']));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateGenreRequest $request, $id)
    {
        $genre = Genre::find($id);
        
        if (empty($genre)) {
            Session::flash('message', "Genre Not Found");
            return redirect(route('genres.index'));
        }

        $genre->update([
            'name' => $request->name,
        ]);

        Session::flash('message', "Genre Updated");
        return redirect(route('genres.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $genre = Genre::find($id);
        
        if (empty($genre)) {
            Session::flash('message', "Genre Not Found");
            return redirect(route('genres.index'));
        }

        // TODO: Felix check if genre has books with count

        $genre->delete();
        Session::flash('message', "Genre Deleted");
        return redirect(route('genres.index'));  
    }
}
