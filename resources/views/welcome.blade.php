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
          <a class="mt-3 btn btn-outline-light btn-lg" href="/home" role="button">
            View Article
          </a>
        </div>
      </div>
    </div>
</div>
@endsection
