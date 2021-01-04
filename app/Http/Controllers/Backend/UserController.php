<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{ 
    public function index()
    {
        $users = User::all();
        return view('backend.pages.users.index',compact('users'));
    }
    public function create()
    {
        $roles = Role::all();
        return view('backend.pages.users.create',compact('roles'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:8|max:12',
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        if ($request->role) {
            $user->assignRole($request->role);
        }
        return redirect('users')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userdata = User::findOrFail($id);
        $roles = Role::all();
        return view('backend.pages.users.edit',compact('userdata','roles'));
    }
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email,'.$id,
            'password'=>'nullable|min:8|max:12'

        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email = $request->email;
        if ($request->password) {
            bcrypt($request->password);
        }
        $user->roles()->detach();
        if ($request->role) {
            $user->assignRole($request->role);
        }
        $user->save();
        return redirect('users')->with('success', 'User created successfully.');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if(!is_null($user)){
            $user->delete();
        }
        session()->flash('success', 'User has been deleted !!');
        return back(); 
    }
}
