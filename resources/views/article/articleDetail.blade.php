@extends('layouts.app')
@section('content')

<div class="container mt-5">
    
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="display-4" style="font-family: 'Playfair Display', serif;
            font-family: 'Rubik', sans-serif;">{{$article->title}}</h1>
            <div class="mt-2 mb-4 d-flex flex-row justify-content-between align-items-center">
                <div class="author d-flex flex-row my-2 align-items-center">
                    <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 28px;weight: 28px;">
                    <p class="text-detail-article">{{$article->user->name}}</p>
                </div>
                <div class="option text-detail-article";">
                    <a href="#" class="mx-2"><i class='fas fa-thumbs-up' style='font-size:22px'></i></a>
                    <a href="#" class="mx-2"><i class="fa fa-book" style="font-size:22px"></i></a>
                    <a href="#" class="mx-2"><i class='fas fa-comment-dots' style='font-size:22px'></i></a>
                </div>
            </div>
            <img src="{{$article->image}}" class="img-fluid mb-4 image-article-detail" alt="Responsive image">
            <div class="article-text">
                <p>{{substr($article->description,0,781)}}</p>
                <p>{{substr($article->description,0,781)}}</p>
                <p>{{substr($article->description,0,781)}}</p>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection