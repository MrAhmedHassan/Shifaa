@extends('layouts.app')
@section('content')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">--}}
{{-- <link href="{{ asset('css/preview.css') }}" rel="stylesheet">--}}

<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}

<div class="container myMain-Section mt-5">

    <div class="row">
        <div class="col-sm-12 myImage-Section">
            <img src="http://nicesnippets.com/demo/Nature-Night-Sky-Stars-Blurred-Light-Show-Mountains-WallpapersByte-com-1920x1080.jpg">
        </div>
    </div>
    <div class="doctor-image">
        <img src="{{$user->avatar}}">
        <h1>{{$user->name}}</h1>
        <span class="Doc-Job">(طبيب {{$user->category->category}})</span>
    </div>

    <div class="row btnsForProfil mt-5">
        <div class="col-sm-3 sdefine">
            <p>
                <i class="fa fa-star fa-2x" id="star5"></i>
                <i class="fa fa-star fa-2x" id="star4"></i>
                <i class="fa fa-star fa-2x" id="star3"></i>
                <i class="fa fa-star fa-2x" id="star2"></i>
                <i class="fa fa-star fa-2x" id="star1"></i>
            </p>
        </div>
        <div id="val" style="display:none">{{$user->averageRating}}</div>

        <div class="col-sm-5 sdefine">
            <p class="ydefine">{{$user->profile->abstract}}</p>
        </div>
        <div class="col-sm-4 zdefine d-flex justify-content-end">
                @if(auth()->user())
                    @if(auth()->user()->id == $user->id)
                        <a href="/profiles/{{$user->id}}/edit" class="btn btn-info ml-3">تعديل الملف الشخصي</a>
                    @endif
                @endif
                @if(auth()->user())
                    @if(auth()->user()->id == $user->id)
                        <a href="/profile/complete" class="btn btn-info">أكمل الملف الشخصي</a>
                        <a href="/doctor_article/{{$user->id}}" class="btn btn-dark">مقالاتي</a>

                    @endif
                @endif



        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="d-flex justify-content-center flex-column p-3 bg-primary mb-3 align-items-center renewTheShape">
                <h4 class="text-center text-white">أديني تقييم عشان مزعلكش</h4>
                <form action="/rate" method="POST">
                    {{ csrf_field() }}
                    <div class="rating text-center">
                        <input id="e5" name="rate" value="5" type="radio"><label for="e5">☆</label>
                        <input  id="e4" name="rate" value="4" type="radio"><label for="e4">☆</label>
                        <input  id="e3" name="rate" value="3" type="radio"><label for="e3">☆</label>
                        <input id="e2" name="rate" value="2" type="radio"><label for="e2">☆</label>
                        <input  id="e1" name="rate" value="1" type="radio"><label for="e1">☆</label>
                        <input type="hidden" name="id" required="" value="{{ $user->id }}">
                        <button id="submitRate" class="btn btn-success ml-3">Submit Review</button>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-center flex-column p-3 bg-primary mb-3 renewTheShape">
                <h3 class="text-center text-white">عدد المقالات</h3>
                <p class="text-center">{{count($user->articles)}}</p>
            </div>
            <div class="d-flex justify-content-center flex-column p-3 bg-primary mb-3 renewTheShape">
                <h3 class="text-center text-white">عدد الكشوفات</h3>
                <p class="text-center">{{count($user->doctorReservations)}}</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="text-center border border-primary bg-primary renewTheShape mb-5">
                <h3 class="text-white">سعر الكشف</h3>
                <label>{{$user->profile->price}} جنيه</label>
                <h3 class="text-white">عنوان العيادة</h3>
                <label>{{$user->profile->address}}</label>
            </div>
            <table class="table table-striped table-dark text-center border border-warning">
                <thead>
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
                    <tr class="text-light">
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
                            {{ \Carbon\Carbon::parse($reveal->date)->format('D')}}
                            <td>
                                <p style="font-size: 20px">  {{ \Carbon\Carbon::parse($reveal->start)->format('H:00')}} / {{ \Carbon\Carbon::parse($reveal->end)->format('H:00')}} </p>
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
                            {{--                                <p style="font-size: 20px">السبت</p>--}}
                            {{ \Carbon\Carbon::parse($reveals[$i]->date)->format('D')}}
                            {{--                                {{ date('dddd', strtotime($reveal->date)) }}                            </td>--}}
                            <td>
                                <p style="font-size: 20px">     {{$reveals[$i]->from}}
                                    /       {{$reveals[$i]->to}} </p>
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
