@extends('/layouts/app')

@section('content')
<br><br><br><br>



<div class="container " align="right" dir="rtl">
    <div class="row">
        <div class="col-sm-12 mt-3 d-flex justify-content-center">

            <div class="jumbotron">
                <form method='post' action='/tests/{{$test->id}}' enctype="multipart/form-data">
                    @csrf
                    
                    @foreach($test->questions as $question )
                    <div class="text-white  pt-3 pb-3 mt-1 define ">
                    <div class='text text-dark bg-light mt-0 p-2'>{{$question->question}} </div>
                    @foreach($question->answers as $answers)
                    <input type='radio' class='text text-dark bg-light ' name={{$question->questionEnglish}} value={{$answers->value}}> {{ $answers->answer}}<br>
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