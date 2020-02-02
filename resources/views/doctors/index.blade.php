@extends('layouts.app')
@section('content')
<div class="container ">


    @foreach($doctors as $doctor)
    <div class="contentDoctor doctors ">
        <div class="row mt-5 p-3 bg-dark doc">
            <div class="col-md-2 tall">
                <img class="docImage img-fluid" src="{{ asset($doctor->avatar) }}" alt="Doctor">
                {{-- <div class="d-flex justify-content-center mt-3">--}}
                {{-- <a href="" class="badge pl-4 pr-4 border border-warning advertise">إعلان</a>--}}
                {{-- </div>--}}
            </div>
            <div class="col-md-5 tall">
                <a href="/profiles/{{$doctor->id}}">
                    <h4 class="text-primary">د/{{$doctor->name}}</h4>
                </a>
                <p class="text-white">دكتور {{$doctor->category->category}}</p>
                <p>
      <i class="fa fa-star fa-2x" id="star5"></i>
         <i class="fa fa-star fa-2x" id="star4"></i>
         <i class="fa fa-star fa-2x" id="star3"></i>
         <i class="fa fa-star fa-2x" id="star2"></i>
         <i class="fa fa-star fa-2x" id="star1"></i>
       </p>
       <div id="val" style="display:none">{{$doctor->averageRating}}</div>




                    <span class="details mt-2 ml-3 text-white">
                        نبذة : {{$doctor->profile->abstract}}
                    </span>
                </i>



                
                <i class="fa fa-map-marker fa-2x d-flex justify-content-start mb-3 mr-2 text-primary">




                    <span class="details mt-2 text-white">عنوان العيادة : {{$doctor->profile->address}}</span>
                </i>
                <i class="fa fa-money fa-2x d-flex justify-content-start mb-3 text-primary"><span class="details mt-2 mr-2 text-white">سعر الكشف :{{$doctor->profile->price}} جنيه </span></i>
            </div>

            <div class="col-md-5">
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
                        $reveals = $doctor->reveals;
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
                                {{ \Carbon\Carbon::parse($reveal->date)->format('D')}}
                                {{--                                {{ date('dddd', strtotime($reveal->date)) }}                            </td>--}}
                                <td>
                                    <p style="font-size: 20px">     {{$reveal->from}}
                                        /       {{$reveal->to}} </p>
                                </td>
                                <td>  <form method="post" action="/reservations/{{$reveal->id}}/{{$doctor->id}}">
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
                                    <form method='post' action="/reservations/{{$reveals[$i]->id}}/{{$doctor->id}}">
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
    @endforeach
</div>

<script type="text/javascript">

var star1= document.getElementById("star1");
 var star2= document.getElementById("star2");
 var star3= document.getElementById("star3");
 var star4= document.getElementById("star4");
 var star5= document.getElementById("star5");

 var star= document.getElementById("val");
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
