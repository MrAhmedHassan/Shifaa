@extends('layouts.app')
@section('content')


<div class="pain">
    <div class="container">
        
            <div class="row">
                <div class="col-md-8 column">
                    <div class="content text-center p-5">
                        <h3 class="text-danger mb-4">تساقط الشعر عند الرجال</h3>
                        <p>مرحبا بك في دليلنا عن تساقط الشعر لدى الرجال.</p>
                        <p>يمكن ان يتوقع معظم الرجال بعض التساقط في الشعر او تغير شكل الشعر بينما يتقدمون في العمر. يكون تساقط الشعر تدريجيا عادة، لكن يمكن ان يحدث احيانا بصورة مفاجئة، سريعة او غير طبيعية. يمكن ان يكون هذا النوع من تساقط الشعر علامة على مرض مسبب او مشكلة طبية احيانا.</p>
                        <p>ربما يؤدي تساقط الشعر الى نقص غزارة الشعر، يسبب الصلع في منطقة او اكثر في فروة الراس.</p>
                        <p>قد خصص هذا الدليل لمساعدتك على معرفة سبب تساقط الشعر ولتوجيهك نحو الاتجاه الصحيح للتقييم والعلاج. من فضلك الاخذ في عين الاعتبار ان هذه المعلومات لا يمكن ان تحل محل التقييم الذي يكون وجها لوجه مع الطبيب الخاص بك.</p>
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
