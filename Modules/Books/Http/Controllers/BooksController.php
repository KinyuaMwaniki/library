<?php

namespace Modules\Books\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Books\Entities\Book;
use Modules\Books\Entities\Genre;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Books\Http\Requests\CreateBookRequest;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books::books.index', compact('books'));
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $genres = Genre::pluck('name', 'id');
        return view('books::books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateBookRequest $request)
    {
        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'publisher' => $request->publisher,
            'genre_id' => $request->genre_id,
            'publication_date' => $request->publication_date,
            'total_stock' => $request->total_stock,
            'total_available' => $request->total_stock,
        ]);

        Session::flash('message', "Book Saved");
        return redirect(route('books.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        $genres = Genre::pluck('name', 'id');

        
        if (empty($book)) {
            Session::flash('message', "Book Not Found");
            return redirect(route('books.index'));
        }

        return view('books::books.show', compact(['book']));    
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $genres = Genre::pluck('name', 'id');

        
        if (empty($book)) {
            Session::flash('message', "Book Not Found");
            return redirect(route('books.index'));
        }

        return view('books::books.edit', compact(['book', 'genres']));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        
        if (empty($book)) {
            Session::flash('message', "Book Not Found");
            return redirect(route('books.index'));
        }

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'publisher' => $request->publisher,
            'genre_id' => $request->genre_id,
            'publication_date' => $request->publication_date,
            'total_stock' => $request->total_stock,

        ]);

        Session::flash('message', "Book Updated");
        return redirect(route('books.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        
        if (empty($book)) {
            Session::flash('message', "Book Not Found");
            return redirect(route('books.index'));
        }

        // TODO: Felix add check if book is issued

        $book->delete();
        Session::flash('message', "Book Deleted");
        return redirect(route('books.index'));  
    }
}
