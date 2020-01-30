@extends('layouts.app')
{{-- @include('layouts.side-bar') --}}
@section('content')

    <div class='container d-flex flex-column justify-content-end'>


        <div class="card bg-light mb-3 mt-5 w-75">
            <div class="card-header">المقال بالتفصيل</div>
            <div class="card-body">
            
                <h5 class="card-title">العنوان : </h5>
                <p class="card-text">{{$article->title}}</p>
                <h5 class="card-title">الوصف : </h5>
                <p class="card-text">{{$article->description}}</p>
                <h5 class="card-title">التعليقات : </h5>
                    @foreach($article->comments as $comment)
                <p class="card-text">{{$comment->comment}}</p>
                    @endforeach
            </div>
        </div>

        <a href="/articles" class="btn btn-primary btn-lg active w-25 py-2 my-3" style="margin-left: 25%" role="button" aria-pressed="true">Back to table</a>
@endsection
