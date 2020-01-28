@extends('layouts.app')
@section('content')
<div class="mt-5">
  <div class="container-fluid">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">الرقم</th>
                <th scope="col">العنوان</th>
                <th scope="col">المقال</th>
                <th scope="col">الصورة</th>

                <th scope="col"><span style="margin-left: 90px">تفاصيل   </span></th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $index => $value)
                <tr>
                    <th scope="row">{{$value['id']}}</th>
                    <td>{{$value['title']}}</td>
                    <td>{{$value['description']}}</td>
                    <td>{{$value['avatar']}}</td>
                   
                    <td class="d-flex ">
                        <a href="{{route('articles.show',['article' => $value['id']])}}" class="mx-2"><button type="button" class="btn btn-info">المقال وتعليقاته</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
