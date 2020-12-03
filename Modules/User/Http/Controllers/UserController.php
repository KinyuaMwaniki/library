<?php

namespace Modules\User\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Modules\User\Http\Requests\CreateUserRequest;
use Modules\User\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('user::users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('user::users.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $request['password'] = Hash::make('password');

        // return $request->all();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Session::flash('message', "User Saved");
        return redirect(route('user.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        
        if (empty($user)) {
            Session::flash('message', "User Not Found");
            return redirect(route('user.index'));
        }

        return view('user::users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        
        if (empty($user)) {
            Session::flash('message', "User Not Found");
            return redirect(route('user.index'));
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        Session::flash('message', "User Updated");
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if(Auth::id() === $user->id)
        {
            Session::flash('message', "Cannot delete logged in user");
            return redirect(route('user.index')); 
        }
        
        if (empty($user)) {
            Session::flash('message', "User Not Found");
            return redirect(route('user.index'));
        }

        $user->delete();
        Session::flash('message', "User Deleted");
        return redirect(route('user.index'));  
    }
}
