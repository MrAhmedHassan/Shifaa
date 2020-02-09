@extends('layouts.app')
@section('content')


<div class="human_body_show">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content">



                    <div class="container">
                        <div class="row pt-5 d-flex justify-content-center mb-5">


                            <img src= "../images/{{$humanbody->image}}" class="brainImag">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center text-danger">{{$humanbody->title}}</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 m-auto text-break">
                                <p class="text-right mb-5">

                                {{$humanbody->description}}

                                </p>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h3 class="text-muted mt-4 text-center">مساحة اعلانية</h3>
                    <img class="advPic" src="{{ asset('/imgs/adv_1.jpg') }}" alt="adv_1">
                    <img class="advPic" src="{{ asset('/imgs/adv_4.jpg') }}" alt="adv_2">
                    <img class="advPic" src="{{ asset('/imgs/adv_3.jpg') }}" alt="adv_3">
                </div>
            </div>
        </div>
    </div>
</div>

<div >
    <footer class="container-fluid bg-primary text-white d-flex justify-content-center align-items-center navbar-fixed-bottom" style="position: relative;bottom:0px !important;height: 60px">Copyright by Ghosts 2020 ©</footer>
</div>

@endsection
