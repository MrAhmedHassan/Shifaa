
@extends('layouts.admin')
@section('dashboard_content')

        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">إدارة الراسائل</a></li>
                        <li class="bring_right"><a href="">عرض كل الرسائل</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <h1 class="heading_title">عرض كل الرسائل</h1>

                    <div class="wrap">
                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>الاسم</td>
                                <td> الايميل</td>
                                <td> محتوى الرسالة</td>
                                <td>التحكم</td>
                            </tr>

                            @foreach($messages as $value)
                            <tr class="text-center">
                                <td>{{$value->id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->message}}</td>
                                <td>
                                    <a href="#"><button class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                        data-placement="top" title="تعديل"></button></a>

                                        <form action="/contacts/{{$value->id}}" style="display: inline-flex" method="post">
                                        {{method_field('DELETE')}}
                                         @csrf
                                     <button class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                        data-placement="top" title="حذف" style="color: brown"></button>
                                        </form>


                                </td>
                            </tr>
                            @endforeach

                        </table>


                    </div>
                </div>
            </div>
        </div>
        <!--/End Main content container-->
@endsection
