@extends('layouts.app')
@section('content')

<form id="" action="/comments/1" method="post" class="mt-5 container">
{{method_field('PUT')}}
@csrf
    <label>تعديل تعليقك</label>
    <textarea name="comment" id="" class="form-control md-textarea" cols="3" rows="3">{{$comment->comment}}</textarea>
    <button type="submit" class="btn btn-info mt-1" >تعديل</button>
</form>

