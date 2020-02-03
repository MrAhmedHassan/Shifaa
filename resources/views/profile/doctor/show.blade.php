@extends('layouts.app')
@section('content')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">--}}
{{-- <link href="{{ asset('css/preview.css') }}" rel="stylesheet">--}}

<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
<div class="container main-secction mt-4">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 image-section">
            <img src="http://nicesnippets.com/demo/Nature-Night-Sky-Stars-Blurred-Light-Show-Mountains-WallpapersByte-com-1920x1080.jpg">
        </div>
        <div class="row user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        <img src="{{$user->avatar}}">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">



<form action="/rate" method="POST">
  {{ csrf_field() }}
<div class="rating" >
  <br>
 <input id="e5" name="rate" value="5" type="radio"></a><label for="e5">☆</label>
		<input  id="e4" name="rate" value="4" type="radio"></a><label for="e4">☆</label>
		<input  id="e3" name="rate" value="3" type="radio"></a><label for="e3">☆</label>
		<input id="e2" name="rate" value="2" type="radio"></a><label for="e2">☆</label>
	<input  id="e1" name="rate" value="1" type="radio"></a><label for="e1">☆</label>
     <input type="hidden" name="id" required="" value="{{ $user->id }}">
   <br/> <button id="submitRate" class="btn btn-success">Submit Review</button>
 </div>   
 
 </form><br><br><br>


    <i class="fa fa-user-o" aria-hidden="true"></i> <a href="#" class="btn btn-primary btn-sm">تقييم</a>






                    </div>
                    <div class="row user-detail-row">
                        <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                            <div class="border"></div>
                            <p>
      <i class="fa fa-star fa-2x" id="star5"></i>
         <i class="fa fa-star fa-2x" id="star4"></i>
         <i class="fa fa-star fa-2x" id="star3"></i>
         <i class="fa fa-star fa-2x" id="star2"></i>
         <i class="fa fa-star fa-2x" id="star1"></i>
       </p>
       <div id="val" style="display:none">{{$user->averageRating}}</div>
                            <span>320</span>
                        </div>
                        <div class="col-md-12 col-sm-12 user-detail-section2 pull-right">
                            <div class="border"></div>
                            <p>عدد المقالات</p>
                            <span>{{count($user->articles)}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 user-detail-section2">
                        <div class="border"></div>
                        <p>عدد الكشوفات</p>
                        <span>{{count($user->doctorReservations)}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                <div class="row profile-right-section-row">
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                {{$user->name}}
                                <p> طبيب {{$user->category->category}}</p>
                                <h5>نبذة عننا</h5>
                                <p class="fontOfHabd">{{$user->profile->abstract}}</p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right d-flex">
                                @if(auth()->user())
                                @if(auth()->user()->id == $user->id)
                                <a href="/profiles/{{$user->id}}/edit" class="btn btn-info btn-sm ml-2 h-25">تعديل الملف الشخصي</a>
                                @endif
                                @endif

                                @if(auth()->user())
                                @if(auth()->user()->id == $user->id)
                                <a href="/profile/complete" class="btn btn-info btn-sm ml-2 h-25">أكمل الملف الشخصي</a>
                                @endif
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 img-main-rightPart">
                                <div class="row">
                                    <div class="col-md-12 text-center border border-primary rounded bg-primary">
                                        <h3 class="text-white">سعر الكشف</h3>
                                        <label>{{$user->profile->price}} جنيه</label>
                                        <h3 class="text-white">عنوان العيادة</h3>
                                        <label>{{$user->profile->address}}</label>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-dark text-center border border-warning">
                                <thead class="bg-primary">
                                    <tr style="font-size: 20px; color:#ffd7db">
                                        <th scope="col">الأيام</th>
                                        <th scope="col">من / إلي</th>
                                        <th scope="col">الحجز</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $reveals = $user->reveals;
                                @endphp
                                @if(count($reveals) < 1)
                                    <tr class="text-primary">
                                        <td>
                                            <p style="font-size: 20px">لم يحدد</p>
                                        <td>
                                            <p style="font-size: 20px">لم يحدد</p>
                                        </td>
                                        <td>غيرمتاح</td>
                                    </tr>
                                @elseif(count($reveals) <= 3)
                                    @foreach($reveals as $reveal)
                                        <tr class="text-primary">
                                            <td>
                                            {{--                                <p style="font-size: 20px">السبت</p>--}}
                                            {{ date('D', strtotime($reveal->date)) }}

                                            {{--                                {{ date('dddd', strtotime($reveal->date)) }}                            </td>--}}
                                            <td>
                                                <p style="font-size: 20px">     {{$reveal->start}}
                                                    /       {{$reveal->end}} </p>
                                            </td>
                                            <td>  <form method="post" action="/reservations/{{$reveal->id}}/{{$user->id}}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">احجز</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                @else

                                    @for($i=0 ; $i<3 ;$i++)
                                        <tr class="text-primary">
                                            <td>
                                            {{ date('D', strtotime($reveals[$i]->date)) }}
                                            <td>
                                                <p style="font-size: 20px">     {{$reveals[$i]->start}}
                                                    /       {{$reveals[$i]->end}} </p>
                                            </td>
                                            <td>
                                                <form method='post' action="/reservations/{{$reveals[$i]->id}}/{{$user->id}}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">احجز</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endfor

                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

var star1= document.getElementById("star1");
 var star2= document.getElementById("star2");
 var star3= document.getElementById("star3");
 var star4= document.getElementById("star4");
 var star5= document.getElementById("star5");

 var star= document.getElementById("val");
 parseInt( star);
  if(star.innerText>=1.0000&&star.innerText< 1.9000)
  {
      star1.style.color="yellow";
  }else if(star.innerText>=2.0000&&star.innerText< 2.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
  }else if(star.innerText>=3.0000&&star.innerText< 3.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
    star3.style.color="yellow";
  }else if(star.innerText>=4.0000&&star.innerText< 4.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
    star3.style.color="yellow";
    star4.style.color="yellow";
  }
  else if(star.innerText>=5.0000&&star.innerText< 5.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
    star3.style.color="yellow";
    star4.style.color="yellow";
    star5.style.color="yellow";
  }
   
</script>
@endsection
