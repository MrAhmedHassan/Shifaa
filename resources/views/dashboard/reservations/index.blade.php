@extends('layouts.admin')
@section('dashboard_content')

        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">إدارة الحجوزات</a></li>
                        <li class="bring_right"><a href="">عرض كل الحجوزات</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <h1 class="heading_title">عرض كل الحجوزات</h1>

                    <div class="wrap">
                        <table id="myTable" class="table table-bordered">
                            <thead>
                                <td>رقم الحجز</td>
                                <td>اسم المريض </td>
                                @role('Admin')
                                <td>اسم الدكتور</td>
                                @endrole
                                <td> الميعاد </td>
                                <td>من </td>
                                <td>إلى </td>
                                <td> التاريخ </td>
                                <td>التحكم</td>
                            </thead>

                            <tbody>
            @foreach($reservations as $value)
                            <tr class="text-center">
                                <td>{{$value->id}}</td>
                                <td>{{$value->patient->name}}</td>
                                @role('Admin')
                                <td>{{$value->doctor->name}}</td>
                                @endrole
                                <td>{{ date('D', strtotime($value->date)) }}</td>
                                <td>{{$value->reveal->start}}</td>
                                <td>{{$value->reveal->end}}</td>
                                <td>{{$value->reveal->date}}</td>
                                <td>


                                        <form action="/reservations/{{$value->id}}" style="display: inline-flex" method="post">
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
