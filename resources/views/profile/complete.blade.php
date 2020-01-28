@extends('layouts.app')
@section('content')

<!-- waiting yehia to see these fonts -->
<link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

<div class="container bootstrap snippet mt-5">
  <h1 class="text-dark" style="font-family: 'Cairo', sans-serif;">
    <span class="glyphicon glyphicon-user"></span>تعديل الملف الشخصي</h1>
  <hr>
  <!-- <div class="row"> -->
    <!-- left column -->


    <!-- edit form column -->
    <div class=" personal-info">
      <form method='post' action='/profiles/{{$user->id}}' enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf

        <div class="row">
        <div class="col-md-3">
          <div class="text-center">
            <img src="{{$user->avatar}}" class="avatar img-circle" alt="avatar">
            <h6 style="font-family: 'Cairo', sans-serif">تغيير الصورة الشخصية</h6>
            <input type="file" class="form-control" name="avatar">
          </div>
        </div>


        <div class="col-md-9">

        <div class="alert alert-info alert-dismissable" style="font-family: 'Cairo', sans-serif">
          <i class="fa fa-address-card" aria-hidden="true"></i>
          <strong>عزيزي الطبيب</strong> .. رجاءا تأكد من صحة بياناتك ..
        </div>
        <h3 style="font-family: 'Cairo', sans-serif">المعلومات الشخصية</h3>



        <!-- here -->

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">الاسم :</label>
          <div class="col-lg-8">
            <input class="form-control" name="name" type="text" value="{{$user->name}}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">البريد الالكتروني :</label>
          <div class="col-lg-8">
            <input class="form-control" name="email" type="email" value="{{$user->email}}">
          </div>
        </div>

        <!-- <div class="form-group">
            <label class="col-lg-3 control-label">تغيير صورة الشهادة</label>
            <div class="col-lg-8">
            <input type="file" class="form-control">
            </div>
          </div> -->
        <hr>
        <div class="alert alert-info alert-dismissable" style="font-family: 'Cairo', sans-serif">
          <i class="fa fa-address-card" aria-hidden="true"></i>

          <strong>اكمل ملفك الشخصي</strong> .. اختياري ..
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">نبذة :</label>
          <div class="col-lg-8">
            <textarea name="abstract" id="" cols="70" rows="5">{{$user->profile->abstract}}</textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">عنوان العيادة :</label>
          <div class="col-lg-8">
            <input class="form-control" name="address" type="text" value="{{$user->profile->address}}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">سعر الكشف :</label>
          <div class="col-lg-8">
            <input class="form-control" name="price" type="text" value="{{$user->profile->price}}">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block container" style="font-family: 'Cairo', sans-serif"> حفظ التغييرات</button>

        </form>

         </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<!--  -->
<hr>



@endsection