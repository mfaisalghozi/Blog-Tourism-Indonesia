@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="text-center bg-image" style="background-image: url('/images/indo-sawah-nature.jpg');background-position: center;height: 40vh;">
    <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.4)">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white" style="font-family: 'Lora', serif;">
          <h1 class="display-3">Wonderful <span style="color: red">Journey</span></h1>
          <h4 class="display-5">All About Indo<span style="color: red">nesia In Words</span></h4>
          <a class="mt-2 btn btn-outline-light btn-lg" href="#!" role="button">
            View Article
          </a>
        </div>
      </div>
    </div>
</div>

<div class="container recommended Article my-4">
    <div class="row">
        <div class="col-lg-6 border-right d-flex justify-content-start align-items-center">
            <div class="d-flex flex-column">
                <img src="{{url('/images/indo-beach-nature.jpg')}}" alt="article-image" style="width: 520px;height: 345px;">
                <div class="author d-flex flex-row my-2 align-items-center">
                    <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 18px;weight: 18px;">
                    <p style="margin: 0px">M Faisal Ghozi</p>
                </div>
                <h3><strong>My Trip into Beach Lombok Indonesia</strong></h3>
                <h5>description</h5>
                <div class="d-flex flex-row mt-2">
                    <a href="#" style="text-decoration: none; color: black;">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 border-left p-4">
            <div class="d-flex flex-column justify-content-around">
                <div class="contentOne my-2">
                    <div class="row">
                        <div class="col-lg-8 d-flex flex-column justify-content-between">
                            <div class="author d-flex flex-row my-1 align-items-center">
                                <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 18px;weight: 18px;">
                                <p style="margin: 0px">M Faisal Ghozi</p>
                            </div>
                            <h5 class="mx-2"><strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit</strong></h5>
                            <p class="mx-2 mb-0" style="font-weight: 200;">10 Jan, 2021</p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{url('/images/indo-beach-nature.jpg')}}" alt="article-image" style="height: 100%;width: 100%">
                        </div>
                    </div>
                </div>
                <div class="contentTwo my-2">
                    <div class="row">
                        <div class="col-lg-8 d-flex flex-column justify-content-between">
                            <div class="author d-flex flex-row my-1 align-items-center">
                                <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 18px;weight: 18px;">
                                <p style="margin: 0px">M Faisal Ghozi</p>
                            </div>
                            <h5 class="mx-2"><strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit</strong></h5>
                            <p class="mx-2 mb-0" style="font-weight: 200;">10 Jan, 2021</p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{url('/images/indo-beach-nature.jpg')}}" alt="article-image" style="height: 100%;width: 100%">
                        </div>
                    </div>
                </div>
                <div class="contentThree my-2">
                    <div class="row">
                        <div class="col-lg-8 d-flex flex-column justify-content-between">
                            <div class="author d-flex flex-row my-1 align-items-center">
                                <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 18px;weight: 18px;">
                                <p style="margin: 0px">M Faisal Ghozi</p>
                            </div>
                            <h5 class="mx-2"><strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit</strong></h5>
                            <p class="mx-2 mb-0" style="font-weight: 200;">10 Jan, 2021</p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{url('/images/indo-beach-nature.jpg')}}" alt="article-image" style="height: 100%;width: 100%">
                        </div>
                    </div>
                </div>
                <div class="contentFour my-2">
                    <div class="row">
                        <div class="col-lg-8 d-flex flex-column justify-content-between">
                            <div class="author d-flex flex-row my-1 align-items-center">
                                <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 18px;weight: 18px;">
                                <p style="margin: 0px">M Faisal Ghozi</p>
                            </div>
                            <h5 class="mx-2"><strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit</strong></h5>
                            <p class="mx-2 mb-0" style="font-weight: 200;">10 Jan, 2021</p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{url('/images/indo-beach-nature.jpg')}}" alt="article-image" style="height: 100%;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider mb-4 w-100" style="border: 1px solid rgb(0,0,0,0.2);margin-top: 4rem;"></div>

<div class="container">
    <div class="row p-2 mt-4">
        @for($rep=1;$rep<=20;$rep++)
        <div class="col-lg-4 p-2">
            <a href="#" style="text-decoration: none;">
                <div class="card p-3 mb-5 bg-white rounded kotak">
                    <img class="card-img-top" src="/images/blogging.svg" alt="blogging">
                    <div class="card-body text-dark">
                        <h4 class="card-title">Article {{$rep}}</h4>
                        <p class="card-text">Text Number {{$rep}}</p>
                    </div>
                </div>
            </a>
        </div>
        @endfor
    </div>
</div>

@endsection
