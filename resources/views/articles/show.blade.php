@extends('layouts.app')
@section('content')

<div class="blogs_show container" style="background-color:#b4b4b41e ">
    <div class="row">
        <div class="col-md-8 p-5 " style="background-color: white" >
            <h1 class="text-primary">فوائد البطيخ الازرق</h1>
            <h3 class="text-danger mb-2">د.محمد الجهجهوني</h3>
            <h5 class="text-muted mb-5">15/1/2019</h5>
            <div class="blogs_show_img">
                <img class="img-fluid" src="{{ asset('/imgs/blog_1.PNG') }}" alt="article img"></div>
                <h4 class="pt-5" style="font-family: 'Amiri', serif;
                ">بيعمل حجات كتير اوي وعظيمة ومحدش فاهم حاجة و الدنيا مدعوكة و ناقصنا سوكة و
                تربيتاااااتيراارارار </h4>
            
            <div class="row">
            <div class="col-md-12 " style="background-color: white">
                <hr>
                <h1> التعليقات :</h1>
                <div class="comments">
                    <div class="user_comment d-flex">
                        <img class="rounded-circle mb-2" style="width: 6%" src="{{ asset('/eee.jpg') }}" alt="user img">
                        <h4 class="mr-2 mt-2">البرنس اوي</h4>
                    </div>
                    <h5 id="div_comments" class="mb-3"></h5>
                <form >
                    {{-- {{method_field('PUT')}} --}}
                    {{-- @csrf --}}
                    <div class="form-group">
                        <textarea class="form-control" id="text_area1" rows="2" style="font-size: 20px"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" id="btn_modify">عدل تعليقك</button>
                    <button type="submit" class="btn btn-primary" id="comment_btn_submit">سجل تعليقك</button>
                </form>
                </div>
            </div>
          </div>
         </div>
         <div class="col-md-4 d-flex flex-column justify-content-center align-items-center adv_blogs_show">
            <h3 class="text-muted mt-4">مساحة اعلانية</h3>
            <img src="{{ asset('/imgs/adv_1.jpg') }}" class="img-fluid ">
            <img src="{{ asset('/imgs/adv_4.jpg') }}" class="img-fluid ">
            <img src="{{ asset('/imgs/adv_3.jpg') }}" class="img-fluid ">
         </div>
        </div>
    </div>

<script>

    let comment_btn_submit = document.getElementById('comment_btn_submit');
    let div_comments = document.getElementById('div_comments');
    let arr_comments = [];

    comment_btn_submit.addEventListener('click', function (e) {
        let text_area_value = document.getElementById('text_area1').value;
        arr_comments.push(text_area_value);
        e.preventDefault();

        for (let i = 0; i < arr_comments.length; i++) {
            div_comments.append(arr_comments[i]);
            arr_comments = [];

            // $("#div_comments").after("<br />");

        }
        document.getElementById('text_area1').value = "";
    })

</script>

@endsection
