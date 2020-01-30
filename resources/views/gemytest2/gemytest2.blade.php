@extends('/layouts/app')

@section('content')
<br><br><br><br>



<div class="container " align="right" dir="rtl">
    <div class="row">
        <div class="col-md-12">





            <div class="jumbotron">



                <form method='post' action='/tests/{{$test->id}}' enctype="multipart/form-data">
                    @csrf
                    @foreach($test->questions as $question )
                    <div class='text text-light bg-dark p-2'>{{$question->question}} </div>
                    @foreach($question->answers as $answers)
                    <input type='radio' name={{$question->questionEnglish}} value={{$answers->value}}> {{ $answers->answer}}<br>
                    <input type="hidden" name="test_id" value={{$question->test_id}}>
                    @endforeach
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