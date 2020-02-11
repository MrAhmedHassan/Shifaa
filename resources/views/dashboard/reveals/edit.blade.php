@extends('layouts.admin')
@section('dashboard_content')


<!--Start Main content container-->
<div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارة المواعيد</a></li>
                <li class="bring_right"><a href="">إضافة ميعاد</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">


<link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

            <div class="container">
                <!-- alert -->
                <div class="alert alert-info alert-dismissable" style="font-family: 'Cairo', sans-serif">
                    <i class="fa fa-address-card" aria-hidden="true"></i>

                    <strong>عزيزي المساعد</strong> .. يمكنك تغيير الميعاد ولكن انتبه للمرضى الذين قاموا بالحجز قبل ذلك ..
                </div>
                <!-- Material form contact -->
                <div class="card mt-5">

                    <h5 class="card-header info-color white-text text-center py-4" style="font-family: 'Cairo', sans-serif">
                        <strong>إضافة حجز جديد</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-right" method="post" action="/reveals/{{$reveal->id}}" enctype="multipart/form-data">
                            {{method_field('PUT')}}
                            @csrf
                            <!-- date -->
                            <div class="md-form mt-3 mb-3" style="font-family: 'Cairo', sans-serif">
                                <label>التاريخ</label>
                                <input type="date" name="date" id="" class="form-control" value="{{$reveal->date}}" required>
                            </div>
                            <br>
                            <!-- from -->
                            <div class="form-group">
                                <label for="exampleFormControlInput2" class='font-weight-bold'> الكشف ابتداءا من</label>
                                <input type="time" name="start" class="form-control" id="" value="{{$reveal->start}}" required>
                            </div>

                            <!-- to -->
                            <div class="form-group">
                                <label for="exampleFormControlInput2" class='font-weight-bold'>نهاية الكشف</label>
                                <input type="time" name="end" class="form-control" id="" value="{{$reveal->end}}" required>
                            </div>

                            <!-- limit -->
                            <div class="form-group">
                                <label for="exampleFormControlInput3" class='font-weight-bold'>عدد الكشوفات</label>
                                <input type="number" name="limit" min="10" max="30" class="form-control" id="exampleFormControlInput3" value="{{$reveal->limit}}" required>
                            </div>


                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <br>
                            <br>

                            <!-- Send button -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" style="font-family: 'Cairo', sans-serif">تعديل الموعد</button>

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