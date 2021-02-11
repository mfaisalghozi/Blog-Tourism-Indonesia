@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <a href="/blog/newBlog" class="btn btn-outline-success">+ Create Blog</a>
            <table class="table my-3">
                <thead>
                  <tr>
                    <th scope="col">Article ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($article as $ar)
                  <tr>
                    <th scope="row">{{$ar->id}}</th>
                    <td>{{$ar->title}}</td>
                    <td>
                        <form method="POST" action="/blog/delete/{{$ar->id}}">
                            @method('delete')
                            @csrf
                            <div class="form-group row">
                                <button class="btn btn-outline-dark" type="submit">Delete</button>
                            </div>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection