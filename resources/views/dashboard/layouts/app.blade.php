<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShefaDash</title>
    <link href="Adminy-master/css/bootstrap.min.css" rel="stylesheet">
    <link href="Adminy-master/css/icon.css" rel="stylesheet">
    <link href="Adminy-master/css/style.css" rel="stylesheet">
    <link href="Adminy-master/css/ar.css" rel="stylesheet" class="lang_css arabic">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
            <div class="inline-block messages bring_right">
                <span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="left"
                      title="الرسائل"><span class="notifications">9</span></span>
            </div>
            <div class="inline-block full_screen bring_right hidden-xs">
                <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                      title="شاشة كاملة"></span>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">
            <a href="index-en.html" class="change_lang bring_left">EN</a>

            <div class="user_info inline-block">
                <img src="img/user.jpg" alt="" class="img-circle">
                <span class="h4 nomargin user_name">Hosam Zewain</span>
                <span class="glyphicon glyphicon-cog"></span>
            </div>
        </div>
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">

        <!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left">
            <div class="user_area">
                <img class="img-thumbnail img-rounded bring_right" src="img/user.jpg">

                <h1 class="h3">حسام جمال زوين</h1>

                <p><a href="">بيانات المستخدم</a></p>

                <p><a href="">تغيير كلمة المرور</a></p>

                <p><a href="">المساعدة</a></p>
            </div>
            <div class="who_is_online">
                <h3>العامليين حاليا علي النظام</h3>

                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
            </div>
        </div>
        <!--/End left sidebar-->

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper">
                <!--                search-->
                <form class="form-inline search_box text-center">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="كلمة البحث">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </form>

                <ul>
                    <li>
                        <span class="glyphicon glyphicon-home"></span>
                        <a href="/home">الصفحة الرئيسية</a>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-user"></span>
                        <a href="options.html">إدارة المساعدين</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_photo.html">إضافة جديد</a></li>
                            <li><a href="/users">عرض الكل</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-edit"></span>
                        <a href="">إدارة المقالات</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_user.html">إضافة جديد</a></li>
                            <li><a href="/articles">عرض الكل</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-time"></span>
                        <a href="">إدارة المواعيد</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_topic.html">إضافة جديد</a></li>
                            <li><a href="view_all_topics.html">عرض الكل</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-picture"></span>
                        <a href="">إدارة الحجوزات</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_photo.html">إضافة جديد</a></li>
                            <li><a href="view_all_photos.html">عرض الكل</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/End side bar main menu-->

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
                       @yield('content')
                </div>
            </div>
            <!--/End Main content container-->


        </div>
        <!--/End body container section-->
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="Adminy-master/js/jquery-2.1.4.min.js"></script>
<script src="Adminy-master/js/bootstrap.min.js"></script>
<script src="Adminy-master/js/js.js"></script>
</body>

</html>
