@extends('layouts.app')
@section('content')


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


<div class="d-flex justify-content-center align-items-center">
{{-- <div class="my_skew"> --}}
    <div class="my_skew container">
      <div class="row">
        <section id="h_4"><a href="#questions"><i class="far fa-question-circle"></i><h3>إختبر نفسك</h3></a></section>
        <section id="h_3"><a href="#most_diseases"><i class="fas fa-capsules"></i><h3>الوقاية من امراض العصر</h3></a></section>
        <section id="h_2"><a href="#body_hover"><i class="fas fa-child"></i><h3>شخص نفسك</h3></a></section>
        <section id="h_1"><a href="#top_rated_doctors"><i class="fas fa-user-nurse"></i><h3>اشهر الاطباء</h3></a></section>
        <div style="clear:both"></div>
      </div>
    </div>
{{-- </div> --}}
</div>



{{-- Second Section "top_rated_doctors" --}}

<div class="top_rated_doctors container" >
<div class="row">
  <div class="col-md-3" >
    <div class="item-doctor ">
      <img class="img-fluid w-100" src="{{ asset('/imgs/doctor_4.PNG') }}" >
        <div class="doctor-layer1 d-flex justify-content-center align-items-center flex-column" >
        <h4>احمد النجم</h4>
        <p>دكتور باطنة</p>    
        </div>
      
        <div class="doctor-layer2" id="top_rated_doctors">
        <h4> عن د. احمد النجم</h4>
        <p>إستشاري الباطنة والسكر والروماتيزم كلية الطب جامعة الإسكندرية</p> <a href="*" >اعرف المزيد</a>
        </div>                
      </div>
    </div>
  
    <div class="col-md-3">
    <div class="item-doctor ">
      <img class="img-fluid w-100" src="{{ asset('/imgs/doctor_3.PNG') }}">
      <div class="doctor-layer1 d-flex justify-content-center align-items-center flex-column">
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
      <div class="doctor-layer1 d-flex justify-content-center align-items-center flex-column">
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
          <div class="doctor-layer1 d-flex justify-content-center align-items-center flex-column">
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


{{-- Third Section "body_hover" --}}
<div class="body_hover" id="body_hover">
<!-- SVG -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
      <clipPath id="A1">
          <polygon points="128 37,190 37,190 45,128 45"></polygon> <!--العين-->
      </clipPath>
      <clipPath id="A2">
          <polygon points="131 45,156 45,156 55,165 55,165 45,188 45,188 60,183 60,165 80,165 89,156 89,156 80,136 60,131 60"></polygon> <!--أنف,أذن,حنجرة-->
      </clipPath>
      <clipPath id="A3">
          <polygon points="123 4,123 90,190 90,190 4"></polygon> <!--الرأس,العنق-->
      </clipPath>
      <clipPath id="A4">
          <polygon points="104 93,107 151,133 151,158 140,179 151,210 151,213 93,179 86,159 90,141 86"></polygon> <!--الصدر-->
      </clipPath>
      <clipPath id="A5">
          <polygon points="100 94,100 152,50 295,25 310,18 282,88 94,100 94,212 94,216 152,258 295,281 310,292 295,232 94,212 94"></polygon> <!--الأذرع-->
      </clipPath>
      <clipPath id="A6">
          <polygon points="100 152,112 187,112 187,112 236,158 297,205 236,205 187,216 152,182 152,158 142,135 152"></polygon> <!--البطن,الحوض-->
      </clipPath>
      <clipPath id="A7">
          <polygon points="101 297,78 512,110 512,158 297,208 512,238 512,216 297"></polygon> <!--الأرجل-->
      </clipPath>
  </defs>
</svg>
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="container">
<div class="d-flex flex-row-reverse">
  
  
  <div class="col-md-6 col-sm-6">
      <div class="box" id="box">

          <div id="hisEye" class="list-group">
              <a href="#" class="list-group-item">جفاف العين و الفم</a>
              <a href="#" class="list-group-item">أفرازات العين</a>
              <a href="#" class="list-group-item">ألم العين</a>
          </div>

          <div id="hisNose" class="list-group">
              <a href="#" class="list-group-item">السعال و البرد</a>
              <a href="#" class="list-group-item">جفاف الفم و العطش الزائد</a>
              <a href="#" class="list-group-item">ألم الأذن عند الكبار</a>
              <a href="#" class="list-group-item">السعال المزمن</a>
              <a href="#" class="list-group-item">ألتهاب الحلق</a>
              <a href="#" class="list-group-item">فقدان السمع المفاجئ</a>
              <a href="#" class="list-group-item">صعوبة البلع</a>
              <a href="#" class="list-group-item">طنين الأذن</a>
          </div>

          <div id="hisHead" class="list-group">
              <a href="../myDevices/Pain.html" class="list-group-item">تساقط الشعر عند الرجال</a>
              <a href="#" class="list-group-item">الصداع</a>
              <a href="#" class="list-group-item">الدوار عند الوقوف</a>
              <a href="#" class="list-group-item">ألم الرقبة</a>
              <a href="#" class="list-group-item">فقدان الشم و التذوق</a>
              <a href="#" class="list-group-item">تورم الغدد في الرقبة</a>
              <a href="#" class="list-group-item">ألم الفك , اللثة أو الأسنان</a>
              <a href="#" class="list-group-item">الأرق</a>
          </div>

          <div id="hisChest" class="list-group">
              <a href="#" class="list-group-item">ألم الصدر</a>
              <a href="#" class="list-group-item">خفقان القلب</a>
              <a href="#" class="list-group-item">أسفل الظهر</a>
              <a href="#" class="list-group-item">ضيق التنفس عند الكبار</a>
              <a href="#" class="list-group-item">الصفير مع التنفس عند الكبار</a>
          </div>

          <div id="hisArms" class="list-group">
              <a href="#" class="list-group-item">ألم المرفق</a>
              <a href="#" class="list-group-item">ألم اليد</a>
              <a href="#" class="list-group-item">العامل الروماتويدي الأيجابي</a>
              <a href="#" class="list-group-item">ألم الكتف</a>
              <a href="#" class="list-group-item">ألم الرسخ</a>
          </div>

          <div id="hisBely" class="list-group">
              <a href="#" class="list-group-item">علاج أرتداد حمض المعدة</a>
              <a href="#" class="list-group-item">غازات الأمعاء</a>
              <a href="#" class="list-group-item">الدم في البول عند الرجال</a>
              <a href="#" class="list-group-item">فحص سرطان القولون</a>
              <a href="#" class="list-group-item">الأمساك عند الكبار</a>
              <a href="#" class="list-group-item">الأسهال</a>
              <a href="#" class="list-group-item">صعوبة التبول</a>
              <a href="#" class="list-group-item">ضعف العضلات</a>
              <a href="#" class="list-group-item">ألم مفصل الحوض</a>
              <a href="#" class="list-group-item">فقد السيطرة علي التبول عند الرجال</a>
              <a href="#" class="list-group-item">ورم أو ألم ف كيس الخصيتين</a>
              <a href="#" class="list-group-item">كثرة التبول أو التبول المؤلم عند الرجال</a>
              <a href="#" class="list-group-item">ألم القضيب قروحه,أفرازاته أو أورامه</a>
              <a href="#" class="list-group-item">نزيف المستقيم</a>
              <a href="#" class="list-group-item">ألم المستقيم و الحكة</a>
              <a href="#" class="list-group-item">ألم المتكرر في البطن</a>
              <a href="#" class="list-group-item">ألم البطن الشديد حديث الظهور</a>
              <a href="#" class="list-group-item">مستضد البروستاتا</a>
          </div>

          <div id="hisLegs" class="list-group">
              <a href="#" class="list-group-item">ألم القدم</a>
              <a href="#" class="list-group-item">النقرس</a>
              <a href="#" class="list-group-item">ألم الركبة</a>
              <a href="#" class="list-group-item">تورم القدم الحاد</a>
              <a href="#" class="list-group-item">الألتهاب العظمي المفصلي للركبة</a>
              <a href="#" class="list-group-item">تورم الركبة المزمن</a>
              <a href="#" class="list-group-item">ألم الكاحل</a>
          </div>
      </div>
  </div>
  <div class="col-md-6 col-sm-6">
      <div id="figura">
          <img style="opacity: .4;" src="{{ asset('/imgs/snipMan.PNG') }}" alt="body">
          <map name="recortes">
              <area id="eye" shape="poly" coords="128,37,190,37,190,45,128,45" href="" alt="eye" title="العين">
              <area id="nose" shape="poly" coords="131,45,156,45,156,55,165,55,165,45,188,45,188,60,183,60,165,80,165,89,156,89,156,80,136,60,131,60" href="" alt="nose" title="أنف,أذن,حنجرة">
              <area id="head" shape="poly" coords="123,4,123,90,190,90,190,4" href="" alt="head" title="الرأس,العنق">
              <area id="chest" shape="poly" coords="104,93,107,151,133,151,158,140,179,151,210,151,213,93,179,86,159,90,141,86" href="" title="الصدر">
              <area id="arms" shape="poly" coords="100,94,100,152,50,295,25,310,18,282,88,94,100,94,212,94,216,152,258,295,281,310,292,295,232,94,212,94" href="" title="الأذرع">
              <area id="bely" shape="poly" coords="100,152,112,187,112,187,112,236,158,297,205,236,205,187,216,152,182,152,158,142,135,152" href="" title="البطن,الحوض">
              <area id="legs" shape="poly" coords="101,297,78,512,110,512,158,297,208,512,238,512,216,297" href="" alt="legs" title="الأرجل">
              <img id="capaRecorte" src="{{ asset('/imgs/snipMan.PNG') }}" alt="body">
          </map>
          <img src="https://lh3.googleusercontent.com/-HqFCpcmlv1U/VjZqE6e7u0I/AAAAAAAAGao/hIQohrsu0xI/s800-Ic42/transparente.gif" id="imagen" usemap="#recortes">
      </div>
  </div>
</div>
</div>
</div>


{{-- Fourth Section "most_diseases" --}}
<div class="most_diseases container my-4" id="most_diseases">

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

      <!--First slide-->
      <div class="carousel-item active">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="{{ asset('/imgs/disease_1.jpg') }}"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">الشيخوخة</h4>
                <p class="card-text">كلما تقدمنا أكثر في العمر فان بشرتنا أيضا تصاب بالشيخوخة، فكيف يمكن تخفيف تأثيرات التقدم في العمر على البشرة؟</p>
                  <a class="btn btn-primary">اعرف المزيد</a>
                </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="{{ asset('/imgs/disease_2.jpg') }}"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">كورونا</h4>
                <p class="card-text">لا زال موضوع انتشار هذا الفيروس غير معروف حتى الان، لكن منظمة الصحة العالمية تشجع الدول الأعضاء على مواصلة مراقبة التهابات الجهاز التنفسي الحاد عن كثب</p>
                  <a class="btn btn-primary">اعرف المزيد</a>
                </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="{{ asset('/imgs/disease_3.jpg') }}"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">الاكتئاب</h4>
                <p class="card-text">هو مرض يصيب النفس والجسم. يؤثر الاكتئاب على طريقة التفكير والتصرف ومن شأنه أن يؤدي إلى العديد من المشاكل العاطفية والجسمانية.</p>
                  <a class="btn btn-primary">اعرف المزيد</a>
                </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-2">
              <img class="card-img-top" src="{{ asset('/imgs/disease_4.jpg') }}"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">الام الظهر</h4>
                <p class="card-text">الشكوى من الم الظهر  مسألة شائعة جدًا، إذ يعتبر السبب الأكثر انتشارا للتوجه للعلاج الطبي   .
                  الأنباء المشجعة هي أنه بالامكان تجنب غالبية أنواع الام الظهر .</p>
                  <a class="btn btn-primary">اعرف المزيد</a>
                </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="{{ asset('/imgs/disease_5.jpg') }}"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">ضعف النظر</h4>
                <p class="card-text">يمكن أن يكون ضعف النظر، وراثيا، نتيجة لمرض او إصابة ويتطلب التعامل معه تكيفا خاصا. كل ما اردتم معرفته عن ضعف الرؤية في المقالة التالية.</p>
                  <a class="btn btn-primary">اعرف المزيد</a>
                </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block">
            <div class="card mb-2">
              <img class="card-img-top" src="{{ asset('/imgs/disease_6.jpg') }}"
                alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">الام العظام</h4>
                <p class="card-text">صحيح أن جسم الإنسان يعتبر آلة معقدة وعجيبة، لكنه يميل أيضا إلى التعطل، دون أن تتوفر له قطع غيار. اليكم استعراضا لآلام العظام وتأهيل الهيكل العظمي بالطرق المدمجة.</p>
                <a class="btn btn-primary">اعرف المزيد</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.Second slide-->

      
    </div>
    <!--/.Slides-->
  </div>
  <!--/.Carousel Wrapper-->
</div>


{{-- Fifth Section "questions" --}}
<div class="questions container" id="questions">
  <div class="row">
    
    {{-- style="width: 18rem;" --}}
   
    <div class="col-md-4 mb-3">
      <a href="/tests/1">
      <div class="card" >
      
        <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/angry.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">اختبار العصبية</h3>
          <h4 class="card-text">اكتشف هل انت شخص عصبي ؟</h4>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4 mb-3">
      <a href="/tests/2">
      <div class="card" >
        <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/weight.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">اختبار الوزن</h3>
          <h4 class="card-text">هل تحتاج لإنقاص وزنك ؟</h4>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4 mb-3">
      <a href="/tests/3">
      <div class="card" >
        <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/alone.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">اختبار الاكتئاب</h3>
          <h4 class="card-text">هل تعاني من الاكتئاب ؟</h4>
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-4 mb-3">
      <a href="/tests/4">
      <div class="card" >
        <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/child.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">اختبار الانتقائية</h3>
          <h4 class="card-text">هل طفلك انتقائي ؟</h4>
        </div>
      </div>
      </a>
    </div>


    <div class="col-md-4 mb-3">
      <a href="/tests/5">
      <div class="card" >
        <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/stingy.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">اختبار البخل</h3>
          <h4 class="card-text">هل انت شخص تميل الى البخل ؟</h4>
        </div>
      </div>
      </a>
    </div>


    <div class="col-md-4 mb-3">
      <a href="/tests/6">
      <div class="card" >
        <img class="card-img-top" style="height: 40vh" src="{{ asset('/imgs/cleaning.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">اختبار هوس النظافة</h3>
          <h4 class="card-text">هل تعانين من هوس النظافة ؟</h4>
        </div>
      </div>
      </a>
    </div>

  </div>
</div>




{{-- sixth Section "About_us" --}}

<div class="about_us" id="about_us">
  <div class="bd-example">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
<li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
<li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
<li data-target="#carouselExampleCaptions" data-slide-to="4" class=""></li>
</ol>
<div class="carousel-inner ">
<div class="carousel-item text-center">
  <img src="{{ asset('/imgs/doctor_3.PNG') }}" class=" rounded-circle " alt="...">
  <div class="carousel-caption ">
     <p>Sed consectetur, elit eu sodales pellentesque, nulla magna pretium eros, ac porttitor ex lorem nec arcu. Suspendisse ipsum tellus, eleifend ac placerat ac, pulvinar vitae turpis. Curabitur ullamcorper rutrum orci nec porttitor.</p>
      <h4>Joanna Doe - <span>ABC Corp</span></h4>
  </div>
</div>
<div class="carousel-item text-center">
  <img src="{{ asset('/imgs/doctor_2.PNG') }}" class=" rounded-circle" alt="...">
  <div class="carousel-caption ">
    <p>Nullam commodo nisl lacinia, mattis nibh at, mollis justo. Integer massa sem, interdum sagittis velit ut, pretium porta libero.  Vivamus commodo augue lorem, ut laoreet risus pharetra in, vulputate est non, porttitor erat.</p>
      <h4>Adam Hope -<span>Co Campany</span></h4>
  </div>
</div>
<div class="carousel-item text-center active">
  <img src="{{ asset('/imgs/doctor_1.PNG') }}" class=" rounded-circle" alt="...">
  <div class="carousel-caption ">
     <p> Duis leo felis, porttitor ac interdum sit amet, volutpat sit amet nisi. Sed sit amet risus et ex accumsan placerat at tristique dui. Suspendisse eget lacinia elit. Donec accumsan eget lacus vel accumsan placerat at elementum.</p>
      <h4>Alexandra Love - <span>Fashion Magazine</span></h4>
  </div>
</div>
<div class="carousel-item text-center ">
  <img src="{{ asset('/imgs/doctor_2.PNG') }}" class=" rounded-circle" alt="...">
  <div class="carousel-caption ">
     <p> Duis leo felis, porttitor ac interdum sit amet, volutpat sit amet nisi. Sed sit amet risus et ex accumsan placerat at tristique dui. Suspendisse eget lacinia elit. Donec accumsan eget lacus vel accumsan placerat at elementum.</p>
      <h4>Alexandra Love - <span>Fashion Magazine</span></h4>
  </div>
</div>
<div class="carousel-item text-center ">
  <img src="{{ asset('/imgs/doctor_3.PNG') }}" class=" rounded-circle" alt="...">
  <div class="carousel-caption ">
     <p> Duis leo felis, porttitor ac interdum sit amet, volutpat sit amet nisi. Sed sit amet risus et ex accumsan placerat at tristique dui. Suspendisse eget lacinia elit. Donec accumsan eget lacus vel accumsan placerat at elementum.</p>
      <h4>Alexandra Love - <span>Fashion Magazine</span></h4>
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

<div class="Contact_Us">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12 mr-5">
        <h1>تواصل معنا</h1>
      </div>
      
      <div class="col-md-6 mt-5">
        <p class="text-center text-muted">يسعدنا تواصلكم معنا .. يمكنكم إرسال رسالة لنا وسوف يتم الرد عليكم  في اقرب وقت .. شكرا لكم</p>
        
        <p class="text-center mb-4"><i class="fas fa-envelope text-muted mx-3"></i><a class="text-Primary" href="#">Hellow@gmail.com</a></p>
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
        <form>
          <input type="text" placeholder="الاسم" class="form-control my-3 " >
          <input type="email" placeholder="الايميل" class="form-control my-3" >
          <textarea type="text" placeholder="رسالتك" class="form-control my-3" rows="6" id="mytext4" ></textarea>
        </form>
        <button class="btn btn-info p-3" id="Contact_send_message"> إرسال <span><i class="fas fa-arrow-left"></i> </span></button>          
      </div>
    </div>
  </div>
</div>

<div>
<a href="#home_slider"><i class="fas fa-chevron-circle-up" style="font-size: 50px;margin:0 60px 80px 0;color: #17a2b8"></i></a>
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
  
  
  </script>
  
@endsection
