@extends('layouts.admin')
@section('dashboard_content')


<!--Start Main content container-->
<div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارة أمراض العصر</a></li>
                <li class="bring_right"><a href="">إضافة مرض جديد</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">


<link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

<div class="container">
    <!-- alert -->
    <div class="alert alert-info alert-dismissable" style="font-family: 'Cairo', sans-serif">
        <i class="fa fa-address-card" aria-hidden="true"></i>

        <strong>عزيزي الأدمن</strong>  ..  برجاء تحري الدقة في ما تنشرة حتى لا تكون سببا في ترويع أحدهم ..
    </div>
    <!-- Material form contact -->
    <div class="card mt-5">

        <h5 class="card-header info-color white-text text-center py-4" style="font-family: 'Cairo', sans-serif">
            <strong>إضافة مرض جديد</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

                

<!-- Form -->
<form class="text-right" method="post" action="/trends/store" enctype="multipart/form-data">
    @csrf
    <!-- title -->
    <div class="md-form mt-3 mb-3" style="font-family: 'Cairo', sans-serif">
        <label>عنوان المرض</label>
        <input type="text" name="title" id="" class="form-control" value="" required>
    </div>

    <br>
    <!--article-->
    <div class="md-form mb-3">
        <label for="" style="font-family: 'Cairo', sans-serif">وصف المرض</label>
        <textarea name="description" id="" class="form-control md-textarea" rows="7" required></textarea>
    </div>

    <br>
    <!-- image -->
    <label style="font-family: 'Cairo', sans-serif">اختر صورة مناسبة</label>
    <div class="file-field md-form mb-2">
        <div class="btn btn-outline-primary btn-rounded waves-effect btn-sm float-right">
            <input type="file" name="avatar" value="">
        </div>
    </div>
    <br>
    <br>


    <!-- Send button -->
    <button class="btn btn-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" style="font-family: 'Cairo', sans-serif">حفظ المرض</button>

</form>
<!-- Form -->



    </div>
    <!-- Material form contact -->
</div>



</div>
</div>
</div>
<!--/End Main content container-->

@endsection