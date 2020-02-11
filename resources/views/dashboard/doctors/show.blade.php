

@extends('layouts.admin')
@section('dashboard_content')


<div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارة الاطباء</a></li>
                <li class="bring_right"><a href="">فحص ايميل الطبيب</a></li>
            </ul>
        </div>


                            <div class="col-md-1">
                                <img class="rounded-circle mb-2 img-fluid" style="width: 50px; height:50px" src="{{$user->avatar}}" alt="user img">
                            </div>

                            <div class="col-md-8 pr-3">
                                <p class="card-text">{{$user->name}}</p>
                            </div>
                            <div class="col-md-8 pr-3">
                                <p class="card-text">{{$user->email}}</p>
                            </div>

                            <div class="col-md-1">
                                <img class="rounded-circle mb-2 img-fluid" style="width: 50px; height:50px" src="{{$user->DoctorCertificate}}" alt="user img">
                            </div>

{{--            delete doctor--}}
            <form action="/doctors/{{$user->id}}" style="display: inline-flex" method="post">
                {{method_field('DELETE')}}
                @csrf
                <button class="btn btn-danger" type="submit" style="color: brown">حذف</button>
            </form>

{{--            aprove doctor--}}
            <form action="/doctors/{{$user->id}}" style="display: inline-flex" method="post">

                @csrf
                <button class="btn btn-success"
                        type="submit" style="color: brown">قبول</button>
            </form>














@endsection
