@extends('layouts.admin')
@section('dashboard_content')

<!--Start Main content container-->
<div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارة المساعدين</a></li>
                <li class="bring_right"><a href="">إضافة المساعدين</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">


            <link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

            <div class="container">
                <!-- Material form contact -->
                <div class="card mt-5">
                    <div class="alert alert-info alert-dismissable" style="font-family: 'Cairo', sans-serif">
                        <i class="fa fa-address-card" aria-hidden="true"></i>

                        <strong>عزيزي الطبيب</strong> .. برجاء تحري الدقة في اختيار من يساعدك ..
                    </div>

                    <h5 class="card-header info-color white-text text-center py-4" style="font-family: 'Cairo', sans-serif">
                        <strong>إضافة مساعد</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-right" method="post" action="/assistants/store" enctype="multipart/form-data">
                            @csrf
                            <!-- name -->
                            <div class="md-form mt-3 mb-3" style="font-family: 'Cairo', sans-serif">
                                <label>الإسم</label>
                                <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>
                            <!--email-->
                            <div class="md-form mt-3 mb-3" style="font-family: 'Cairo', sans-serif">
                                <label>البريد الإلكتروني</label>
                                <input type="email" name="email" id="" class="form-control @error('email') is-invalid @enderror" value="" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>
                            <!-- pass -->
                            <div class="md-form mb-3">
                                <label for="password" style="font-family: 'Cairo', sans-serif">كلمة السر</label>
                                <input id="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>
                            <!-- avatar -->
                            <label style="font-family: 'Cairo', sans-serif">الصورة الشخصية</label>
                            <div class="file-field md-form mb-2">
                                <div class="btn btn-outline-primary btn-rounded waves-effect btn-sm float-right">
                                    <input type="file" name="avatar" value="" class="form-control @error('avatar') is-invalid @enderror">
                                    @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <br>


                            <!-- Send button -->
                            <button class="btn btn-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" style="font-family: 'Cairo', sans-serif">حفظ المساعد</button>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form contact -->
            </div>


        </div>
    </div>
</div>
<!--/End Main content container-->

@endsection
