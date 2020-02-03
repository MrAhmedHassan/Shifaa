<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>





    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal|Rakkas|Cairo|Amiri|Changa|Reem+Kufi|Aref+Ruqaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Changa|Reem+Kufi&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('mymaincss.css') }}" rel="stylesheet">
    <link href="{{ asset('all.css') }}" rel="stylesheet">



    <!--added by me to the rate-->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">  --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" /> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script> --}}

    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.min.js"></script>

<link href="{{ asset('css/preview.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}

    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> --}}

    {{-- <link href="{{ asset('css/preview.css') }}" rel="stylesheet"> --}}

</head>

<body align=right dir=rtl>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm fixed-top" style="background-color: rgb(52, 105, 123) !important">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">

                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fas fa-hand-holding-heart ml-2" style="font-size: 30px;color:rgb(103, 172, 245);"></i>
                        <h1 style="font-family: 'Aref Ruqaa', serif;color:rgb(103, 172, 245);">شفاء</h1>
                    </div>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav my_main_navbar m-auto">

                        <!-- Navbar Links -->
                        <div class="nav-item-div">
                            <li class="nav-item mainA d-flex justify-content-center align-items-center">
                                <i class="fas fa-home text-white fa-2x"></i>
                                <a class="nav-link ml-4 " href="/home">| الرئيسية</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-book text-white fa-2x"></i>
                                <a class="nav-link" href="/articles"> المقالات الطبية</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-user-md text-white fa-2x"></i>
                                <a class="nav-link" href="/doctors">الأطباء</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-child text-white fa-2x"></i>
                                <a class="nav-link" href="/bodies">جسم الإنسان</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-4 d-flex justify-content-center align-items-center">
                                <i class="fas fa-users text-white fa-2x"></i>
                                <a class="nav-link" href="#">من نحن ؟</a>
                            </li>
                        </div>

                        <div class="nav-item-div">
                            <li class="nav-item ml-4 d-flex justify-content-center align-items-center">
                                <i class="fab fa-weixin text-white fa-2x"></i>
                                <a class="nav-link" href="#">تواصل معنا</a>
                            </li>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav w-25 mr-auto my_user">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('دخول') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown mr-5">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle mr-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('خروج') }}
                                </a>
                                <hr>
                                <div id="div_user_profile">
                                    <a href="/profiles" class="ml-3" id="user_profile">البروفايل</a>
                                </div>
                                <hr>
                                <div id="div_user_profile">
                                    <a href="/dashboard" class="ml-3" id="user_profile">لوحة التحكم</a>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <img class="rounded-circle" style="width: 15%" src="{{Auth::user()->avatar}}">
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" align=right dir=rtl>
            @yield('content')
        </main>
    </div>

    <footer class="bg-primary d-flex justify-content-center align-items-center navbar-fixed-bottom " style="height: 30px ;">Copyright by Ghosts 2020 ©</footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('project_js.js') }}"></script>

</body>

</html>
