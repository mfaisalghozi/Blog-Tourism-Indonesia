@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Article ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Article Name</td>
                    <td>{{substr("Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, molestias vitae rerum optio eveniet, qui, dicta quibusdam expedita enim illum dignissimos? Reiciendis quis voluptatem nobis nam. Provident sit hic molestiae!",0,20)}}...</td>
                    <td>
                        <form method="POST" action="#">
                            @method('delete')
                            @csrf
                            <div class="form-group row">
                                <button class="btn btn-outline-dark" type="submit">Delete</button>
                            </div>
                        </form>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection