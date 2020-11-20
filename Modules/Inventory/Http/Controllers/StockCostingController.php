<?php

namespace Modules\Inventory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Inventory\Entities\StkCosting;
use Modules\Inventory\Http\Requests\StockCostingRequest;

class StockCostingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $stock_costings = StkCosting::all();
        return view('inventory::stock-costing.index', compact('stock_costings'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('inventory::stock-costing.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(StockCostingRequest $request)
    {
        $stk_costing = StkCosting::create([
            'code' => $request->code,
            'description' => $request->description,
        ]);

        Session::flash('message', "Stock Costing Saved");
        return redirect(route('stk_costing.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('inventory::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        info("Edit");
        $stk_costing = StkCosting::find($id);
        
        if (empty($stk_costing)) {
            Session::flash('message', "Stock Costing Not Found");
            return redirect(route('stk_costing.index'));
        }

        return view('inventory::stock-costing.edit', compact('stk_costing'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $stk_costing = StkCosting::find($id);
        
        if (empty($stk_costing)) {
            Session::flash('message', "Stock Costing Not Found");
            return redirect(route('stk_costing.index'));
        }

        $stk_costing->update([
            'code' => $request->code,
            'description' => $request->description,
        ]);

        Session::flash('message', "Stock Costing Updated");
        return redirect(route('stk_costing.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $stk_costing = StkCosting::find($id);
        
        if (empty($stk_costing)) {
            Session::flash('message', "Stock Costing Not Found");
            return redirect(route('stk_costing.index'));
        }

        $stk_costing->delete();
        Session::flash('message', "Stock Costing Deleted");
        return redirect(route('stk_costing.index'));    
    }
}
