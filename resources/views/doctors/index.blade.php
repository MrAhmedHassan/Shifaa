@extends('layouts.app')
@section('content')
{{ asset('/imgs/docImage.jpg') }}
<div class="container ">
    <div class="contentDoctor doctors ">
        <div class="row mt-5 p-3 bg-dark doc">
            <div class="col-md-2 tall">
                <img class="docImage" src="{{ asset('/imgs/docImage.jpg') }}" alt="Doctor">
                <div class="d-flex justify-content-center mt-3">
                    <a href="" class="badge pl-4 pr-4 border border-warning advertise">إعلان</a>
                </div>
            </div>
            <div class="col-md-5 tall">
                <h4 class="text-primary">مركز شاينى وايت لزراعة و تجميل الاسنان د شادى على حسين</h4>
                <p class="text-white">نخبة من افضل الاطباء المتخصصين فى طب وجراحة وتجميل الاسنان والحاصلين على الدكتوراه او الماجستير واعضاء بهيئة التدريس</p>
                <div class="d-flex justify-content-start stars">
                    <i class="fa fa-star fa-2x" id="fifthStar"></i>
                    <i class="fa fa-star fa-2x" id="fourthStar"></i>
                    <i class="fa fa-star fa-2x" id="thirdStar"></i>
                    <i class="fa fa-star fa-2x" id="secondStar"></i>
                    <i class="fa fa-star fa-2x" id="firstStar"></i>
                </div>
                <p class="d-flex justify-content-start text-white">التقييم العام من 195 زاروا الدكتور</p>
                <i class="fa fa-stethoscope fa-2x d-flex justify-content-start mb-3 text-primary">
                    <span class="details mt-2 ml-3 text-white">
                 دكتور اسنان متخصص في تقويم الأسنان، حشو وعلاج الجذور والأعصاب، تجميل أسنان، زراعة أسنان، جراحة وجه وفكين،أسنان أطفال، علاج اللثة، تركيبات أسنان، أسنان مسنين، أشعة أسنان، أسنان بالغين
                    </span>
                </i>
                <i class="fa fa-map-marker fa-2x d-flex justify-content-start mb-3 mr-2 text-primary">
                    <span class="details mt-2 text-white">شارع التسعين الشمالى - مول سى ام سى الطبى - أعلى بنك سى اى بيه - الدور الأول</span>
                </i>
                <i class="fa fa-money fa-2x d-flex justify-content-start mb-3 text-primary"><span class="details mt-2 mr-2 text-white">الكشف : 200 جنيه</span></i>  
                <i class="fa fa-clock-o fa-2x d-flex justify-content-start mb-3 text-primary"><span class="details mt-2 mr-2 text-white">مدة الأنتظار : 22 دقيقة</span></i>
                <i class="fa fa-mobile fa-2x d-flex justify-content-start mb-3 text-primary"><span class="details mt-2 mr-3 text-white">67661-سعر مكالمة عادية</span></i>
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
