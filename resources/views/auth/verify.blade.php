@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 80px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تحقق من عنوان بريدك الإلكتروني') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.') }}
                        </div>
                    @endif

                    {{ __('قبل المتابعة ، يرجى التحقق من بريدك الإلكتروني لمعرفة رابط التحقق.   .') }}
                    {{ __('إذا لم تستلم البريد الإلكتروني') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('انقر لإستلام طلب آخر') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
