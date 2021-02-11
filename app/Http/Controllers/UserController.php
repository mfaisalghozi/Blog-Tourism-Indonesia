<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index($id){
        $user = User::Where('id',$id)->firstOrFail();
        return view('user/profile', compact('user'));
        // return $user;
    }

    public function update(Request $request, $id){
        // return $request;
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|min:10',
        ]);
        $user = User::where('id',$id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        // Session::flash('success', "Success!");
        return redirect('/');
    }
}
