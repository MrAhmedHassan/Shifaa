@extends('layouts.app')
@section('content')

<!-- waiting yehia to see these fonts -->
<link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

<form method='post' action='/profiles' enctype="multipart/form-data">
@csrf

          <strong>اكمل ملفك الشخصي</strong>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label" style="font-family: 'Cairo', sans-serif">نبذة :</label>
          <div class="col-lg-8">
            <textarea name="abstract" id="" cols="70" rows="5"></textarea>
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
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<!--  -->
<hr>



@endsection