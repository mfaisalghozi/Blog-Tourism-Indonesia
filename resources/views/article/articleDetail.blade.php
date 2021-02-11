@extends('layouts.app')
@section('content')

<div class="container mt-5">
    
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="display-4" style="font-family: 'Playfair Display', serif;
            font-family: 'Rubik', sans-serif;">Lorem, ipsum dolor sit amet consectetur !</h1>
            <div class="mt-2 mb-4 d-flex flex-row justify-content-between align-items-center">
                <div class="author d-flex flex-row my-2 align-items-center">
                    <img src="{{url('/images/anon-user.png')}}" class="rounded-circle float-left" alt="user" style="height: 30px;weight: 30px;">
                    <p class="text-detail-article">M Faisal Ghozi</p>
                </div>
                <div class="option text-detail-article">
                    <a href="#" class="mx-2"><i class="fa fa-thumbs-o-up" style="font-size:22px"></i></a>
                    <a href="#" class="mx-2"><i class="fa fa-book" style="font-size:22px"></i></a>
                    <a href="#" class="mx-2"><i class="fa fa-comment-o" style="font-size:22px"></i></a>
                </div>
            </div>
            <img src="/images/indo-mountain-nature.jpg" class="img-fluid mb-4" alt="Responsive image">
            <div class="article-text">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, ex incidunt unde fugit consequuntur officiis, harum voluptates quas impedit rem non! Nam reiciendis debitis ducimus delectus officiis, et aliquam vitae mollitia illum corrupti? Quidem illo tenetur dolor dolorum sed expedita a consequuntur aspernatur, temporibus obcaecati nam perferendis beatae provident, cupiditate numquam. Pariatur ut tempore cupiditate eaque recusandae laboriosam! Accusamus, ipsa debitis! Consequuntur ab maiores perspiciatis assumenda ipsam, voluptas eligendi delectus nemo nam ex magnam obcaecati consectetur? Pariatur deserunt, natus laudantium, repellat earum harum cum error, ipsa voluptatibus corrupti magni dolorum in similique. Debitis labore, officia ex sapiente perferendis magni.</p>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection