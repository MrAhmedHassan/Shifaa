@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><br><br><br><br>
        @php

       $sum=0;
      foreach($answer as $ans)
      {
         $sum+=$ans;
      }
              $array1=[1,2,3,30,401] ;  
              $good=range(0,5);
              $bad=range(6,10);
              $verybad=range(11,15);
              $veryverybad=range(16,20);

              if(in_array($sum,$good))
              {
                  echo"<div class='text text-light bg-dark p-2'>you are good</div>";
              }else if(in_array($sum,$bad))
              {
                echo"<div class='text text-light bg-dark p-2'>you are bad</div>";
              }else if(in_array($sum,$verybad))
              {
                echo"<div class='text text-light bg-dark p-2'>you are verybad</div>";
              }
              else if(in_array($sum,$veryverybad))
              {
                echo"<div class='text text-light bg-dark p-2'>you are very very bad</div>";
              }
              
         @endphp
                   
</div>
    </div>
</div>

<script type="text/javascript">
    $("#input-id").rating();
    
    $(document).ready(function(){
    $('#input-1').rating({min: 0, max: 8, step: 0.1, stars: 8});
});
</script>

    
@endsection