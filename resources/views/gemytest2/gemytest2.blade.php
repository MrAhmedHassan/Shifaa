@extends('/layouts/app')
@section('content')
<br><br><br><br>


<div class="container" align="right" dir="rtl">
    <div class="row">
        @if(isset($result))
            <div class="alert alert-primary text-center col-md-9 m-auto" role="alert">
                <h3>{{$result}}</h3>
            </div>
        @endif
        <div class="col-sm-12 mt-3 d-flex justify-content-center">

            <div class="jumbotron py-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @if(count($errors->all())>0)
                        <li>{{' كل الحقول مطلوبة ﻻ تترك حقﻻ فارغا' }}</li>
                        @endif
                    </ul>
                </div>
            @endif
                <form method='post' action='/tests/{{$test->id}}' enctype="multipart/form-data">
                    @csrf
                    @foreach($test->questions as $question )
                    <div class="text-white  pt-3 mb-2 mt-1 define ">
                    <div class='text bg-info'><h3 class="p-2" id="questions_Qu">{{$question->question}}</h3> </div>
                    @foreach($question->answers as $answers)
                    <h4 id="questions_An" class="py-2"><input type='radio' class='text text-dark bg-light mr-2' style="width: 22px;height: 22px" name={{$question->questionEnglish}} value={{$answers->value}}> {{ $answers->answer}}</h4><br>
                    <input type="hidden" name="test_id" value={{$question->test_id}} >
                    @endforeach
                    </div>
                    @endforeach

                <div class="d-flex justify-content-center align-items-center">
                    <input type="submit" value="معرفة النتيجة" class="btn btn-success mt-2">
                </div>

                </form>
            </div>

        </div>
    </div>
</div>



@endsection
