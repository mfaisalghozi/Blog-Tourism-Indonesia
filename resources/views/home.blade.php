@extends('layouts.app')

@section('content')

<div class="container recommended Article my-4">
    
    @if (session('login'))
    <div class="alert alert-success" role="alert">
        {{ session('login') }}
    </div>
    @elseif (session('logout'))
    <div class="alert alert-danger" role="alert">
        {{ session('logout') }}
    </div>
    @endif

    <div class="row">
        <div class="col-lg-6 border-right d-flex justify-content-start align-items-center">
            <div class="d-flex flex-column">
                <img src="{{$articleRandom->image}}" alt="article-image" style="width: 520px;height: 345px;">
                <div class="author d-flex flex-row my-2 align-items-center">
                    <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 18px;weight: 18px;">
                    <p style="margin: 0px">{{$articleRandom->user->name}}</p>
                </div>
                <h3><strong>{{$articleRandom->title}}</strong></h3>
                <h5>{{substr($articleRandom->description,0,50)}}...</h5>
                <div class="d-flex flex-row mt-2">
                    <a href="/article/{{$articleRandom->id}}" style="text-decoration: none; color: black;">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 border-left p-4">
            <div class="d-flex flex-column justify-content-around">
                @foreach($articleLatest as $al)
                <a href="/article/{{$al->id}}" style="text-decoration: none;">
                    <div class="contentOne my-2">
                        <div class="row">
                            <div class="col-lg-8 d-flex flex-column justify-content-between">
                                <div class="authorAndTitle">
                                    <div class="author d-flex flex-row my-1 ml-1 align-items-center">
                                        <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 18px;weight: 18px;">
                                        <p style="margin: 0px" class="text-dark">{{$al->user->name}}</p>
                                    </div>
                                    <h5 class="mx-2 text-dark my-1"><strong>{{substr($al->title,0,50)}}</strong></h5>
                                </div>
                                <p class="mx-2 mb-0 text-dark font-weight-light" style="font-weight: 200;">10 Jan, 2021</p>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{$al->image}}" alt="article-image" style="height: 100%;width: 100%">
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="divider mb-4 w-100" style="border: 1px solid rgb(0,0,0,0.2);margin-top: 4rem;"></div>

<div class="container">
    <div class="row p-2 mt-4">
        @foreach($articles as $ar)
        <div class="col-lg-4 p-2">
            <a href="/article/{{$ar->id}}" style="text-decoration: none;">
                <div class="card p-3 mb-5 bg-white rounded kotak">
                    <img class="card-img-top" src="{{$ar->image}}" alt="blogging">
                    <div class="card-body text-dark d-flex flex-column justify-content-between" style="text-decoration: none;">
                        <h4 class="card-title text-dark">{{substr($ar->title,0,50)}}</h4>
                        <p class="card-text text-dark">{{substr($ar->description,0,100)}}...</p>
                        <p class="my-0">
                            <span class="text-dark">Category:</span> 
                            <a href="/category/{{$ar->category_id}}">{{$ar->category->name}}</a>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
