@extends('layouts.app')
{{-- @include('layouts.side-bar') --}}
@section('content')

    <div class='container d-flex flex-column justify-content-end'>


        <div class="card bg-light mb-3 mt-5 w-75">
            <div class="card-header">المرض بالتفصيل</div>
            <div class="card-body">
         
                <h5 class="card-title">العنوان : </h5>
                <p class="card-text">{{$diseases->title}}</p>
                <h5 class="card-title">الوصف : </h5>
                <p class="card-text">{{$diseases->description}}</p>
    
            </div>
        </div>

        <a href="/diseases" class="btn btn-primary btn-lg active w-25 py-2 my-3" style="margin-left: 25%" role="button" aria-pressed="true">Back to table</a>
    {{-- <h4>{{$myposts->links()}}</h4> --}}
@endsection
