@extends('layouts.app')
@section('content')

    <div class="aboutCanvas" style="margin-top: 80px">
        <h1 class="text-center" style="color:#0065e1;text-shadow: 1px 1px 1px #000000;">خريطة الموقع</h1>
    <div class="container-fluid d-flex justify-content-center">
        <canvas></canvas>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 text-center">
                <a href="/home" class="liCanvas"><h3>الصفحة الرئيسية</h3></a>
                <ul class="list-group">
                    <li class="list-group-item border border-dark">أشهر الأطباء</li>
                    <li class="list-group-item border border-dark">شخص نفسك</li>
                    <li class="list-group-item border border-dark">الوقاية من أمراض العصر</li>
                    <li class="list-group-item border border-dark">أختبر نفسك</li>
                    <li class="list-group-item border border-dark">دليل الأمراض الشائعة</li>
                    <li class="list-group-item border border-dark">أخبار الصحة</li>
                    <li class="list-group-item border border-dark">دليل الفحوصات الطبية</li>
                </ul>
            </div>
            <div class="col-sm-3 text-center">
                <a href="/articles" class="liCanvas"><h3>المقالات</h3></a>
                <ul class="list-group">
                    <li class="list-group-item border border-dark">عرض مقالات طبية</li>
                    <li class="list-group-item border border-dark">إنشاء مقالات طبية في تخصص معين</li>
                    <li class="list-group-item border border-dark">البحث عن مقالات طبية</li>
                    <li class="list-group-item border border-dark"> تعليقات المرضي علي المقالات الطبية</li>
                </ul>
            </div>
            <div class="col-sm-2 text-center">
                <a href="/home/#body_hover" class="liCanvas"><h3>الأمراض</h3></a>
                <ul class="list-group">
                    <li class="list-group-item border border-dark">عرض أمراض الجسم</li>
                    <li class="list-group-item border border-dark">مقالة عن كل مرض</li>
                    <li class="list-group-item border border-dark">ترشيح أطباء لكل مرض</li>
                    <li class="list-group-item border border-dark">أمراض العصر</li>
                </ul>
            </div>
            <div class="col-sm-3 text-center">
                <a href="/doctors" class="liCanvas"><h3>الأطباء</h3></a>
                <ul class="list-group">
                    <li class="list-group-item border border-dark">دليل الأطباء</li>
                    <li class="list-group-item border border-dark">البحث عن طبيب في تخصص معين</li>
                    <li class="list-group-item border border-dark">تقييم الأطباء في مختلف الأقسام</li>
                </ul>
            </div>
            <div class="col-sm-2 text-center">
                <a href="/bodies" class="liCanvas"><h3>أجهزة الإنسان</h3></a>
                <ul class="list-group">
                    <li class="list-group-item border border-dark">عرض أجهزة جسم الإنسان</li>
                    <li class="list-group-item border border-dark">نبذة مختصرة عن كل جهاز</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <script>
        var canvas = document.querySelector('canvas');
        canvas.width = 1300;
        canvas.height = 110;
        var c = canvas.getContext('2d');
            c.beginPath();
            c.moveTo(654.5, 0);
            c.lineTo(654.5, 50);
            c.arc(624.5, 50, 30, 0, 1.5, false);
            c.lineTo(310, 75);
            c.arc(90, 99, 30, 4, 3, true);
            c.strokeStyle = 'black';
            c.stroke();

            c.beginPath();
            c.arc(380, 100, 30, 4, 3, true);
            c.strokeStyle = 'black';
            c.stroke();

            c.beginPath();
            c.arc(684.5, 50, 30, 3, 1.5, true);
            c.lineTo(999, 75);
            c.arc(1200, 104, 30, 5, 0, false);
            c.strokeStyle = 'black';
            c.stroke();

            c.beginPath();
            c.arc(920, 105, 30, 5, 0, false);
            c.strokeStyle = 'black';
            c.stroke();

            c.beginPath();
            c.moveTo(654.5, 50);
            c.lineTo(654.5, 100);
            c.strokeStyle = 'black';
            c.stroke();
    </script>

@endsection

