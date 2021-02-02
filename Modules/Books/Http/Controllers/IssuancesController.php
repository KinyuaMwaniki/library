<?php

namespace Modules\Books\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Books\Entities\Book;
use Illuminate\Routing\Controller;
use Modules\Books\Entities\Issuance;
use Modules\Students\Entities\Student;

class IssuancesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $issuances = Issuance::all();
        return view('books::issuances.index', compact('issuances'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $books = Book::all();
        $students = Student::all();
        return view('books::issuances.create', compact(['books', 'students']));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        return view('books::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
