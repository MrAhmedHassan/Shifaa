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
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">السبت</p>
                            </td>
                            <td>
                                <p style="font-size: 20px">5:00pm / 1:00pm</p>
                            </td>
                            <td><button type="button" class="btn btn-success">احجز</button></td>
                        </tr>
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">الاحد</p>
                            </td>
                            <td>
                                <p style="font-size: 20px">5:00pm / 1:00pm</p>
                            </td>
                            <td><button type="button" class="btn btn-success">احجز</button></td>
                        </tr>
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">الاثنين</p>
                            </td>
                            <td>
                                <p style="font-size: 20px">5:00pm / 1:00pm</p>
                            </td>
                            <td><button type="button" class="btn btn-success">احجز</button></td>
                        </tr>
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">الثلاثاء</p>
                            </td>
                            <td>
                                <p style="font-size: 20px">5:00pm / 1:00pm</p>
                            </td>
                            <td><button type="button" class="btn btn-success">احجز</button></td>
                        </tr>
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">الاربعاء</p>
                            </td>
                            <td>
                                <p style="font-size: 20px">5:00pm / 1:00pm</p>
                            </td>
                            <td><button type="button" class="btn btn-success">احجز</button></td>
                        </tr>
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">الخميس</p>
                            </td>
                            <td>
                                <p style="font-size: 20px">5:00pm / 1:00pm</p>
                            </td>
                            <td><button type="button" class="btn btn-success">احجز</button></td>
                        </tr>
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">الجمعة</p>
                            </td>
                            <td>
                                <p style="font-size: 20px">5:00pm / 1:00pm</p>
                            </td>
                            <td><button type="button" class="btn btn-success">احجز</button></td>
                        </tr>
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
