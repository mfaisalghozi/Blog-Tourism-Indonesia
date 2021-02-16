<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/newBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userId)
    {
        if ($request->hasFile('image')) {
            //  Let's do everything 
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'required|string',
                    'category' => 'required|string',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'description' => 'required|string'
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['name'].".".$extension);
                $url = Storage::url($validated['name'].".".$extension);

                $user = User::Where('id',$userId)->firstOrFail();
                $category = Category::Where('name',$request->category)->firstOrFail();

                $article = Article::create([
                   'title' => $request->name,
                   'description' => $request->description,
                   'image' => $url,
                   'user_id' => $user->id,
                   'category_id' => $category->id
                ]);
                // Session::flash('success', "Success!");
                return redirect('/home');
            }
        }
        else{
            return $request;
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $article = Article::Where('id', $id)->firstOrFail();
        // return $article;
        return view('article/articleDetail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::Where('id',$id)->firstOrFail();
        Article::destroy($article->id);
        return redirect('/home');
    }
}

