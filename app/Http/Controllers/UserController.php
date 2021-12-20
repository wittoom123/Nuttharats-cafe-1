<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {


        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'type' => $request->admin,
        ]);
        return redirect()->route('user');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}