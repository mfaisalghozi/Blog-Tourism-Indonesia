@extends('layouts.app')

@section('content')
<div class="container" style="height: 100vh;">
    <div class="d-flex justify-content-center align-items-center h-75">
        <div class="shadow-lg bg-white rounded kotak-profil">
            <h3 class="display-4 bg-dark text-light text-center rounded-top">Profile</h3>
            <div class="p-3">
                <form method="POST" action="/profile/{{Auth::user()->id}}/edit">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nameInput">Name</label>
                      <input type="text" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Enter Name" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                      <label for="phoneInput">Phone</label>
                      <input type="text" class="form-control" id="phoneInput" placeholder="Enter Phone Number" name="phone" value="{{$user->phone}}">
                    </div>
                    <div class="d-flex flex-row justify-content-center mt-4">
                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection