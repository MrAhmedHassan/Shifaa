@extends('layouts.app')
@section('content')

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
                        <td><p style="font-size: 20px">السبت</p></td>
                        <td><p style="font-size: 20px">5:00pm / 1:00pm</p></td>
                        <td><button type="button" class="btn btn-success">احجز</button></td>
                      </tr>
                      <tr class="text-primary">
                        <td><p style="font-size: 20px">الاحد</p></td>
                        <td><p style="font-size: 20px">5:00pm / 1:00pm</p></td>
                        <td><button type="button" class="btn btn-success">احجز</button></td>
                      </tr>
                      <tr class="text-primary">
                        <td><p style="font-size: 20px">الاثنين</p></td>
                        <td ><p style="font-size: 20px">5:00pm / 1:00pm</p></td>
                        <td><button type="button" class="btn btn-success">احجز</button></td>
                      </tr>
                      <tr class="text-primary">
                        <td><p style="font-size: 20px">الثلاثاء</p></td>
                        <td ><p style="font-size: 20px">5:00pm / 1:00pm</p></td>
                        <td><button type="button" class="btn btn-success">احجز</button></td>
                      </tr>
                      <tr class="text-primary">
                        <td><p style="font-size: 20px">الاربعاء</p></td>
                        <td ><p style="font-size: 20px">5:00pm / 1:00pm</p></td>
                        <td><button type="button" class="btn btn-success">احجز</button></td>
                      </tr>
                      <tr class="text-primary">
                        <td><p style="font-size: 20px">الخميس</p></td>
                        <td ><p style="font-size: 20px">5:00pm / 1:00pm</p></td>
                        <td><button type="button" class="btn btn-success">احجز</button></td>
                      </tr>
                      <tr class="text-primary">
                        <td><p style="font-size: 20px">الجمعة</p></td>
                        <td ><p style="font-size: 20px">5:00pm / 1:00pm</p></td>
                        <td><button type="button" class="btn btn-success">احجز</button></td>
                      </tr>
                    </tbody>
                  </table>
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
