<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
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
        $articles = Article::All();
        // return $articles;
        return view('home', ['articles' => $articles]);
    }

    public function category($id){
        $articles = DB::table('articles')->Where('category_id', $id)->get();
        return view('/category', ['articles' => $articles]);
    }

    public function welcome(){
        return view('welcome');
    }

    public function showUser(){
        $users = DB::table('users')->get();
        return view('admin/showUser', ['users' => $users]);
    }

    public function showUserArticle(){
        $article = Article::All();
        return view('admin/showArticle', ['article' => $article]);
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
