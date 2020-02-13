@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
<div class="container myMain-Section mt-5">
    <div class="row">
        <div class="col-sm-12 myImage-Section">
            <img src="{{ asset('/imgs/doctor_profile.jpg') }}">
        </div>
    </div>
    <div class="doctor-image d-flex">
        <img src="{{$user->avatar}}">
        <div class="d-flex flex-column mt-4 mr-4 text-white">
            <h3 style="font-size: 25px;text-shadow: 2px 2px 4px #000000;">{{$user->name}}</h3>
            <h4 style="font-size: 25px;text-shadow: 2px 2px 4px #000000;" class="Doc-Job">(طبيب {{$user->category->category}})</h4>
        </div>
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
                        <a href="/doctor_article/{{$user->id}}" class="btn btn-info mr-3">مقالاتي</a>

                    @endif
                @endif
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="rounded d-flex justify-content-center flex-column p-3 bg-primary mb-3 align-items-center renewTheShape">
                <h4 class="text-center text-white">تقييم الطبيب</h4>
                <form action="/rate" method="POST">
                    {{ csrf_field() }}
                    <div class="rating text-center">
                        <input id="e5" name="rate" value="5" type="radio"><label for="e5">☆</label>
                        <input  id="e4" name="rate" value="4" type="radio"><label for="e4">☆</label>
                        <input  id="e3" name="rate" value="3" type="radio"><label for="e3">☆</label>
                        <input id="e2" name="rate" value="2" type="radio"><label for="e2">☆</label>
                        <input  id="e1" name="rate" value="1" type="radio"><label for="e1">☆</label>
                        <input type="hidden" name="id" required="" value="{{ $user->id }}">
                        <button id="submitRate" class="btn btn-success ml-3"> حفظ التقييم</button>
                    </div>
                </form>
            </div>
            <div class="rounded d-flex justify-content-center flex-column p-3 bg-primary mb-3 renewTheShape">
                <h3 class="text-center text-white">عدد المقالات</h3>
                <p class="text-center fa-2x"  style="color:#aec9e0">{{count($user->articles)}}</p>
            </div>
            <div class=" rounded d-flex justify-content-center flex-column p-3 bg-primary mb-3 renewTheShape">
                <h3 class="text-center text-white">عدد الكشوفات</h3>
                <p class="text-center">{{count($all)}}</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="rounded text-center border border-primary bg-primary renewTheShape mb-5">
                <h3 class="text-white">سعر الكشف</h3>
                <label style="font-size: 25px;color:#aec9e0">{{$user->profile->price}} جنيه</label>
                <h3 class="text-white">عنوان العيادة</h3>
                <label style="font-size: 20px;color:#aec9e0">{{$user->profile->address}}</label>
            </div>
            <table class="table table-striped text-center reveals_table" style="background-color: #254c52;border-radius: 2%">
                <thead>
                    <tr style="font-size: 20px; color:#ffff">
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
                    <tr class="text-light" style="color:white">
                        <td>
                            <p style="font-size: 20px">لم يحدد</p>
                        <td>
                            <p style="font-size: 20px">لم يحدد</p>
                        </td>
                        <td>غيرمتاح</td>
                    </tr>
                @elseif(count($reveals) <= 4)
                    @foreach($reveals as $key=>$reveal)
                        <tr class="text-white">
                            <td>
                            {{ \Carbon\Carbon::parse($reveal->date)->format('d/m D')}}
                            </td>
                            <td>
                                <p style="font-size: 20px">  {{ \Carbon\Carbon::parse($reveal->start)->format('H:00')}} / {{ \Carbon\Carbon::parse($reveal->end)->format('H:00')}} </p>
                            </td>

                            <td>
                                    <button  id ="{{$reveal->id}}" class="btn btn-success" onclick="btnAjax('/reservations/{{$reveal->id}}/{{$user->id}}',{{$reveal->id}});" >احجز</button>
                            </td>
                        </tr>
                    @endforeach

                @else

                    @for($i=0 ; $i<4 ;$i++)
                        <tr class="text-white">
                            <td>
                            {{ \Carbon\Carbon::parse($reveals[$i]->date)->format('d/m D')}}
                            </td>
                            <td>
                                <p style="font-size: 20px">  {{ \Carbon\Carbon::parse($reveals[$i]->start)->format('H:00')}} / {{ \Carbon\Carbon::parse($reveals[$i]->end)->format('H:00')}} </p>

                            </td>
                            <td>
                                    <button id ="{{$reveals[$i]->id}}" class="btn btn-success" onclick="btnAjax('/reservations/{{$reveals[$i]->id}}/{{$user->id}}',{{$reveals[$i]->id}});" >احجز</button>
                            </td>
                        </tr>
                    @endfor

                @endif
                </tbody>
            </table>
            <div id="message"  class="alert alert-primary text-center" role="alert" style="display: none"></div>
        </div>
    </div>
</div>

<script type="text/javascript"  >

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

<script  >
    function btnAjax(url,id){
       let btn = document.getElementById(id).disabled = true;

        $.ajax({
            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',

            url:url,

            data:{reserved:true},
            success:function(response){

                let message = document.getElementById('message');
                message.style.display = "block";
                message.innerHTML = response.message;
                console.log(response.message);
            }
        });
    }

</script>

@endsection
