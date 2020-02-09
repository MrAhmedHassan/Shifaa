@extends('/layouts/app')

@section('content')
<br><br><br><br>



<div class="container " align="right" dir="rtl">
    <div class="row">
        <div class="col-sm-12 mt-3 d-flex justify-content-center">

            <div class="jumbotron">
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
                    <div class="text-white  pt-3 pb-3 mt-1 define ">
                    <div class='text text-dark bg-light p-2'><h3>{{$question->question}}</h3> </div>
                    @foreach($question->answers as $answers)
                    <h4><input type='radio' class='text text-dark bg-light' name={{$question->questionEnglish}} value={{$answers->value}}> {{ $answers->answer}}</h4><br>
                    <input type="hidden" name="test_id" value={{$question->test_id}}>
                    @endforeach
                    </div>
                    @endforeach
                  
                
                    <input type="submit" value="submit" class="btn btn-success">

               
                </form>




            </div>





        </div>
    </div>
</div>


<script>






</script>

@endsection