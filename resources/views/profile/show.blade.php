@extends('layouts.app')
@section('content')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">--}}
{{-- <link href="{{ asset('css/preview.css') }}" rel="stylesheet">--}}

<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
<div class="container main-secction mt-4">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 image-section">
            <img src="http://nicesnippets.com/demo/Nature-Night-Sky-Stars-Blurred-Light-Show-Mountains-WallpapersByte-com-1920x1080.jpg">
        </div>
        <div class="row user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        <img src="{{$user->avatar}}" class="profileImage">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                        <button class="btn btn-defult follow "><i class="fa fa-user-o" aria-hidden="true"></i> تقييم</button>
                    </div>
                    <div class="row user-detail-row">
                        <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                            <div class="border"></div>
                            <p>التقييم</p>
                            <span>320</span>
                        </div>
                        <div class="col-md-12 col-sm-12 user-detail-section2 pull-right">
                            <div class="border"></div>
                            <p>عدد المقالات</p>
                            <span>{{count($user->articles)}}</span>
                        </div>
                    </div>
                    <div class="col-md-12 user-detail-section2">
                        <div class="border"></div>
                        <p>عدد الكشوفات</p>
                        <span>{{count($user->doctorReservations)}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                <div class="row profile-right-section-row">
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                {{$user->name}}
                                <p> طبيب {{$user->category->category}}</p>
                                <h5>نبذة عننا</h5>
                                <p class="fontOfHabd">{{$user->profile->abstract}}</p>

                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right d-flex">
                                @if(auth()->user()->id == $user->id)
                                <a href="/profiles/{{$user->id}}/edit" class="btn btn-info btn-sm ml-2 h-25">تعديل الملف الشخصي</a>
                                @endif
                                @if(auth()->user()->id == $user->id && auth()->user()->hasRole('Doctor'))
                                <a href="/profile/complete" class="btn btn-info btn-sm ml-2 h-25">أكمل الملف الشخصي</a>
                                @endif

                            </div>
                        </div>
                    </div>
                    @if($user->hasRole('Doctor'))
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8  profile-tag-section text-center">
                                <div class="row">
                                    {{-- <div class="col-md-3 col-sm-3 profile-tag">--}}
                                    {{-- <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>--}}
                                    {{-- <p>معلومات</p>--}}
                                    {{-- </div>--}}
                                    {{-- <div class="col-md-3 col-sm-3 profile-tag">--}}
                                    {{-- <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i></a>--}}
                                    {{-- <p>مقالات</p>--}}
                                    {{-- </div>--}}
                                    {{-- <div class="col-md-3 col-sm-3 profile-tag">--}}
                                    {{-- <a href="#"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>--}}
                                    {{-- <p>حجوزات</p>--}}
                                    {{-- </div>--}}

                                </div>
                            </div>
                            <div class="col-md-4 img-main-rightPart">
                                <div class="row">
                                    <div class="col-md-12 text-center border border-primary rounded bg-primary">
                                        <h3 class="text-white">سعر الكشف</h3>
                                        <label>{{$user->profile->price}} جنيه</label>
                                        <h3 class="text-white">عنوان العيادة</h3>
                                        <label>{{$user->profile->address}}</label>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
