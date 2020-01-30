@extends('layouts.app')
@section('content')


<div class="human_body_show">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content">
                    <div class="container">
                        <div class="row pt-5 d-flex justify-content-center mb-5">
                            <img src="{{ asset('/imgs/Brain.png') }}" alt="Brain" class="brainImag">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center text-danger">الجهاز العصبي</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 m-auto text-break">
                                <p class="text-right mb-5">
                                    هو مجموعة معقدة من الأعصاب والخلايا المتخصصة المعروفة باسم الخلايا العصبية التي
                                    تنقل إشارات بين أجزاء مختلفة من الجسم. <br>
                                    يتكون الجهاز العصبي من جزئين: <br>
                                    <ol class="text-right mb-5">
                                        <li> <span class="text-danger">الجهاز العصبي المركزي</span>: يتكون الجهاز
                                            العصبي المركزي من الدماغ والحبل الشوكي والأعصاب.</li>
                                        <li>
                                            <span class="text-danger">الجهاز العصبي المحيطي</span>: يتكون الجهاز
                                            العصبي المحيطي من الخلايا العصبية الحسية، العقد (مجموعات من الخلايا
                                            العصبية) والأعصاب التي تتصل بعضها البعض والجهاز العصبي المركزي.
                                        </li>
                                    </ol>
                                    <p class="text-right">
                                        يقوم الجهاز العصبي بتنظيم بعض عمليات الجسم مثل ضغط الدم ومعدل التنفس، والتي
                                        تعمل دون جهد واعي، ويتكون النظام الجسدي من الأعصاب التي تربط الدماغ والحبل
                                        الشوكي مع العضلات والمستقبلات الحسية في الجلد.
                                    </p>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img class="advPic" src="{{ asset('/imgs/adv_1.jpg') }}" alt="adv_1">
                    <img class="advPic" src="{{ asset('/imgs/adv_4.jpg') }}" alt="adv_2">
                    <img class="advPic" src="{{ asset('/imgs/adv_3.jpg') }}" alt="adv_3">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
