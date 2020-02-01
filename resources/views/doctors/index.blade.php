@extends('layouts.app')
@section('content')
{{--{{ asset('/imgs/docImage.jpg') }}--}}
<div class="container ">


    @foreach($doctors as $doctor)
    <div class="contentDoctor doctors ">
        <div class="row mt-5 p-3 bg-dark doc">
            <div class="col-md-2 tall">
                <img class="docImage img-fluid" src="{{ asset($doctor->avatar) }}" alt="Doctor">
{{--                <div class="d-flex justify-content-center mt-3">--}}
{{--                    <a href="" class="badge pl-4 pr-4 border border-warning advertise">إعلان</a>--}}
{{--                </div>--}}
            </div>
            <div class="col-md-5 tall">
               <a href="/profiles/{{$doctor->id}}"> <h4 class="text-primary">د/{{$doctor->name}}</h4></a>
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
            <div class="col-md-5 tall">
                <div class="row editPartitionsOfPartThree">
                    <div class="col-md-3 tall editPartitionsOfPartThree">
                        <h4 class="text-center pt-3 pb-3 rounded bg-primary text-white">الأيام</h4>
                        <div class="text-center text-primary border border-warning rounded">
                            <p class="mt-4">السبت</p>
                            <p class="mt-4">الأحد</p>
                            <p class="mt-4">الأثنين</p>
                            <p class="mt-4">الثلاثاء</p>
                            <p class="mt-4">الأربعاء</p>
                            <p class="mt-4">الخميس</p>
                        </div>
                    </div>
                    <div class="col-md-6 tall editPartitionsOfPartThree">
                        <h4 class="text-center pt-3 pb-3 rounded bg-primary text-white">من / إلي</h4>
                        <div class="text-center text-primary border border-warning rounded">
                            <p class="mt-4">5:00pm / 1:00pm</p>
                            <p class="mt-4">5:00pm / 1:00pm</p>
                            <p class="mt-4">5:00pm / 1:00pm</p>
                            <p class="mt-4">5:00pm / 1:00pm</p>
                            <p class="mt-4">5:00pm / 1:00pm</p>
                            <p class="mt-4">5:00pm / 1:00pm</p>
                        </div>
                    </div>
                    <div class="col-md-3 tall editPartitionsOfPartThree">
                        <h4 class="text-center pt-3 pb-3 rounded bg-primary text-white">أحجز</h4>
                        <div class="text-center border border-warning pt-2 pb-2 rounded">
                            <button class="btn btn-danger mb-2 mt-2">أحجز</button>
                            <button class="btn btn-danger mb-2">أحجز</button>
                            <button class="btn btn-danger mb-2">أحجز</button>
                            <button class="btn btn-danger mb-2">أحجز</button>
                            <button class="btn btn-danger mb-2">أحجز</button>
                            <button class="btn btn-danger mb-2">أحجز</button>
                        </div>
                    </div>
                </div>
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
