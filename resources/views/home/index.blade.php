@extends('layouts.app')
@section('content')


{{-- First Section "home_slider" --}}

<div class="home_slider m-0 p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/imgs/home_1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption_1">
                <h1>الوهم نصف الداء، والاطمئنان نصف الدواء، والصبر أول خطوات الشفاء</h1>
                <h3>ابن سينا</h3>
              </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="{{ asset('/imgs/home_2.jpg') }}" alt="First slide" id="qqq">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption_2">
                <h1>لا أعلم علما بعد الحلال والحرام أنبل من الطب</h1>
                <h3>الشافعي</h3>
              </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="{{ asset('/imgs/home_3.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption_3">
                <h1>أكثر العلل إنما تتولد من فضول الطعام</h1>
                <h3>ابن سينا</h3>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>


<div class="d-flex justify-content-center align-items-center">
{{-- <div class="my_skew"> --}}
    <div class="my_skew container">
      <div class="row">
        <section id="h_4"><a href="#"><i class="far fa-question-circle"></i><h3>إختبر نفسك</h3></a></section>
        <section id="h_3"><a href="#"><i class="fas fa-capsules"></i><h3>الوقاية من امراض العصر</h3></a></section>
        <section id="h_2"><a href="#"><i class="fas fa-child"></i><h3>شخص نفسك</h3></a></section>
        <section id="h_1"><a href="#"><i class="fas fa-user-nurse"></i><h3>اشهر الاطباء</h3></a></section>
        <div style="clear:both"></div>
      </div>
    </div>
{{-- </div> --}}
</div>



{{-- Second Section "top_rated_doctors" --}}

<div class="top_rated_doctors container">
<div class="row">
  <div class="col-md-3">
    <div class="item-doctor ">
      <img class="img-fluid w-100" src="{{ asset('/imgs/doctor_4.PNG') }}">
        <div class="doctor-layer1">
        <h4>احمد النجم</h4>
        <p>دكتور باطنة</p>    
        </div>
      
        <div class="doctor-layer2" >
        <h4> عن د. احمد النجم</h4>
        <p>إستشاري الباطنة والسكر والروماتيزم كلية الطب جامعة الإسكندرية</p> <a href="*" >اعرف المزيد</a>
        </div>                
      </div>
    </div>
  
    <div class="col-md-3">
    <div class="item-doctor ">
      <img class="img-fluid w-100" src="{{ asset('/imgs/doctor_3.PNG') }}">
        <div class="doctor-layer1">
        <h4>محمود التمساح</h4>
        <p>دكتور نفسية</p>    
        </div>
      
        <div class="doctor-layer2" >
        <h4> عن د. محمود التمساح</h4>
        <p>إستشاري الامراض النفسية كلية الطب جامعة الأزهر</p> <a href="*" >اعرف المزيد</a>
          </div>                
      </div>
    </div>
    
    <div class="col-md-3">
    <div class="item-doctor ">
      <img class="img-fluid w-100" src="{{ asset('/imgs/doctor_2.PNG') }}">
        <div class="doctor-layer1">
        <h4>حمو الشبح</h4>
        <p>دكتور جراحة عامة</p>    
        </div>
      
        <div class="doctor-layer2" >
          <h4> عن د. حمو الشبح</h4>
          <p>إستشاري الجراحة العامة كلية الطب جامعة بني سويف</p> <a href="*" >اعرف المزيد</a>
        </div>                
      </div>
    </div>
  
    <div class="col-md-3">
      <div class="item-doctor ">
        <img class="img-fluid w-100" src="{{ asset('/imgs/doctor_1.PNG') }}">
          <div class="doctor-layer1">
          <h4>محمد تيرافيرس</h4>
          <p>دكتور عظام</p>    
          </div>
        
          <div class="doctor-layer2" >
            <h4> عن د. محمد تيرافيرس</h4>
            <p>إستشاري عظام كلية الطب جامعة القاهرة</p> <a href="*" >اعرف المزيد</a>
          </div>                
        </div>
      </div>

  </div>
</div>




@endsection
