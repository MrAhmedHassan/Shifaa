
@extends('layouts.admin')
@section('dashboard_content')

        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">إدارة المساعدين</a></li>
                        <li class="bring_right"><a href="">عرض كل المساعدين</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <h1 class="heading_title">عرض كل المساعدين</h1>

                    <div class="wrap">
                        <table id="myTable" class="table table-bordered">
                            <thead>
                                <td>#</td>
                                <td>الصورة</td>
                                <td>اسم المساعد</td>
                                <td>البريد الالكتروني</td>
                                <td>التحكم</td>
                            </thead>

                            <tbody>
                            @foreach($assistants as $value)
                            <tr class="text-center">
                                <td>{{$value->id}}</td>
                                <td><img src="{{$value->avatar}}" class="img-rounded user_thumb"></td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>


                                        <form action="/assistants/{{$value->id}}" style="display: inline-flex" method="post">
                                        {{method_field('DELETE')}}
                                         @csrf
                                     <button class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                        data-placement="top" title="حذف" style="color: brown"></button>
                                        </form>


                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
        <!--/End Main content container-->
@endsection
