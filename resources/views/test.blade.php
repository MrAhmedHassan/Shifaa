
{{--@foreach($users as $user)--}}
{{--    <div>--}}
{{--<img src="{{$user->avatar}}">--}}
{{--    </div>--}}
{{--    @endforeach--}}
<img src="{{Auth::user()->avatar}}">
<img src="{{Auth::user()->DoctorCertificate}}">
