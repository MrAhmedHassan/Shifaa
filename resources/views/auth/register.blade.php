@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('عضوية جديدة') }}</div>

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}">
                        @csrf --}}

                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label> --}}
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}"> -->
                    <form method="POST" enctype='multipart/form-data' action="{{ route('register') }}">
                        @csrf

                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('الإيميل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة السر') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد كلمة السر') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تسجيل') }} --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Avatar</label>
                            <div class="col-md-6">
                                <input id="avatar" type="file" name="avatar"  class="form-control @error('password') is-invalid @enderror"><br>

                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Doctor'sCertificate</label>
                            <div class="col-md-6">
                                <input type="file" id="certification"  class="form-control @error('certification') is-invalid @enderror" name="certification"><br>
                                @error('certification')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <label class="form-check-label ml-5" for="exampleRadios1">
                                            Doctor
                                        </label>
                                        <input type="radio" class="form-check-input @error('role') is-invalid @enderror" name="role" value="Doctor">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label ml-5" for="exampleRadios1">
                                            Patient
                                        </label>
                                        <input type="radio" class="form-check-input @error('role') is-invalid @enderror" name="role" value="Patient">
                                    </div>

                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

{{--                        <div class="form-group row">--}}
{{--                            <label class="col-md-4 col-form-label text-md-right">{{ __('Choose Character') }}</label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-check">--}}
{{--                                    <label class="form-check-label" for="exampleRadios1">--}}
{{--                                        Doctor--}}
{{--                                    </label>--}}
{{--                                    <input type="radio" class="form-check-input form-control @error('role') is-invalid @enderror" name="role" value="Doctor">--}}
{{--                                </div>--}}
{{--                                <div class="form-check">--}}
{{--                                    <label class="form-check-label" for="exampleRadios1">--}}
{{--                                        Patient--}}
{{--                                    </label>--}}
{{--                                    <input type="radio" class="form-check-input form-control @error('role') is-invalid @enderror" name="role" value="Patient">--}}
{{--                                </div>--}}
{{--                                @error('role')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        @php
                        $categories = \App\Category::all();
                        @endphp
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('category') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <select name="category" class="form-control">
                                      @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
