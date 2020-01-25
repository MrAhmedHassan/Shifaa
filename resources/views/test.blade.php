
{{--@foreach($users as $user)--}}
{{--    <div>--}}
{{--<img src="{{$user->avatar}}">--}}
{{--    </div>--}}
{{--    @endforeach--}}
<img src="{{Auth::user()->avatar}}">
{{--<img src="{{Auth::user()->DoctorCertificate}}">--}}

<form action="/profiles/{{$user->id}}" method="post" enctype="multipart/form-data">
{{--    @php--}}
{{--    dd($user->id);--}}
{{--    @endphp--}}
    {{ method_field('PUT') }}
    @csrf
    <input type="text" name="name" id="">
    <input type="email" name="email" id="" value="{{$user->email}}">
    <input type="file" name="avatar" id="">
    <input type="submit" id="">

</form>
