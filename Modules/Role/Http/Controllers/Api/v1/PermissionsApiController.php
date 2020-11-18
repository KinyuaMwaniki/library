<?php

namespace Modules\Role\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('role::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('role::create');
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
        return view('role::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('role::edit');
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

    public function getRoles()
    {
        $roles = Role::select('id','name')->get();
        return response()->json(['roles' => $roles], 200);
    }

    public function getPermissions(Request $request)
    {
        $role = Role::find($request->role);

        if(!$role)
        {
            return response()->json(['success' => false, 'error' => 'Selected Role not found'], 500);
        }

        $permissions = Role::findByName($role->name)->permissions->pluck('id')->toArray();

        return response()->json(['permissions' => $permissions, 'success' => true, 'message' => 'Permissions retrieved'], 200);

    }

    public function getAllPermissions()
    {
        $all_permissions = Permission::select('id','name', 'menu', 'submenu')->get()->groupBy(['menu', 'submenu']);
        return response()->json(['all_permissions' => $all_permissions], 200);
    }

    public function savePermissions(Request $request)
    {

        $role = Role::find($request->role);
        if(!$role)
        {
            return response()->json(['success' => false, 'error' => 'Selected Role not found'], 500);
        }
        $role->syncPermissions($request->selected_permissions);

        return response()->json(['success' => true, 'message' => 'Permissions saved'], 200);
    }

    public function getMenuPermissions(Request $request)
    {

        $permissions = Permission::whereIn('menu', $request->menus)->pluck('id')->toArray();
        return response()->json(['permissions' => $permissions, 'success' => true, 'message' => 'Permissions retrieved'], 200);

    }
}
