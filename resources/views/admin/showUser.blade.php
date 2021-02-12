@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $u)
                  <tr>
                    <th scope="row">{{$u->id}}</th>
                    <td>{{$u->name}}</td>
                    <td>{{$u->role}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <form method="POST" action="/user/delete/{{$u->id}}">
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