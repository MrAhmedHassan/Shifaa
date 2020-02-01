@extends('layouts.app')
@section('content')

<link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&display=swap" rel="stylesheet">

<div class="container">
    <!-- Material form contact -->
    <div class="card mt-5">

        <h5 class="card-header info-color white-text text-center py-4" style="font-family: 'Cairo', sans-serif">
            <strong>كتابة مقال</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-right" method="post" action="/articles/store" enctype="multipart/form-data">
                @csrf
                <!-- title -->
                <div class="md-form mt-3 mb-3" style="font-family: 'Cairo', sans-serif">
                    <label>عنوان المقال</label>
                    <input type="text" name="title" id="" class="form-control" value="">
                </div>

                <!--article-->
                <div class="md-form mb-3">
                    <label for="" style="font-family: 'Cairo', sans-serif">ابدأ بكتابة مقالك هنا</label>
                    <textarea name="description" id="" class="form-control md-textarea" rows="7"></textarea>
                </div>

                <!-- image -->
                <label style="font-family: 'Cairo', sans-serif">اختر صورة مناسبة لمقالك</label>
                <div class="file-field md-form mb-2">
                    <div class="btn btn-outline-primary btn-rounded waves-effect btn-sm float-right">
                        <input type="file" name="avatar" value="">
                    </div>
                </div>
                <br>
                <br>
                <!-- Subject -->
                <span style="font-family: 'Cairo', sans-serif">التخصص</span>
                <div class="dropdown mt-2">
                    <select class="mdb-select caret btn btn-default dropdown-toggle" name="category">
                        @foreach ($categories as $category => $value)
                        <option value="{{$value->id}}">{{$value->category}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" style="font-family: 'Cairo', sans-serif">حفظ المقال</button>

            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form contact -->
</div>

@endsection