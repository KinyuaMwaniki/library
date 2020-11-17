<?php

namespace Modules\Role\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Modules\Role\Http\Requests\StoreRoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('role::roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('role::roles.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);

        Session::flash('message', "Role Saved");
        return redirect(route('role.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('role::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        
        if (empty($role)) {
            Session::flash('message', "Role Not Found");
            return redirect(route('role.index'));
        }

        return view('role::roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        
        if (empty($role)) {
            Session::flash('message', "Role Not Found");
            return redirect(route('role.index'));
        }

        $role->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);

        Session::flash('message', "Role Updated");
        return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        
        if (empty($role)) {
            Session::flash('message', "Role Not Found");
            return redirect(route('role.index'));
        }

        $role->delete();
        Session::flash('message', "Role Deleted");
        return redirect(route('role.index'));
    }
}
