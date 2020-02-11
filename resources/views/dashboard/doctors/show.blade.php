

@extends('layouts.admin')
@section('dashboard_content')
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}


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

        <div class="container">
            <div class="row">

                <div class="col-md-10 bg-info">
                    <h1 class="card-text text-muted">{{$user->name}}</h1>
                    <h1 class="card-text text-muted">{{$user->email}}</h1>
                </div>

                <div class="col-md-2">
                    <img class="rounded-circle mb-2 img-fluid" style="width: 20vh;height: 20vh;border-radius: 50%;" src="{{$user->avatar}}" alt="user img">
                </div>

                <div class="col-md-12 text-center " style="margin-top: 30px;margin-bottom: 50px">
                    <img class="mb-2 " style="width: 60vh;height: 60vh" src="{{$user->DoctorCertificate}}" alt="user img">
                </div>

                <div class="text-center col-md-12 " style="margin-bottom: 30px">
                    {{--            delete doctor--}}
                    <form action="/doctors/{{$user->id}}" style="display: inline-flex;margin-left: 20px" method="post">
                        {{method_field('DELETE')}}
                        @csrf
                        <button class="btn btn-danger btn-lg" type="submit" style="color: #a59b00">حذف</button>
                    </form>

                    {{--            aprove doctor--}}
                    <form action="/doctors/{{$user->id}}" style="display: inline-flex" method="post">

                        @csrf
                        <button class="btn btn-success btn-lg"
                                type="submit" style="color: brown">قبول</button>
                    </form>
                </div>



            </div>
        </div>















@endsection
