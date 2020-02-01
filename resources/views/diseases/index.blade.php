@extends('layouts.app')
@section('content')


<div class="pain">
    <div class="container">
        
            <div class="row">
                <div class="col-md-8 column">
                    <div class="content text-center p-5">
                        <h3 class="text-danger mb-4">{{$diseases->title}}</h3>
                        <p>{{$diseases->description}}</p>
                    </div>
                    

                </div>
                <div class="col-md-4 column">
                    <div>
                        <img class="advPic" src="{{ asset('/imgs/adv_1.jpg') }}" alt="adv_1">
                        <img class="advPic" src="{{ asset('/imgs/adv_4.jpg') }}" alt="adv_2">
                        <img class="advPic" src="{{ asset('/imgs/adv_3.jpg') }}" alt="adv_3">
                    </div>
                    
                </div>
                <a href="#up"><i class="fa fa-arrow-up arrow mb-3"></i></a>
            </div>
        
    </div>
</div>


@endsection
