@extends('/layouts/app')
@section('content')

<div class="container-fluid">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">الرقم</th>
                <th scope="col">العنوان</th>
                <th scope="col">الوصف</th>
                <th scope="col"><span style="margin-left: 90px">تفاصيل   </span></th>
            </tr>
            </thead>
            <tbody>
            @foreach($diseases as $index => $value)
                <tr>
                    <th scope="row">{{$value['id']}}</th>
                    <td>{{$value['title']}}</td>
                    <td>{{$value['description']}}</td>
                    <td class="d-flex ">
                        <a href="{{route('diseases.show',['disease' => $value['id']])}}" class="mx-2"><button type="button" class="btn btn-info">المزيد </button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>













@endsection
