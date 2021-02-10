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
<div class="text-center bg-image" style="background-image: url('/images/indo-sawah-nature.jpg');height: 400px;background-position: center;">
    <div class="mask w-100 h-100" style="background-color: rgba(0, 0, 0, 0.3)">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white" style="font-family: 'Lora', serif;">
          <h1 class="display-3">Wonderful Journey</h1>
          <h4 class="display-5">All About Indonesia In Words</h4>
        </div>
      </div>
    </div>
</div>

@endsection
