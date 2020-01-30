@extends('/layouts/app')

@section('content')
<br><br><br><br>



<div class="container " align="right" dir="rtl">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
            @foreach($tests as $test )
          <a href='/tests/{{$test->id}}'>{{$test->name}}</a>
          @endforeach
     
            

           </div>

  
  


        </div>
    </div>
</div>


    <script>



 var answerDmeer=[];

   
    </script>

@endsection