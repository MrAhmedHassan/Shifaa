@extends('layouts.admin')
@section('dashboard_content')


<!--Start Main content container-->
<div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                <li class="bring_right"><a href="">إدارة أمراض العصر</a></li>
                <li class="bring_right"><a href="">عرض كل الأمراض</a></li>
            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">
            <h1 class="heading_title">عرض كل الأمراض</h1>

            <div class="wrap">
                <table id="myTable" class="table table-bordered">
                    <thead>
                        <td>#</td>
                        <td>الصورة</td>
                        <td>اسم المرض</td>
                        <td>الوصف</td>
                        <td>التاريخ</td>
                        <td>التحكم</td>

                    </thead>

                    <tbody>
                    @foreach($trends as $trend)
                    <tr class="text-center">
                        <td>{{$trend->id}}</td>
                        <td><img src="{{$trend->avatar}}" class="img-rounded user_thumb"></td>
                        <td>{{$trend->title}}</td>
                        <td>{{$trend->description}}</td>
                        <td>{{$trend->created_at}}</td>


                        <td>

                            <form action="/trends/{{$trend->id}}" style="display: inline-flex" method="post">
                                {{method_field('DELETE')}}
                                @csrf
                                <button class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="حذف" style="color: brown"></button>
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
