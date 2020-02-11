
@extends('layouts.admin')
@section('dashboard_content')



        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home"></span></li>
                        <li class="bring_right"><a href="">الصفحة الرئيسية للوحة تحكم الموقع</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <div class="page_content">
                        <div class="quick_links text-center">
                            <h1 class="heading_title">الوصول السريع</h1>
<a href="/home">
<div class="home_statics text-center">

                            <div style="background-color: #9b59b6">
                                <span class="bring_right glyphicon glyphicon-home"></span>
                                <h3>الصفحة الرئيسية</h3>

                                <p class="h4">انقر للذهاب</p>
</a>                                
                            </div>
                    </div>

                        </div>
                        <div class="home_statics text-center">
                            <h1 class="heading_title">احصائيات عامة للموقع</h1>

                            <div style="background-color: #00adbc">
                                <span class="bring_right glyphicon glyphicon-user"></span>

                                <h3>عدد الاعضاء</h3>

                                <p class="h4">{{$users}}</p>
                            </div>
                            <div style="background-color: #f39c12">
                                <span class="bring_right glyphicon glyphicon-pencil"></span>

                                <h3>عدد المقالات</h3>

                                <p class="h4">{{$articles}}</p>
                            </div>
                            <div style="background-color: #2ecc71">
                                <span class="bring_right glyphicon glyphicon-calendar"></span>

                                <h3>عمر الموقع بالايام</h3>

                                <p class="h4">{{$result}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
            <!--/End Main content container-->


@endsection
