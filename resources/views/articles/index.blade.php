@extends('layouts.app')
@section('content')
<div class="mt-5">
<a href="/article/create" class="btn btn-warning btn-lg ml-2 h-50"> كتابة مقال </a>
<a href="/articles/3/edit" class="btn btn-dark btn-lg ml-2 h-50">تعديل  المقال</a>
<!-- <a href="/articles/3/edit" class="btn btn-dark btn-lg ml-2 h-50">حذف  المقال</a> -->
</div>

<form id="" action="/comments/store" method="post" class="mt-5 container" enctype="multipart/form-data">
@csrf
    <label>ابدأ بكتابة تعليقك هنا</label>
    <textarea name="comment" id="" class="form-control md-textarea" cols="3" rows="3"></textarea>
    <button type="submit" class="btn btn-info mt-1" >حفظ التعليق</button>
</form>

<form id="" action="/comments/1/edit" method="post" class="mt-5 container" enctype="multipart/form-data">
@csrf
    <button type="submit" class="btn btn-info mt-1" > تعديل تعليقك </button>
</form>

<!-- yehia -->

{{-- "blogs" --}}


    <article  class="container blogs">
            <div class="row">
                
            <aside class="single_sidebar_widget post_category_widget col-md-4 col-sm-6">
                <div class="d-flex justify-content-center"><h3 class="widget_title">الأقسام</h3></div>
                <ul class="list cat-list">
                    <li>
                        <a href="#" class="d-flex">
                            <p> جلدية</p>&nbsp
                            <p>(37)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>مخ وأعصاب </p>&nbsp
                            <p>(10)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>رمد </p>&nbsp
                            <p>(03)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>أنف, أذن وحنجرة</p>&nbsp
                            <p>(11)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p>أسنان</p>&nbsp
                            <p>21</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p> عظام </p>&nbsp
                            <p>(21)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p> قلب وأوعيه دموية </p>&nbsp
                            <p>(21)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p> باطنة </p>&nbsp
                            <p>(21)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p> مسالك بولية </p>&nbsp
                            <p>(21)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p> أطفال </p>&nbsp
                            <p>(21)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p> نساء وتوليد </p>&nbsp
                            <p>(21)</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex">
                            <p> جراحة </p>&nbsp
                            <p>(21)</p>
                        </a>
                    </li>
                </ul>
            </aside>


            <div class="col-md-8 col-sm-6">

                <a href="#"><div class="card mb-3" >
                    <div class="card-img-div">
                        <img class="card-img-top img-fluid"  src="{{ asset('/imgs/blog_1.PNG') }}" alt="Card image cap">
                        <div class="card-date d-flex flex-column justify-content-center align-items-center text-white">
                            <h4>15</h4>
                            <h4>يناير</h4>
                        </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title text-primary">فوائد البطيخ الأزرق</h5>
                      <p class="card-text d-inline">بيعمل حجات كتير اوي وعظيمة ومحدش فاهم حاجة و الدنيا مدعوكة و ناقصنا سوكة و تربيتاااااتيراارارار</p>&nbsp&nbsp<a href="#" class="d-inline-block"> اقرأ المزيد </a><br>
                      <a href="#" ><h5 class="text-muted d-inline ">د. محمد الجهجهوني</h5></a>
                    <span class="text-muted" >|  التعليقات ( 31 )</span></div>
                </div></a>

            </div>

            </div>
        
    </article>

@endsection
