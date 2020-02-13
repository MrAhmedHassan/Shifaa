
@extends('layouts.admin')
@section('dashboard_content')

    <!--Start Main content container-->
    <div class="main_content_container">
        <div class="main_container  main_menu_open">
            <!--Start system bath-->
            <div class="home_pass hidden-xs">
                <ul>
                    <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                    <li class="bring_right"><a href="">إدارة الأطباء</a></li>
                    <li class="bring_right"><a href="">عرض كل الأطباء</a></li>
                </ul>
            </div>
            <!--/End system bath-->
            <div class="page_content">
                <h1 class="heading_title">عرض الاطباء</h1>

                <div class="wrap">
                    <table class="table table-bordered">
                        <tr>
                            <td>#</td>
                            <td>الصورة</td>
                            <td>اسم الطبيب</td>
                            <td>البريد الالكتروني</td>
                            <td>التحكم</td>
                        </tr>

                        @foreach($doctors as $value)
                            <tr class="text-center">
                                <td>{{$value->id}}</td>
                                <td><img src="{{$value->avatar}}" class="img-rounded user_thumb"></td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>

                                    <form action="/doctors/{{$value->id}}" style="display: inline-flex" method="post">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <button class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                                data-placement="top" title="حذف" style="color: brown"></button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach

                    </table>

                    <nav class="text-center">
                        <ul class="pagination">
                            {{ $doctors->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/End Main content container-->
@endsection
