@extends('layouts.app')
@section('content')

<div class="container h-100">
    <div class="d-flex justify-content-center align-items-center h-75">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h4 class="display-4 my-4">Add New Blog</h4>
            <form method="POST" action="/blog/{{Auth::user()->id}}" class="form-new-blog" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                  <label for="nameInput">Title :</label>
                  <input type="text" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <label for="categoryInputControl">Category :</label>
                    <select class="form-control" id="categoryInputControl" name="category">
                        <option value="beach">🏖️ Beach</option>
                        <option value="mountain">⛰️ Mountain</option>
                        <option value="themepark">🎢 Theme Park</option>
                        <option value="city">🏛️ City</option>
                        <option value="nature">🌲 Nature</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="imageInputControl">Image :</label>
                    <input type="file" class="form-control-file" id="imageInputControl" name="image">
                </div>
                <div class="form-group">
                    <label for="storyInputControl">Story :</label>
                    <textarea class="form-control" id="storyInputControl" rows="7" name="description"></textarea>
                  </div>
                <div class="d-flex flex-row justify-content-center mt-4">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>
            </form>    
        </div>
    </div>
</div>

@endsection
