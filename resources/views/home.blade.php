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
                            <a href="/category/{{$ar->category_id}}" class="">
                                @switch($ar->category_id)
                                    @case(1)
                                        {{$place="Beach"}}
                                    @break
                                    @case(2)
                                        {{$place="Mountain"}}
                                    @break
                                    @case(3)
                                        {{$place="Theme Park"}}
                                    @break
                                    @case(4)
                                        {{$place="City"}}
                                    @break
                                    @case(5)
                                        {{$place="Nature"}}
                                    @break
                                @endswitch
                            </a>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
