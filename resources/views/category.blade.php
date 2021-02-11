@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row p-2 mt-4">
        @foreach($articles as $ar)
        <div class="col-lg-4 p-2">
            <a href="/article/{{$ar->id}}" style="text-decoration: none;">
                <div class="card p-3 mb-5 bg-white rounded kotak">
                    <img class="card-img-top" src="{{$ar->image}}" alt="blogging">
                    <div class="card-body text-dark d-flex flex-column justify-content-between" style="text-decoration: none;">
                        <h4 class="card-title text-dark">{{$ar->title}}</h4>
                        <p class="card-text text-dark">{{substr($ar->description,0,70)}}...</p>
                        {{$place=""}}
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
                        <p class="mt-3"><span class="text-dark">Category:</span> <a href="/category/{{$ar->category_id}}" class="">{{$place}}</a></p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
