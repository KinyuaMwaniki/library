<?php

namespace Modules\Books\Http\Controllers\API;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Books\Entities\Issuance;
use Illuminate\Support\Facades\Validator;

class IssuancesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('books::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('books::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        info($request->all());

        $rules = [
            'books' => ['required'],
            'student' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        
        foreach($request->books as $book) {
            $issuance = Issuance::create([
                'book_id' => $book['id'],
                'student_id' => $request->student['id'],
                'date_issued' => Carbon::now(),
                'user_id' => $request->user_id,
                'date_expected' => Carbon::parse($request->date_expected),
            ]);
        }

        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => "Books issued successfully",
        ]);
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
