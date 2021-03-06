@extends('layouts.app')
@section('content')

<div class="blogs_show container" style="background-color:#b4b4b41e ">
    <div class="row">
        <div class="col-md-8 p-5 " style="background-color: white" >
            <h1 class="text-primary">{{$article->title}}</h1>
            <h3 class="text-dark mb-2" style="color:#053979 !important">د/ {{$article->user->name}}</h3>
            <h5 class="text-muted mb-5">{{$article->created_at}}</h5>
            <div class="blogs_show_img">
                <img class="img-fluid" src="{{$article->avatar}}" alt="article img" style="height: 365px;width: 730px">
            </div>
                <h4 class="pt-5" style="font-family: 'Amiri', serif;">{{$article->description}}</h4>

            <div class="row">
            <div class="col-md-12 " style="background-color: white">

                <hr>
                <div class="d-flex">
                    @if(auth()->user())
                        @if(auth()->user()->hasRole('Admin') || auth()->user()->id ==$article->user->id )
                            <a href="/articles/{{$article->id}}/edit" class="btn btn-info btn-sm ml-2">تعديل  المقال</a>
                        @endif
                    @endif

                        @if(auth()->user())
                            @if(auth()->user()->hasRole('Admin') || auth()->user()->id ==$article->user->id )
                                <form id="" action="/articles/{{$article->id}}" method="post">
                                        {{method_field('DELETE')}}
                                        @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick='return confirm("هل أنت متأكد من حذف هذا المقال")'>حذف المقال</button>
                                </form>
                            @endif
                        @endif
            </div>
                <hr>
                <h2> التعليقات :</h2>
                <hr>
                <div class="comments">

                    <h5 id="div_comments" class="mb-3"></h5>

                    @foreach($comments as $comment)

                        <div class="card">
                            <h4 class="card-header" style="font-family: 'Harmattan', sans-serif;">تمت كتابتة بواسطة {{$comment->user->name}}</h4>
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-md-1">
                                        <img class="rounded-circle mb-2 img-fluid" style="width: 50px; height:50px" src="{{$comment->user->avatar}}" alt="user img">
                                    </div>

                                    <div class="col-md-8 pr-3">
                                        <p class="card-text">{{$comment->comment}}</p>
                                    </div>

                                    <div class="col-md-3 d-flex justify-content-end align-items-end">
                                        @if(auth()->user())
                                            @if(auth()->user()->hasRole('Admin') || auth()->user()->id ==$comment->user->id )

                                                <form id="" action="/comment/{{$comment->id}}" method="post" class="m-0">
                                                    {{method_field('DELETE')}}
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger btn-sm pa">حذف</button>
                                                </form>
                                            @endif
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>

                    @endforeach

                    <form id="" action="/comments/store/{{$article->id}}" method="post" class="mt-2 container" enctype="multipart/form-data">
                    @csrf
                        <label>ابدأ بكتابة تعليقك هنا</label>
                        <textarea name="comment" id="" class="form-control md-textarea" cols="4" rows="3" required></textarea>
                        <button type="submit" class="btn btn-info mt-1" >إضافة تعليق</button>
                    </form>

                </div>

            </div>
          </div>
         </div>
         <div class="col-md-4 d-flex flex-column justify-content-start align-items-center adv_blogs_show">
            <h3 class="text-muted">مساحة اعلانية</h3>
            <img src="{{ asset('/imgs/adv_1.jpg') }}" class="img-fluid ">
            <img src="{{ asset('/imgs/adv_4.jpg') }}" class="img-fluid ">
            <img src="{{ asset('/imgs/adv_3.jpg') }}" class="img-fluid ">
            <img src="{{ asset('/imgs/adv_1.jpg') }}" class="img-fluid ">
            <img src="{{ asset('/imgs/adv_3.jpg') }}" class="img-fluid ">
         </div>
        </div>
    </div>


@endsection
