<?php

namespace Modules\Tax\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tax\Entities\Tax;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Tax\Http\Requests\TaxRequest;
use Modules\Tax\Http\Requests\UpdateTaxRequest;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $taxes = Tax::all();
        return view('tax::taxes.index', compact('taxes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('tax::taxes.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(TaxRequest $request)
    {
        $tax = Tax::create([
            'code' => $request->code,
            'description' => $request->description,
            'value' => $request->value,
            'active' => $request->has('active'),
        ]);

        Session::flash('message', "Tax Saved");
        return redirect(route('taxes.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('tax::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $tax = Tax::find($id);
        
        if (empty($tax)) {
            Session::flash('message', "Tax Not Found");
            return redirect(route('taxes.index'));
        }

        return view('tax::taxes.edit', compact('tax'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateTaxRequest $request, $id)
    {
        $tax = Tax::find($id);
        
        if (empty($tax)) {
            Session::flash('message', "Tax Not Found");
            return redirect(route('taxes.index'));
        }

        $tax->update([
            'code' => $request->code,
            'description' => $request->description,
            'value' => $request->value,
            'active' => $request->has('active'),
        ]);

        Session::flash('message', "Tax Updated");
        return redirect(route('taxes.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $tax = Tax::find($id);
        
        if (empty($tax)) {
            Session::flash('message', "Tax Not Found");
            return redirect(route('taxes.index'));
        }

        $tax->delete();
        Session::flash('message', "Tax Deleted");
        return redirect(route('taxes.index'));  
    }
}
