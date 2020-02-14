@extends('layouts.app')
@section('content')

<!-- waiting yehia to see these fonts -->
<link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

<div class="container" style="margin-top: 80px">
  <h1 class="text-dark" style="font-family: 'Cairo', sans-serif;">
    <span class="glyphicon glyphicon-user"></span>تعديل الملف الشخصي</h1>
  <hr>
  <div class=" personal-info">
    <form method='post' action='/profiles/{{$user->id}}' enctype="multipart/form-data">
      {{method_field('PUT')}}
      @csrf

      <div class="row">

        <div class="col-md-3">
            <img src="{{$user->avatar}}" class="avatar img-circle img-fluid" alt="avatar">
            <h6 style="font-family: 'Cairo', sans-serif">تغيير الصورة الشخصية</h6>
            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
            @error('avatar')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="col-md-9">
          <div class="alert alert-info alert-dismissable" style="font-family: 'Cairo', sans-serif">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <strong>عزيزي الطبيب</strong> .. رجاءا تأكد من صحة بياناتك ..
          </div>
          <h3 style="font-family: 'Cairo', sans-serif">المعلومات الشخصية</h3>


          <div class="form-group">
            <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">الاسم :</label>
            <div class="col-lg-8">
              <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{$user->name}}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">البريد الالكتروني :</label>
            <div class="col-lg-8">
              <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{$user->email}}" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block container" style="font-family: 'Cairo', sans-serif"> حفظ التغييرات</button>
</div>
      </div>
    </form>


</div>
</div>


@endsection
