@extends('layouts.app')
@section('content')


    <article  class="container blogs">
            <div class="row">
            <aside class="single_sidebar_widget post_category_widget col-md-4 col-sm-6">
            <a href="{{route('articles.index')}}" class="btn btn-primary w-100 mb-3"> عودة الى كل المقالات </a>

                <div class="d-flex justify-content-center">
                    <h3 class="widget_title">الأقسام</h3>
                </div>
                <ul class="list cat-list">


               <li>
                        <a href="$article" class="d-flex">
                            <p> {{$category->category}}</p>&nbsp
                            <p>|({{count($category->articles)}})</p>
                        </a>
                    </li>

                </ul>
            </aside>
            <div class="col-md-8 col-sm-6">
            @foreach($category->articles as $article)
                <a href="/articles/{{$article->id}}"><div class="card mb-3" >
                    <div class="card-img-div">
                        <!-- <img class="card-img-top img-fluid"  src="{{ asset('/imgs/blog_1.PNG') }}" alt="Card image cap"> -->
                        <img class="card-img-top img-fluid"  src="{{$article->avatar}}" style="height: 365px;width: 730px" alt="Card image cap">



                        <div class="card-date d-flex flex-column justify-content-center align-items-center text-white">
                            <h4>{{ date('j', strtotime($article->created_at)) }}</h4>
                            <h4>{{ date('M', strtotime($article->created_at)) }}</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{$article->title }}</h5>

                      <p class="ArticleBody text-dark">{{ substr(strip_tags($article->description), 0, 200) }}
                         {{ strlen(strip_tags($article->description)) > 50 ? "...اقرأ المزيد..." : "" }}
                      </p>
                      <a href="#" ><h5 class="text-muted d-inline ">طبيب {{$article->user->name}}</h5></a>
                    <span class="text-muted" >|  التعليقات ( {{count($article->comments)}} )</span>
                </div>

                </div></a>


                @endforeach
            </div>
            </div>
    </article>
@endsection
