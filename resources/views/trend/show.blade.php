@extends('layouts.app')
@section('content')


<div class="pain">
    <div class="container" id="up">

    
        <div class="row">
            <div class="col-md-8 column mt-2">

                <div class="content text-center p-5">
                    <h3 class="text-danger mb-4">{{$trends->title}}</h3>
                    <p>{{$trends->description}}</p>
                </div>

                <div class="card text-center">
                    <div class="card-header">
                        فريق شفاء يتمنى لك دوام الصحة والعافية ويذكرك بأن الوقاية دائما خير من العلاج  
                    </div>
                    <div class="row justify-content-center align-items-center">
                   
                </div>
                </div>

            </div>
            <div class="col-md-4 column">
                <div>
                    <h3 class="text-muted mt-4 text-center">مساحة اعلانية</h3>
                    <img class="advPic" src="{{ asset('/imgs/adv_1.jpg') }}" alt="adv_1">
                    <img class="advPic" src="{{ asset('/imgs/adv_4.jpg') }}" alt="adv_2">
                    <img class="advPic" src="{{ asset('/imgs/adv_3.jpg') }}" alt="adv_3">
                </div>
            </div>
        </div>

    </div>
    <a href="#up"><i class="fas fa-arrow-circle-up mb-3 mr-5 fa-3x"></i></a>
</div>


<div >
    <footer class="container-fluid bg-primary text-white d-flex justify-content-center align-items-center navbar-fixed-bottom" style="position: relative;bottom:0px !important;height: 60px">Copyright by Ghosts 2020 ©</footer>
</div>

@endsection