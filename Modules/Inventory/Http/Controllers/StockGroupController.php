<?php

namespace Modules\Inventory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Inventory\Entities\StkGroup;
use Modules\Role\Http\Requests\StoreRoleRequest;
use Modules\Inventory\Http\Requests\CreateStockGroupRequest;

class StockGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $stock_groups = StkGroup::all();
        return view('inventory::stock-groups.index', compact('stock_groups'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('inventory::stock-groups.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateStockGroupRequest $request)
    {
        $stk_group = StkGroup::create([
            'code' => $request->code,
            'sales_ledger_id' => $request->sales_ledger_id,
            'purchase_ledger_id' => $request->purchase_ledger_id,
            'adjustment_ledger_id' => $request->adjustment_ledger_id,
            'description' => $request->description,
        ]);

        Session::flash('message', "Stock Group Saved");
        return redirect(route('stk_group.index'));
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
        return view('inventory::edit');
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
