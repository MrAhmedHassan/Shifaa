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
                <div class="d-flex justify-content-start stars">
                    <i class="fa fa-star fa-2x" id="fifthStar"></i>
                    <i class="fa fa-star fa-2x" id="fourthStar"></i>
                    <i class="fa fa-star fa-2x" id="thirdStar"></i>
                    <i class="fa fa-star fa-2x" id="secondStar"></i>
                    <i class="fa fa-star fa-2x" id="firstStar"></i>
                </div>
                <i class="fa fa-stethoscope fa-2x d-flex justify-content-start mb-3 text-primary">
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

<script>
    let firstStar = document.getElementById('firstStar');
    let secondStar = document.getElementById('secondStar');
    let thirdStar = document.getElementById('thirdStar');
    let fourthStar = document.getElementById('fourthStar');
    let fifthStar = document.getElementById('fifthStar');

    fifthStar.addEventListener('mouseover', function() {
        firstStar.style.color = 'yellow';
        secondStar.style.color = 'yellow';
        thirdStar.style.color = 'yellow';
        fourthStar.style.color = 'yellow';
        fifthStar.style.color = 'yellow';
    })
    fifthStar.addEventListener('mouseout', function() {
        firstStar.style.color = '';
        secondStar.style.color = '';
        thirdStar.style.color = '';
        fourthStar.style.color = '';
        fifthStar.style.color = '';
    })

    fourthStar.addEventListener('mouseover', function() {
        firstStar.style.color = 'yellow';
        secondStar.style.color = 'yellow';
        thirdStar.style.color = 'yellow';
        fourthStar.style.color = 'yellow';
    })
    fourthStar.addEventListener('mouseout', function() {
        firstStar.style.color = '';
        secondStar.style.color = '';
        thirdStar.style.color = '';
        fourthStar.style.color = '';
    })

    thirdStar.addEventListener('mouseover', function() {
        firstStar.style.color = 'yellow';
        secondStar.style.color = 'yellow';
        thirdStar.style.color = 'yellow';
    })
    thirdStar.addEventListener('mouseout', function() {
        firstStar.style.color = '';
        secondStar.style.color = '';
        thirdStar.style.color = '';
    })

    firstStar.addEventListener('mouseover', function() {
        firstStar.style.color = 'yellow';
    })
    firstStar.addEventListener('mouseout', function() {
        firstStar.style.color = '';
    })

    secondStar.addEventListener('mouseover', function() {
        firstStar.style.color = 'yellow';
        secondStar.style.color = 'yellow';
    })
    secondStar.addEventListener('mouseout', function() {
        firstStar.style.color = '';
        secondStar.style.color = '';
    })
</script>
@endsection
