<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{   
    // TEMPORARY COMMENTS
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome(){
        return view('welcome');
    }

    public function showUser(){

        $users = DB::table('users')->get();

        return view('user/showUser', ['users' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User
     * @return \Illuminate\Http\Response
     */
    public function userDestroy($id)
    {
        User::destroy($id);
        return redirect('/user');
    }
}
