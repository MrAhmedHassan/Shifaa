<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->

    <link href="https://fonts.googleapis.com/css?family=Tajawal|Rakkas|Cairo|Amiri|Changa|Reem+Kufi|Harmattan|Aref+Ruqaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Amiri|Changa|Reem+Kufi&display=swap" rel="stylesheet">
    <link href="{{ asset('mymaincss.css') }}" rel="stylesheet">
    <link href="{{ asset('all.css') }}" rel="stylesheet">

    <link href="{{ asset('css/rate.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body align=right dir=rtl>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">

                    <div class="d-flex justify-content-center align-items-center shefa_brand">
                        <i class="fas fa-hand-holding-heart ml-2" style="font-size: 30px;"></i>
                        <h1 style="font-family: 'Aref Ruqaa', serif;">شفاء</h1>
                    </div>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav my_main_navbar">

                        <!-- Navbar Links -->
                        <div class="nav-item-div">
                            <li class="nav-item mainA d-flex justify-content-center align-items-center">
                                <a class="nav-link ml-3 " href="/"><i class="ml-1 fas fa-home text-white" id="nav_1_i"></i>الرئيسية</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-3 d-flex justify-content-center align-items-center">
                                <a class="nav-link" href="/articles"><i class="ml-1 fas fa-book text-white" id="nav_2_i"></i> المقالات الطبية</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-3 d-flex justify-content-center align-items-center">
                                <a class="nav-link" href="/doctors"><i class="ml-1 fas fa-user-md text-white" id="nav_3_i"></i>الأطباء</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-3 d-flex justify-content-center align-items-center">
                                <a class="nav-link" href="/bodies"><i class="ml-1 fas fa-child text-white" id="nav_4_i"></i>جسم الإنسان</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-3 d-flex justify-content-center align-items-center">
                                <a class="nav-link" href="/#about_us"><i class="ml-1 fas fa-users text-white" id="nav_5_i"></i>من نحن ؟</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-3 d-flex justify-content-center align-items-center">
                                <a class="nav-link" href="/#contact_us"><i class="ml-1 fab fa-weixin text-white " id="nav_6_i"></i>تواصل معنا</a>
                            </li>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav w-25 my_user">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('دخول') }}</a> --}}
                            <a class="nav-link ml-3" href="{{ route('login') }}">
                                <h4 id="nav_register">دخول</h4>
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل') }}</a> --}}
                            <a class="nav-link " href="{{ route('register') }}">
                                <h4 id="nav_register">تسجيل</h4>
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown mr-5">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle mr-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(auth()->user())
                                @role('Doctor')
                                <div id="div_user_profile">
                                    <a href="/profiles" class="ml-3" id="user_profile">البروفايل</a>
                                </div>
                                <hr>
                                @endrole
                                @endif
                                @if(auth()->user())
                                @role('Admin|Doctor|Assistant')
                                <div id="div_user_profile">
                                    <a href="/dashboard" class="ml-3" id="user_profile">لوحة التحكم</a>
                                </div>
                                <hr>
                                @endrole
                                @endif
                                <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('خروج') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <img class="rounded-circle" style="width: 50px" id="user_img" src="{{Auth::user()->avatar}}">
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ asset('project_js.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            let color_seem = JSON.parse(localStorage.getItem('myseem'));
            $(".navbar").css('backgroundColor', color_seem);
        </script>

        <main class="py-4" align=right dir=rtl>
            @yield('content')
        </main>
    </div>

    <!--Scripts -->
    <script src="{{ asset('project_js.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>

</html>