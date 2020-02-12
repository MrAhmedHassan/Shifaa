@extends('layouts.app')
@section('content')


<div class="pain">
    <div class="container" id="up">

        <div class="row">
            <div class="col-md-8 column">
                <div class="content text-center p-5 " style="line-height: 250%;">
                    <h3 class="text-danger mb-4">{{$diseases->title}}</h3>
                    <p>{{$diseases->description}}</p>
                </div>

                <div class="card text-center">
                    <div class="card-header">
                        فريق شفاء يتمنى لك الشفاء العاجل وينصحك بزيارة طبيب مختص
                    </div>
                    <div class="row justify-content-center align-items-center">
                    @foreach($diseases->category->users as $user);
                    
                        <div class="col-md-3">
                            <div class="card-body my-3" style="background-color: rgba(0,0,0,.03)">
                                <h5 class="card-title">   طبيب {{$user->name}} تخصص {{$user->category->category}}</h5>
                                <p><img src="{{$user->avatar}}" class="rounded-circle img-fluid" style="width:10rem"></p>
                                <!-- this btn waiting handling of profile -->
                                <a href="/profiles/{{$user->id}}" class="btn btn-primary">عرض البروفايل</a>
                            </div>
                        </div>
                    
                    
                    @endforeach
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



@endsection