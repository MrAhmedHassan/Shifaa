@extends('layouts.app')
@section('content')

<!-- waiting yehia to see these fonts -->
<link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

<div class="container bootstrap snippet mt-5">
  <h1 class="text-dark" style="font-family: 'Cairo', sans-serif;">
    <span class="glyphicon glyphicon-user"></span>اكمل ملفك الشخصي</h1>
  <hr>
    <form method='post' action='/profiles' enctype="multipart/form-data">
    @csrf

        <div class="alert alert-info alert-dismissable" style="font-family: 'Cairo', sans-serif">
          <i class="fa fa-address-card" aria-hidden="true"></i>

          <strong>عزيزي الطبيب</strong> .. يسعدنا دائما وجودك ..
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">نبذة :</label>
          <div class="col-lg-8">
            <textarea name="abstract" id="" class="form-control md-textarea" rows="3"></textarea>


          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">عنوان العيادة :</label>
          <div class="col-lg-8">
            <input class="form-control" name="address" type="text" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">سعر الكشف :</label>
          <div class="col-lg-8">
            <input class="form-control" name="price" type="text" value="">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block container" style="font-family: 'Cairo', sans-serif"> حفظ التغييرات</button>

        </form>

         </div>
<hr>

@endsection