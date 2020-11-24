<?php

namespace Modules\Inventory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tax\Entities\Tax;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Inventory\Entities\StkItem;
use Modules\Inventory\Entities\StkGroup;
use Modules\Inventory\Entities\StkCosting;
use Modules\Inventory\Http\Requests\CreateInventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $stk_items = StkItem::all();
        return view('inventory::stk_items.index', compact('stk_items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $stock_costings = StkCosting::pluck('description', 'cost_id');
        $stock_groups = StkGroup::pluck('description', 'group_id');
        // TODO: Show only active taxes
        $taxes = Tax::pluck('description', 'tax_id');
        return view('inventory::stk_items.create', compact('stock_costings', 'stock_groups', 'taxes'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateInventoryRequest $request)
    {
        $stk_item = StkItem::create($request->all());
        Session::flash('message', "Inventory Item Saved");
        return redirect(route('inventories.index'));
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
        $stk_item = StkItem::find($id);
        
        if (empty($stk_item)) {
            Session::flash('message', "Stock Item Not Found");
            return redirect(route('inventories.index'));
        }
        $stock_costings = StkCosting::pluck('description', 'cost_id');
        $stock_groups = StkGroup::pluck('description', 'group_id');
        // TODO: Show only active taxes
        $taxes = Tax::pluck('description', 'tax_id');
        return view('inventory::stk_items.edit', compact('stk_item', 'stock_costings', 'stock_groups', 'taxes'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateInventoryRequest $request, $id)
    {
        $stk_item = StkItem::find($id);
        
        if (empty($stk_item)) {
            Session::flash('message', "Stock Item Not Found");
            return redirect(route('inventories.index'));
        }

        $stk_item->update($request->all());

        Session::flash('message', "Inventory Item updated");
        return redirect(route('inventories.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $stk_item = StkItem::find($id);
        
        if (empty($stk_item)) {
            Session::flash('message', "Stock Item Not Found");
            return redirect(route('inventories.index'));
        }

        $stk_item->delete();
        Session::flash('message', "Stock Item Deleted");
        return redirect(route('inventories.index')); 
    }
}
