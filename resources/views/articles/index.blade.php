@extends('layouts.app')
@section('content')
<div class="mt-5">
<a href="/article/create" class="btn btn-warning btn-lg ml-2 h-50"> كتابة مقال </a>
<a href="/articles/3/edit" class="btn btn-dark btn-lg ml-2 h-50">تعديل  المقال</a>
<!-- <a href="/articles/3/edit" class="btn btn-dark btn-lg ml-2 h-50">حذف  المقال</a> -->
</div>

<form id="" action="/comments/store" method="post" class="mt-5 container" enctype="multipart/form-data">
@csrf
    <label>ابدأ بكتابة تعليقك هنا</label>
    <textarea name="comment" id="" class="form-control md-textarea" cols="3" rows="3"></textarea>
    <button type="submit" class="btn btn-info mt-1" >حفظ التعليق</button>
</form>

<form id="" action="/comments/1/edit" method="post" class="mt-5 container" enctype="multipart/form-data">
@csrf
    <button type="submit" class="btn btn-info mt-1" > تعديل تعليقك الخرا</button>
</form>


@endsection
