<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShefaDash</title>
    <link href="{{asset('Adminy-master/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Adminy-master/css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('Adminy-master/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('Adminy-master/css/ar.css')}}" rel="stylesheet" class="lang_css arabic">

{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->--}}
    <link href="{{asset('DataTables/datatables.css')}}" rel="stylesheet" class="lang_css arabic">


    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
    <div class="row header_section">
        <div class="col-sm-3 col-xs-12 logo_area bring_right">
            <h1 class="inline-block"><img src="img/logo.png" alt="">لوحة تحكم</h1>
            <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                  data-placement="right" title="Tooltip on left"></span>
        </div>
        <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
            <div class="inline-block full_screen bring_right hidden-xs">
                <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                      title="شاشة كاملة"></span>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">

            <div class="user_info inline-block">
                <img src="{{ auth()->user()->avatar }}" alt="" class="img-circle">
                <span class="h4 nomargin user_name">{{auth()->user()->name}}</span>
                <span class="glyphicon glyphicon-cog"></span>
            </div>
        </div>
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">


        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper">
                <form class="form-inline search_box text-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </form>

                <ul>
                    <li>
                        <span class="glyphicon glyphicon-home"></span>
                        <a href="/dashboard">لوحة التحكم</a>
                    </li>
                    @role('Admin')
                    <li>
                        <span class="glyphicon glyphicon-heart-empty"></span>
                        <a href="options.html">إدارة الأطباء</a>
                        <ul class="drop_main_menu">
                        <li><a href="/dashboardDoctors">عرض الكل</a></li>
                            <li><a href="/dashboardWaitingDoctors">الاطباء تحت المراجعة</a></li>

                        </ul>
                    </li>
                    @endrole

                    @role('Admin')
                    <li>
                        <span class="glyphicon glyphicon-envelope"></span>
                        <a href="options.html">ادارة الرسائل الواردة</a>
                        <ul class="drop_main_menu">
                        <li><a href="/contacts">عرض الرسائل الواردة</a></li>
                        </ul>
                    </li>
                    @endrole

                    @role('Admin|Doctor')
                    <li>
                        <span class="glyphicon glyphicon-user"></span>
                        <a href="options.html">إدارة المساعدين</a>
                        <ul class="drop_main_menu">
                            @role('Doctor')
                            <li><a href="/assistants/create">إضافة مساعد جديد</a></li>
                            @endrole
                            <li><a href="/assistants">عرض الكل</a></li>
                        </ul>
                    </li>


                    @endrole
                    @role('Admin')
                    <li>
                        <span class="glyphicon glyphicon-edit"></span>
                        <a href="">إدارة أمراض العصر</a>
                        <ul class="drop_main_menu">
                            <li><a href="/trends/create">إضافة مرض جديد</a></li>
                            <li><a href="/trends/all">عرض الكل</a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('Admin|Doctor|Assistant')
                    <li>
                        <span class="glyphicon glyphicon-time"></span>
                        <a href="">إدارة المواعيد</a>
                        <ul class="drop_main_menu">
                            @role('Doctor|Assistant')
                            <li><a href="/reveals/create">إضافة ميعاد جديد</a></li>
                            @endrole
                            <li><a href="/reveals">عرض الكل</a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('Admin|Doctor|Assistant')
                    <li>
                        <span class="glyphicon glyphicon-pencil"></span>
                        <a href="">إدارة الحجوزات</a>
                        <ul class="drop_main_menu">
                            <!-- <li><a href="add_new_photo.html">حجز جديد</a></li> -->
                            <li><a href="/reservations">عرض الكل</a></li>
                        </ul>
                    </li>
                    @endrole
                </ul>
            </div>
        </div>
        <!--/End side bar main menu-->



        @yield('dashboard_content')




    </div>
    <!--/End body container section-->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('Adminy-master/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('Adminy-master/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Adminy-master/js/js.js')}}"></script>
</body>

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

{{--<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>--}}
<script src="{{asset('DataTables/datatables.js')}}"></script>


<script>

    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>




</html>
