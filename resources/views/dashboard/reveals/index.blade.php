
@extends('layouts.admin')
@section('dashboard_content')


        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">إدارة المواعيد</a></li>
                        <li class="bring_right"><a href="">عرض كل المواعيد</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <h1 class="heading_title">عرض كل المواعيد</h1>

                    <div class="wrap">
                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>اليوم</td>
                                <td>من</td>
                                <td>إلى </td>
                                <td>الحد الاقصى </td>
                                <td>التحكم</td>
                            </tr>

                            @foreach($reveals as $value)
                            <tr class="text-center">
                                <td>{{$value->id}}</td>
                                <td>{{ date('D', strtotime($value->created_at)) }}</td>
                                <td>{{$value->start}}</td>
                                <td>{{$value->end}}</td>
                                <td>{{$value->limit}}</td>
                                <td>
                                    <a href="#"><button class="glyphicon glyphicon-pencil" data-toggle="tooltip"
                                        data-placement="top" title="تعديل"></button></a>

                                        <form action="/reveals/{{$value->id}}" style="display: inline-flex" method="post">
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
                                <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">»</span></a>
                                </li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a aria-label="Next" href="#"><span aria-hidden="true">«</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--/End Main content container-->


@endsection