<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::simplePaginate(9);

        return view('pages.users.user-detail', ['users' => $users]);
    }

    public function show($name)
    {
        // $user = User::where('name', $name)->firstOrFail();
        $user = \Auth::user();

        return view('pages.users.user-detail', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('pages.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required',
            'avatar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        );
        $validator = \Validator::make($request->all(), $rules);

        $user = User::find($id);
        $user->name   = $request->name;
        $user->avatar = $request->avatar->move(public_path('storage/users'));
        $user->save();

        // redirect
        Session::flash('message', 'Successfully updated user information!');

        return view('pages.users.edit', ['user' => $user, 'message' => 'Successfully updated user information!']);
    }
}
