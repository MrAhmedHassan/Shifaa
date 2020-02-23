@extends('layouts.app')
@section('content')

{{-- loading page --}}
<section id="loading">
  <div class="sk-folding-cube">
    <div class="sk-cube1 sk-cube"></div>
    <div class="sk-cube2 sk-cube"></div>
    <div class="sk-cube4 sk-cube"></div>
    <div class="sk-cube3 sk-cube"></div>
  </div>
  <h1 class="text-white dotted_loading">شفاء</h1>
  <div class="loader">...</div>
</section>


{{-- fly Section "color_option" --}}

<div id="colors_div">
  <div id="colors_option">
    <h5 align=right class="mr-2">اختر لون الموقع :</h5>
    <ul class="list-unstyled">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <i class="fas fa-cog mt-2" id="color_icon"></i>
  <div class="clearfix"></div>
</div>

{{-- First Section "home_slider" --}}

<div class="home_slider m-0 p-0" id="home_slider">
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


<div class="d-flex justify-content-center align-items-center ">
{{-- <div class="my_skew"> --}}
    <div class="my_skew container d-flex justify-content-center align-items-center" id="top_rated_doctors">
      <div class="row">
        <section id="h_4"><a href="#questions"><i class="far fa-question-circle"></i><h3>اختبر نفسك</h3></a></section>
        <section id="h_3"><a href="#most_diseases"><i class="fas fa-capsules"></i><h3>الوقاية من امراض العصر</h3></a></section>
        <section id="h_2"><a href="#body_hover"><i class="fas fa-child"></i><h3>شخص نفسك</h3></a></section>
        <section id="h_1"><a href="#top_rated_doctors"><i class="fas fa-user-nurse"></i><h3>اشهر الاطباء</h3></a></section>
        <div style="clear:both"></div>
      </div>
    </div>
  </div>



{{-- Second Section "top_rated_doctors" --}}


<div class="top_rated_doctors container">
    <div class="row">
     <div  class="col-md-12 d-flex flex-column justify-content-center align-items-center mb-5"><h2 class="mydiv_content">أشهر الاطباء</h2><hr class="myline_small"><hr class="myline_big"><hr class="myline_small"></div>

@foreach($topDoctors as $topDoctor)
        <div class="col-md-3 col-sm-6">
            <div class="item-doctor ">
                <img class="img-fluid w-100" style="height: 330px" src="{{ $topDoctor->avatar }}">
                <div class="doctor-layer1 d-flex flex-column justify-content-center align-items-center">
                    <h4>{{$topDoctor->name}}</h4>
                    <p>دكتور {{$topDoctor->category->category}}</p>
                </div>

                <div class="doctor-layer2 d-flex flex-column justify-content-center align-items-center" >
                    <h4>  د. {{$topDoctor->name}}</h4>
                    <p>{{$topDoctor->profile->abstract}}</p>
                    <a href="/profiles/{{$topDoctor->id}}" >عرض البروفايل</a>
                </div>
            </div>
        </div>
    @endforeach

    </div>

</div>

        <div class="container" id="body_hover">
      <div class="row">
        <div class="col-md-12 man_body d-flex flex-column justify-content-center align-items-center">
          <h2 class="mydiv_content">شخص نفسك</h2>
          <hr class="myline_small">
          <hr class="myline_big">
          <hr class="myline_small">
        </div>
      </div>
</div>

{{-- Third Section "body_hover" --}}
<div class="body_hover">
  <!-- SVG -->
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <clipPath id="A1">
          <polygon points="120 37,190 37,190 45,120 45"></polygon> <!--العين-->
      </clipPath>
      <clipPath id="A2">
          <polygon points="128 45,188 45,188 85,128 85"></polygon> <!--أنف,أذن,حنجرة-->
      </clipPath>
      <clipPath id="A3">
        <polygon points="123 4,123 90,190 90,190 4"></polygon>
        <!--الرأس,العنق-->
      </clipPath>
      <clipPath id="A4">
        <polygon points="104 93,107 151,133 151,158 140,179 151,210 151,213 93,179 86,159 90,141 86"></polygon>
        <!--الصدر-->
      </clipPath>
      <clipPath id="A5">
        <polygon points="100 94,100 152,50 295,25 310,18 282,88 94,100 94,212 94,216 152,258 295,281 310,292 295,232 94,212 94"></polygon>
        <!--الأذرع-->
      </clipPath>
      <clipPath id="A6">
        <polygon points="100 152,112 187,112 187,112 236,158 297,205 236,205 187,216 152,182 152,158 142,135 152"></polygon>
        <!--البطن,الحوض-->
      </clipPath>
      <clipPath id="A7">
        <polygon points="101 297,78 512,110 512,158 297,208 512,238 512,216 297"></polygon>
        <!--الأرجل-->
      </clipPath>
    </defs>
  </svg>
  <!-------------------------------------------------------------------------------------------------------------------------------->
  <div class="container">
    <div class="d-flex flex-row-reverse">


      <div class="col-md-6 col-sm-6 ">
        <div class="box" id="box">

          <div class="bg-info d-flex flex-column justify-content-center align-items-center py-5" style="height: 524px; border-radius: 5%" id="body_hover_init">
            <h1 class="py-3 text-white"> مرر السهم علي الجسد</h1><i class="fas fa-male fa-4x text-white"></i>
          </div>

          <div id="hisEye" class="list-group">
            <a href="/diseases/9" class="list-group-item">جفاف العين و الفم</a>
            <a href="/diseases/10" class="list-group-item">أفرازات العين</a>
            <a href="/diseases/11" class="list-group-item">ألم العين</a>
          </div>

          <div id="hisNose" class="list-group">
            <a href="/diseases/12" class="list-group-item">السعال و البرد</a>
            <a href="/diseases/13" class="list-group-item">جفاف الفم و العطش الزائد</a>
            <a href="/diseases/14" class="list-group-item">ألم الأذن عند الكبار</a>
            <a href="/diseases/15" class="list-group-item">السعال المزمن</a>
            <a href="/diseases/16" class="list-group-item">ألتهاب الحلق</a>
            <a href="/diseases/17" class="list-group-item">فقدان السمع المفاجئ</a>
            <a href="/diseases/18" class="list-group-item">صعوبة البلع</a>
            <a href="/diseases/19" class="list-group-item">طنين الأذن</a>
          </div>

          <div id="hisHead" class="list-group">
            <a href="/diseases/1" class="list-group-item">تساقط الشعر عند الرجال</a>
            <a href="/diseases/2" class="list-group-item">الصداع</a>
            <a href="/diseases/3" class="list-group-item">الدوار عند الوقوف</a>
            <a href="/diseases/4" class="list-group-item">ألم الرقبة</a>
            <a href="/diseases/5" class="list-group-item">فقدان الشم و التذوق</a>
            <a href="/diseases/6" class="list-group-item">تورم الغدد في الرقبة</a>
            <a href="/diseases/7" class="list-group-item">ألم الفك , اللثة أو الأسنان</a>
            <a href="/diseases/8" class="list-group-item">الأرق</a>
          </div>

          <div id="hisChest" class="list-group">
            <a href="/diseases/20" class="list-group-item">ألم الصدر</a>
            <a href="/diseases/21" class="list-group-item">خفقان القلب</a>
            <a href="/diseases/22" class="list-group-item">أسفل الظهر</a>
            <a href="/diseases/23" class="list-group-item">ضيق التنفس عند الكبار</a>
            <a href="/diseases/24" class="list-group-item">الصفير مع التنفس عند الكبار</a>
          </div>

          <div id="hisArms" class="list-group">
            <a href="/diseases/25" class="list-group-item">ألم المرفق</a>
            <a href="/diseases/26" class="list-group-item">ألم اليد</a>
            <a href="/diseases/27" class="list-group-item">مشاكل الأظافر</a>
            <a href="/diseases/28" class="list-group-item">العامل الروماتويدي الأيجابي</a>
            <a href="/diseases/29" class="list-group-item">ألم الكتف</a>
            <a href="/diseases/30" class="list-group-item">ألم الرسغ</a>
          </div>

          <div id="hisBely" class="list-group">
            <a href="/diseases/31" class="list-group-item">علاج أرتداد حمض المعدة</a>
            <a href="/diseases/32" class="list-group-item">غازات الأمعاء</a>
            <a href="/diseases/33" class="list-group-item">الدم في البول عند الرجال</a>
            <a href="/diseases/34" class="list-group-item">فحص سرطان القولون</a>
            <a href="/diseases/35" class="list-group-item">الأمساك عند الكبار</a>
            <a href="/diseases/36" class="list-group-item">الأسهال</a>
            <a href="/diseases/37" class="list-group-item">صعوبة التبول</a>
            <a href="/diseases/38" class="list-group-item">ضعف العضلات</a>
            <a href="/diseases/39" class="list-group-item">ألم مفصل الحوض</a>
            <a href="/diseases/40" class="list-group-item">فقد السيطرة علي التبول عند الرجال</a>
            <a href="/diseases/41" class="list-group-item">ورم أو ألم ف كيس الخصيتين</a>
            <a href="/diseases/42" class="list-group-item">كثرة التبول أو التبول المؤلم عند الرجال</a>
            <a href="/diseases/43" class="list-group-item">ألم القضيب قروحه,أفرازاته أو أورامه</a>
            <a href="/diseases/44" class="list-group-item">نزيف المستقيم</a>
            <a href="/diseases/45" class="list-group-item">ألم المستقيم و الحكة</a>
            <a href="/diseases/46" class="list-group-item">ألم المتكرر في البطن</a>
            <a href="/diseases/47" class="list-group-item">ألم البطن الشديد حديث الظهور</a>
            <a href="/diseases/48" class="list-group-item">مستضد البروستاتا</a>
          </div>

          <div id="hisLegs" class="list-group">
            <a href="/diseases/49" class="list-group-item">ألم القدم</a>
            <a href="/diseases/50" class="list-group-item">النقرس</a>
            <a href="/diseases/51" class="list-group-item">ألم الركبة</a>
            <a href="/diseases/52" class="list-group-item">تورم القدم الحاد</a>
            <a href="/diseases/53" class="list-group-item">الألتهاب العظمي المفصلي للركبة</a>
            <a href="/diseases/54" class="list-group-item">تورم الركبة المزمن</a>
            <a href="/diseases/55" class="list-group-item">ألم الكاحل</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div id="figura">
          <img style="opacity: .4;" src="{{ asset('/imgs/snipMan.PNG') }}" alt="body">
          <map name="recortes">
              <area id="eye" shape="poly" coords="120,37,190,37,190,45,120,45" alt="eye" title="العين">
              <area id="nose" shape="poly" coords="120,45,188,45,188,85,120,85" alt="nose" title="أنف,أذن,حنجرة">
              <area id="head" shape="poly" coords="123,4,123,90,190,90,190,4" alt="head" title="الرأس,العنق">
              <area id="chest" shape="poly" coords="104,93,107,151,133,151,158,140,179,151,210,151,213,93,179,86,159,90,141,86" title="الصدر">
              <area id="arms" shape="poly" coords="100,94,100,152,50,295,25,310,18,282,88,94,100,94,212,94,216,152,258,295,281,310,292,295,232,94,212,94" title="الأذرع">
              <area id="bely" shape="poly" coords="100,152,112,187,112,187,112,236,158,297,205,236,205,187,216,152,182,152,158,142,135,152" title="البطن,الحوض">
              <area id="legs" shape="poly" coords="101,297,78,512,110,512,158,297,208,512,238,512,216,297" alt="legs" title="الأرجل">
              <img id="capaRecorte" src="{{ asset('/imgs/snipMan.PNG') }}" alt="body">
          </map>
          <img src="https://lh3.googleusercontent.com/-HqFCpcmlv1U/VjZqE6e7u0I/AAAAAAAAGao/hIQohrsu0xI/s800-Ic42/transparente.gif" id="imagen" usemap="#recortes">
        </div>
      </div>
    </div>
  </div>
</div>



<!-- start -->
{{-- Fourth Section "most_diseases" --}}
<div class="container" id="most_diseases">
    <div class="row">
      <div  class="col-md-12 d-flex flex-column justify-content-center align-items-center mb-5"><h2 class="mydiv_content"> أمراض العصر</h2><hr class="myline_small"><hr class="myline_big"><hr class="myline_small"></div>
    </div>
  </div>

  <div class="most_diseases container my-4" >

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top d-flex justify-content-center align-items-center">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-circle-right mb-4" style="font-size: 2.5rem"></i></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-circle-left mb-4"  style="font-size: 2.5rem" ></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">



        <div class="carousel-item active">
        <div class="row">
            @if(count($trends) < 1)

            <h1>There is no article now</h1>

                @elseif(count($trends) <= 3 )

                @for($i=0 ; count($trends) > $i  ;$i++)
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{$trends[$i]->avatar}}" style="height: 240px" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{$trends[$i]->title}}</h4>
                                <a href="/trends/{{$trends[$i]->id}}">
                  <p class="card-text text-dark">{{ substr(strip_tags($trends[$i]->description), 0, 200) }}
                    {{ strlen(strip_tags($trends[$i]->description)) > 100 ? "...اقرأ المزيد..." : "" }}
                  </p>
                </a>
                            </div>
                        </div>
                    </div>
                @endfor

                @elseif(count($trends) > 3)

                @for($i=0 ; count($trends) > $i  ;$i++)
                    @if($i == 3)
                        @break
                    @endif
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <img class="card-img-top" src="{{$trends[$i]->avatar}}" style="height: 240px" alt="Card image cap">
                            <div class="card-body text-right">
                                <h4 class="card-title">{{$trends[$i]->title}}</h4>
                                <a href="/trends/{{$trends[$i]->id}}">
                  <p class="card-text text-dark">{{ substr(strip_tags($trends[$i]->description), 0, 200) }}
                    {{ strlen(strip_tags($trends[$i]->description)) > 100 ? "...اقرأ المزيد..." : "" }}
                  </p>
                </a>
                            </div>
                        </div>
                    </div>

                @endfor

            @endif


        </div>
        <!--/.Second slide-->

      </div>
      <!--/.First slide-->

      <!--Second slide-->
        @if(count($trends) > 3)
      <div class="carousel-item">

        <div class="row">
        @for($i=3 ; count($trends) > $i  ;$i++)
                @if($i == 6)
                    @break
                @endif
          <div class="col-md-4 clearfix d-sm-block">
            <div class="card mb-2">
              <img class="card-img-top" src="{{$trends[$i]->avatar}}" style="height: 240px" alt="Card image cap">
              <div class="card-body text-right">
                <h4 class="card-title"> {{$trends[$i]->title}}</h4>
                <a href="/trends/{{$trends[$i]->id}}">
                  <p class="card-text text-dark">{{ substr(strip_tags($trends[$i]->description), 0, 200) }}
                    {{ strlen(strip_tags($trends[$i]->description)) > 100 ? "...اقرأ المزيد..." : "" }}
                  </p>
                </a>
              </div>
            </div>
          </div>

          @endfor
        </div>

      </div>
        @endif
      <!--/.Second slide-->


    </div>
    <!--/.Carousel Wrapper-->
  </div>

  </div>


{{-- Fifth Section "questions" --}}

<div class="questions container" id="questions">
  <div class="row">
    <div class="col-md-12 d-flex flex-column justify-content-center align-items-center mb-5">
      <h2 class="mydiv_content"> اختبر نفسك</h2>
      <hr class="myline_small">
      <hr class="myline_big">
      <hr class="myline_small">
    </div>

    {{-- style="width: 18rem;" --}}

    <div class="col-md-4 mb-3">
      <a href="/tests/1">
        <div class="card">

          <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/angry.jpg') }}" alt="Card image cap">
          <div class="card-body text-right">
            <h3 class="card-title">اختبار العصبية</h3>
            <h4 class="card-text">اكتشف هل انت شخص عصبي ؟</h4>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4 mb-3">
      <a href="/tests/2">
        <div class="card">
          <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/weight.jpg') }}" alt="Card image cap">
          <div class="card-body text-right">
            <h3 class="card-title">اختبار الوزن</h3>
            <h4 class="card-text">هل تحتاج لإنقاص وزنك ؟</h4>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4 mb-3">
      <a href="/tests/3">
        <div class="card">
          <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/alone.jpg') }}" alt="Card image cap">
          <div class="card-body text-right">
            <h3 class="card-title">اختبار الاكتئاب</h3>
            <h4 class="card-text">هل تعاني من الاكتئاب ؟</h4>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4 mb-3">
      <a href="/tests/4">
        <div class="card">
          <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/child.jpg') }}" alt="Card image cap">
          <div class="card-body text-right">
            <h3 class="card-title">اختبار الانتقائية</h3>
            <h4 class="card-text">هل طفلك انتقائي ؟</h4>
          </div>
        </div>
      </a>
    </div>


    <div class="col-md-4 mb-3">
      <a href="/tests/5">
        <div class="card">
          <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/stingy.jpg') }}" alt="Card image cap">
          <div class="card-body text-right">
            <h3 class="card-title">اختبار البخل</h3>
            <h4 class="card-text">هل انت شخص تميل الى البخل ؟</h4>
          </div>
        </div>
      </a>
    </div>


    <div class="col-md-4 mb-3">
      <a href="/tests/6">
        <div class="card">
          <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/cleaning.jpg') }}" alt="Card image cap">
          <div class="card-body text-right">
            <h3 class="card-title">اختبار هوس النظافة</h3>
            <h4 class="card-text">هل تعانين من هوس النظافة ؟</h4>
          </div>
        </div>
      </a>
    </div>

    <div class="questions_box col-md-12 d-flex flex-column justify-content-center align-items-center mb-5">
      <h2 class="mydiv_content">من نحن ؟</h2>
      <hr class="myline_small">
      <hr class="myline_big">
      <hr class="myline_small">
    </div>

  </div>
</div>




{{-- sixth Section "About_us" --}}

<div id="about_us"></div>
<div class="about_us">
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height:80vh">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4" class=""></li>
      </ol>
      <div class="carousel-inner ">
        <div class="carousel-item text-center">
          <img src="{{ asset('/imgs/hassan.jpg') }}" class=" rounded-circle " alt="...">
          <div class="carousel-caption ">
            <p> علوم كيمياء , شغوف بالبرمجة والتحليل , خريج الدفعة الأولى من برنامج ال iti للبرمجيات مفتوحة المصدر </p>
            <h2>احمد حسن</h2>
          </div>
        </div>
        <div class="carousel-item text-center">
          <img src="{{ asset('/imgs/mostafa.jpg') }}" class=" rounded-circle" alt="...">
          <div class="carousel-caption ">
            <p> مهندس كمبيوتر , شغوف بالبرمجة والتحليل , خريج الدفعة الأولى من برنامج ال iti للبرمجيات مفتوحة المصدر </p>
            <h2>محمد مصطفى</h2>
          </div>
        </div>
        <div class="carousel-item text-center ">
          <img src="{{ asset('/imgs/yehia.jpg') }}" class=" rounded-circle" alt="...">
          <div class="carousel-caption ">
            <p> مهندس اتصالات وإلكترونيات , شغوف بالبرمجة والتحليل , خريج الدفعة الأولى من برنامج ال iti للبرمجيات مفتوحة المصدر </p>
            <h2>يحيي بسام</h2>
          </div>
        </div>
        <div class="carousel-item text-center active">
          <img src="{{ asset('/imgs/zidan.jpg') }}" class=" rounded-circle" alt="...">
          <div class="carousel-caption ">
            <p> علوم جيوكيمياء الأزهر, شغوف بالبرمجة والتحليل , خريج الدفعة الأولى من برنامج ال iti للبرمجيات مفتوحة المصدر </p>
            <h2>محمود زيدان</h2>
          </div>
        </div>
        <div class="carousel-item text-center ">
          <img src="{{ asset('/imgs/gamal.jpeg') }}" class=" rounded-circle" alt="...">
          <div class="carousel-caption ">
            <p> علوم قسم حاسب , شغوف بالبرمجة والتحليل , خريج الدفعة الأولى من برنامج ال iti للبرمجيات مفتوحة المصدر </p>
            <h2>محمد جمال</h2>
          </div>
        </div>
      </div>


      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

{{-- Seventh Section "Contact_us" --}}
<div id="contact_us"></div>
<div class="Contact_Us">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 mr-5">
        <h1 class="text-right">تواصل معنا</h1>

        @if(Session()->has('message'))
        <div class="row">
          <div class="alert alert-success w-100">
            {{ Session()->get('message') }}
          </div>
        </div>
        @endif

      </div>

      <div class="col-md-6 mt-5">
        <p class="text-center text-muted">يسعدنا تواصلكم معنا .. يمكنكم إرسال رسالة لنا وسوف يتم الرد عليكم في اقرب وقت .. شكرا لكم</p>

        <p class="text-center mb-4"><i class="fas fa-envelope text-muted mx-3"></i><a class="text-Primary" href="#">Shefaacompany@gmail.com</a></p>
        <p class="text-center"><i class="fas fa-phone-alt text-muted mx-3"></i> 001-000-000-000</p>
        <div class="brands d-flex justify-content-center my-4 text-muted">
          <a href="#"><i class="fab fa-facebook-f fa-lg mx-2 d-flex justify-content-center align-items-center"></i></a>
          <a href="#"><i class="fab fa-twitter fa-lg mx-2 d-flex justify-content-center align-items-center"></i></a>
          <a href="#"><i class="fab fa-google-plus-g fa-lg mx-2 d-flex justify-content-center align-items-center"></i></a>
          <a href="#"><i class="fab fa-github fa-lg mx-2 d-flex justify-content-center align-items-center"></i></a>
          <a href="#"><i class="fab fa-behance fa-lg mx-2 d-flex justify-content-center align-items-center"></i></a>
          <a href="#"><i class="fab fa-linkedin-in fa-lg mx-2 d-flex justify-content-center align-items-center"></i></a>
        </div>
      </div>
      <div class="col-md-6">

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form method="POST" action="/contact">
          @csrf
          <input type="text" placeholder="الاسم" name="name" class="form-control my-3 ">
          <input type="email" placeholder="الايميل" name="email" class="form-control my-3">
          <textarea type="text" placeholder="رسالتك" name="message" class="form-control my-3" rows="6" id="mytext4"></textarea>
          <button class="btn btn-info p-3" id="Contact_send_message"> إرسال <span><i class="fas fa-arrow-left text-white"></i> </span></button>
        </form>

      </div>
    </div>
  </div>
</div>


{{-- Footer Section --}}

<footer id="footer_home"  >
  <div class="d-flex align-items-end">
  <a href="#home_slider"><i class="fas fa-chevron-circle-up mr-4" style="font-size: 50px;color: #17a2b8"></i></a>

  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="d-flex">
        <h1 class="text-primary">عن شفاء</h1>
        <i class="fas fa-hand-holding-heart text-primary mr-2 mt-2 " style="font-size: 30px;"></i>
      </div>
    <h5 style="line-height: 160%" class="text-muted">عمل شفاء لتوفير المعلومات الطبية والصحية الموثوقة والشاملة للقارئ العربي أينما كان، وتؤمن بحق الجميع في المعرفة والوصول إلى المعلومات الطبية بيسر وسهولة . .</h5>
      </div>
    <div class="col-md-4 text-muted">
      <h1 class="text-primary">تواصل معنا</h1>
      <h3 class="mb-2"><i class="fas fa-map-marker-alt ml-3 text-muted" style="font-size: 22px"></i>العنوان</h3>
      <h6 class="mb-2">1 محمود سلامة، كوم الدكة غرب، العطارين، الإسكندرية</h6>
      <h3 class="mb-2"> <i class="fas fa-phone ml-3 text-muted" style="font-size: 22px"></i>رقم الهاتف</h3>
      <h6 class="mb-2"> 001-000-000-000</h6>
      <h3 class="mb-2"><i class="fas fa-envelope ml-3 text-muted" style="font-size: 22px"></i>الإيميل </h3>
      <a href="#"><h6>Shefaacompany@gmail.com</h6></a>
    </div>
    <div class="col-md-4 flex-column">
      <h1 class="text-primary pb-2">الوصول السريع</h1>
      <a href="/map" style="text-decoration: none"><h4 class="text-muted mb-3 ">خريطة المويع</h4></a>
      <a href="/doctors" style="text-decoration: none"><h4 class="text-muted mb-3 ">البحث عن طبيب</h4></a>
      <a href="/#contact_us" style="text-decoration: none"><h4 class="text-muted mb-3 ">ارسال رسالة لشفاء</h4></a>
      <a href="#top_rated_doctors" style="text-decoration: none"><h4 class="text-muted mb-3 ">أشهر الأطباء في الموقع</h4></a>
    </div>
  </div>
</div>
      </div>
    
</footer>
<div class="d-flex justify-content-center align-items-center bg-primary py-2 text-white">
  <h6>Copyright by Shefaa 2020 ©</h6>
</div>


<script>

  let box = document.getElementById('box');

  let eye = document.getElementById("eye");
  let nose = document.getElementById("nose");
  let head = document.getElementById("head");
  let chest = document.getElementById("chest");
  let arms = document.getElementById("arms");
  let bely = document.getElementById("bely");
  let legs = document.getElementById("legs");

  let ulEye = document.getElementById("hisEye");
  let ulNose = document.getElementById("hisNose");
  let ulHead = document.getElementById("hisHead");
  let ulChest = document.getElementById("hisChest");
  let ulArms = document.getElementById("hisArms");
  let ulBely = document.getElementById("hisBely");
  let ulLegs = document.getElementById("hisLegs");

  /************************Image*********************************/
  eye.addEventListener("mouseover", function() {
    ulEye.style.display = 'block';
    ulNose.style.display = 'none';
    ulHead.style.display = 'none';
    ulChest.style.display = 'none';
    ulArms.style.display = 'none';
    ulBely.style.display = 'none';
    ulLegs.style.display = 'none';
    ulEye.style.left = '220px';
    ulEye.style.transitionDuration = '1s';
    ulEye.style.opacity = '1';
  });

  nose.addEventListener("mouseover", function() {
    ulEye.style.display = 'none';
    ulNose.style.display = 'block';
    ulHead.style.display = 'none';
    ulChest.style.display = 'none';
    ulArms.style.display = 'none';
    ulBely.style.display = 'none';
    ulLegs.style.display = 'none';
    ulNose.style.left = '100px';
    ulNose.style.transitionDuration = '1s';
    ulNose.style.opacity = '1';
  });

  head.addEventListener("mouseover", function() {
    ulEye.style.display = 'none';
    ulNose.style.display = 'none';
    ulHead.style.display = 'block';
    ulChest.style.display = 'none';
    ulArms.style.display = 'none';
    ulBely.style.display = 'none';
    ulLegs.style.display = 'none';
    ulHead.style.left = '220px';
    ulHead.style.transitionDuration = '1s';
    ulHead.style.opacity = '1';
  });

  chest.addEventListener("mouseover", function() {
    ulEye.style.display = 'none';
    ulNose.style.display = 'none';
    ulHead.style.display = 'none';
    ulChest.style.display = 'block';
    ulArms.style.display = 'none';
    ulBely.style.display = 'none';
    ulLegs.style.display = 'none';
    ulChest.style.left = '220px';
    ulChest.style.transitionDuration = '1s';
    ulChest.style.opacity = '1';
  });

  arms.addEventListener("mouseover", function() {
    ulEye.style.display = 'none';
    ulNose.style.display = 'none';
    ulHead.style.display = 'none';
    ulChest.style.display = 'none';
    ulArms.style.display = 'block';
    ulBely.style.display = 'none';
    ulLegs.style.display = 'none';
    ulArms.style.left = '220px';
    ulArms.style.transitionDuration = '1s';
    ulArms.style.opacity = '1';
  });

  bely.addEventListener("mouseover", function() {
    ulEye.style.display = 'none';
    ulNose.style.display = 'none';
    ulHead.style.display = 'none';
    ulChest.style.display = 'none';
    ulArms.style.display = 'none';
    ulBely.style.display = 'block';
    ulLegs.style.display = 'none';
    ulBely.style.left = '220px';
    ulBely.style.transitionDuration = '1s';
    ulBely.style.opacity = '1';
  });

  legs.addEventListener("mouseover", function() {
    ulEye.style.display = 'none';
    ulNose.style.display = 'none';
    ulHead.style.display = 'none';
    ulChest.style.display = 'none';
    ulArms.style.display = 'none';
    ulBely.style.display = 'none';
    ulLegs.style.display = 'block';
    ulLegs.style.left = '220px';
    ulLegs.style.transitionDuration = '1s';
    ulLegs.style.opacity = '1';
  });

  // body_hover_init
  let body_hover_init = document.getElementById('body_hover_init');
  let human_body = document.getElementById('figura');
  $(human_body).mouseover(function() {
    $(body_hover_init).remove();
  });


  // colors_option

  $("#colors_div i").click(function() {
    $("#colors_option").toggle();
  });

  let li_collection = $('#colors_option ul li');
  li_collection.eq(0).css('backgroundColor', '#6a8caf');
  li_collection.eq(1).css('backgroundColor', '#14a59e');
  li_collection.eq(2).css('backgroundColor', '#8c8eb1');
  li_collection.eq(3).css('backgroundColor', '#45aaff');

  li_collection.on("click", function() {
    let li_color = $(this).css('backgroundColor');
    localStorage.setItem('myseem',JSON.stringify(li_color))
    $(".navbar,#h_1,#h_2,#h_3,#h_4").css('backgroundColor', li_color);
    $(".carousel-caption h1,.mydiv_content").css('color', li_color);
  });

    $(".navbar,#h_1,#h_2,#h_3,#h_4").css('backgroundColor', color_seem);
    $(".carousel-caption h1,.mydiv_content").css('color', color_seem);

  // loading page

  $(document).ready(function() {
    $("#loading").fadeOut(1500, function() {
      $("body").css("overflow", "auto");
    });
  })
  
</script>


@endsection
