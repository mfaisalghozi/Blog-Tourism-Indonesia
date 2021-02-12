@extends('layouts.app')

@section('content')
<div class="text-center bg-image" style="background-image: url('/images/indo-sawah-nature.jpg');background-position: center;height: 100vh;">
    <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.2)">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white" style="font-family: 'Lora', serif;">
          <h1 class="display-1">Wonderful <span style="color: red">Journey</span></h1>
          <h4 class="display-5">All About Indo<span style="color: red">nesia In Words</span></h4>
          <a class="mt-3 btn btn-outline-light btn-lg" href="/home" role="button">
            View Article
          </a>
        </div>
      </div>
    </div>
</div>
<div class="konten" style="height: 100vh;background-color: #e74c3c;">
  <div class="row h-100 w-100">
    <div class="col-lg-6 h-100 w-100">
        <div class="d-flex flex-row justify-content-center align-items-center h-100 w-100">
            <h1 class="display-1 title text-light" style="font-family: 'Lora', serif;">Writing<br>For<br>Indonesia.</h1>
        </div>
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center px-0">
      <img src="/images/image-landing-header1.jpg" class="shadow-lg mb-5 rounded image-header-1 img-fluid" alt="image-landing-page" style="width: 40%;height: 40%;">
      <img src="/images/image-landing-header2.jpg" class="shadow-lg mb-5 rounded image-header-2 img-fluid" alt="image-landing-page" style="width: 50%;height: 50%;">
      <img src="/images/image-landing-header3.jpg" class="shadow-lg mb-5 rounded image-header-3 img-fluid" alt="image-landing-page" style="width: 40%;height: 40%;">
    </div>
  </div>
</div>
<div class="konten" style="height: 100vh;background-color: #ecf0f1;">
  <div class="row h-100 w-100">
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
      <img src="/images/indo-beach-nature.jpg" class="shadow-lg mb-5 rounded image-position-1" alt="image-landing-page" style="height: 255px; width: 375px;">
      <img src="/images/indo-mountain-nature.jpg" class="shadow-lg mb-5 rounded image-position-2" alt="image-landing-page" style="height: 255px; width: 375px;">
      <img src="/images/indo-city-nature.jpg" class="shadow-lg mb-5 rounded image-position-3" alt="image-landing-page" style="height: 255px; width: 375px;">
    </div>
    <div class="col-lg-6 h-100 w-100 text-danger">
      <div class="d-flex flex-column justify-content-center align-items-center h-100 w-100">
          <h1 class="display-1 title" style="font-family: 'Lora', serif;">Start</h1>
          <h1 class="display-1 title" style="font-family: 'Lora', serif;">Your Own</h1>
          <h1 class="display-1 title" style="font-family: 'Lora', serif;">Journey.</h1>
      </div>
  </div>
  </div>
</div>
<div class="bg-white py-4" style="height:100vh">
  <div class="d-flex flex-column justify-content-center align-items-center h-100 w-100">
      <h1 class="display-2 title-section-info text-center mb-5" style="font-family: 'Lora', serif;">Tell Your Red & White Stories</h1>
      <div class="d-flex flex-row justify-content-around w-100 mt-5">
          <div class="d-flex flex-column justify-content-around rounded shadow-lg bg-white p-3 mb-5" style="height: 500px;width:450px">
              <div class="m-3" style="height: 300px">
                  <img src="/images/departing.svg" alt="illustration-image-restaurant" style="height: 100%;width:100%;">
              </div>
              <div class="info d-flex flex-column">
                  <h4 class="info-title text-center font-weight-bold" style="color: #f5b461;">Begin the adventure</h4>
                  <p class="mx-5 font-weight-light text-dark font-italic">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde minus provident excepturi adipisci eaque ullam ratione !</p>
              </div>
          </div>
          <div class="d-flex flex-column justify-content-around rounded shadow-lg bg-white p-3 mb-5" style="height: 500px;width:450px">
              <div class="m-3" style="height: 300px">
                  <img src="/images/blogging.svg" alt="illustration-image-restaurant" style="height: 100%;width:100%;">
              </div>
              <div class="info d-flex flex-column">
                  <h4 class="info-title text-center font-weight-bold" style="color: #ffd56b;">Write Everywhere & Anywhere</h4>
                  <p class="mx-5 font-weight-light text-dark font-italic">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde minus provident excepturi adipisci eaque ullam ratione !</p>
              </div>
          </div>
          <div class="d-flex flex-column justify-content-around rounded shadow-lg bg-white p-3 mb-5" style="height: 500px;width:450px">
              <div class="m-3" style="height: 300px">
                  <img src="/images/publish.svg" alt="illustration-image-restaurant" style="height: 100%;width:100%;">
              </div>
              <div class="info d-flex flex-column">
                  <h4 class="info-title text-center font-weight-bold" style="color: #9ad3bc;">Publish Now !</h4>
                  <p class="mx-5 font-weight-light text-dark font-italic">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde minus provident excepturi adipisci eaque ullam ratione !</p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
