<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Settings\Entities\CodeNumber;
use Modules\Settings\Http\Requests\CodeNumberingRequest;

class CodeNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $code_numberings = CodeNumber::all();
        return view('settings::code_numbering.index', compact('code_numberings'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('settings::code_numbering.create');
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
        return view('settings::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $code_number = CodeNumber::find($id);

        // return $code_number;

        if (empty($code_number)) {
            Session::flash('message', "Code Numbering Not Found");
            return redirect(route('code_numbers.index'));
        }

        return view('settings::code_numbering.edit', compact('code_number'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CodeNumberingRequest $request, $id)
    {
        $code_number = CodeNumber::find($id);

        if (empty($code_number)) {
            Session::flash('message', "Code Numbering Not Found");
            return redirect(route('code_numbers.index'));
        }

        

        $code_number->update([
            'model_id' => $request->model_id,
            'code_length' => $request->code_length,
            'alpha_length' => $request->alpha_length,
        ]);

        Session::flash('message', "Code Numbering Updated");
        return redirect(route('code_numbers.index'));
    }
}
