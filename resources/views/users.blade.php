@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">doctor rating</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                        <th>id</th>
                            <th>image</th>
                            <th>Name</th>
                            <th width="400px">Star</th>
                            <th width="100px">View</th>
                            </tr>  
                        @if($users->count())
                   @foreach($users as $user)
               @if($user->hasRole('Doctor'))
         <tr>
         <td>{{ $user->id }}</td>
         <td><img width="100px" height="100" style="text-align:center;" 
         src={{ $user->avatar }}></td>
         <td>{{ $user->name }}</td><td>
         <!--input id="input-1" name="input-1" class="rating rating-loading"
          data-min="0" data-max="5" data-step="0.1" 
         value="{{ $user->averageRating }}" data-size="xs" disabled=""-->
         <i class="fa fa-star fa-2x" id="star5"></i>
         <i class="fa fa-star fa-2x" id="star4"></i>
         <i class="fa fa-star fa-2x" id="star3"></i>
         <i class="fa fa-star fa-2x" id="star2"></i>
         <i class="fa fa-star fa-2x" id="star1"></i>
         <div id="val" style="display:none">{{$user->averageRating}}</div>
         <td>
<a href="{{ route("doctors.show",$user->id) }}" class="btn btn-primary btn-sm">Rate</a>
 </td> </tr>
                            @endif
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
</div>
    </div>
</div>

<script type="text/javascript">
 var star1= document.getElementById("star1");
 var star2= document.getElementById("star2");
 var star3= document.getElementById("star3");
 var star4= document.getElementById("star4");
 var star5= document.getElementById("star5");

 var star= document.getElementById("val");
  if(star.innerText>=1.0000&&star.innerText< 1.9000)
  {
      star1.style.color="yellow";
  }else if(star.innerText>=2.0000&&star.innerText< 2.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
  }else if(star.innerText>=3.0000&&star.innerText< 3.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
    star3.style.color="yellow";
  }else if(star.innerText>=4.0000&&star.innerText< 4.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
    star3.style.color="yellow";
    star4.style.color="yellow";
  }
  else if(star.innerText>=5.0000&&star.innerText< 5.9000)
  {
    star1.style.color="yellow";
    star2.style.color="yellow";
    star3.style.color="yellow";
    star4.style.color="yellow";
    star5.style.color="yellow";
  }
   










    $("#input-id").rating();
    
    $(document).ready(function(){
    $('#input-1').rating({min: 0, max: 8, step: 0.1, stars: 8});
  
  
});
</script>

    
@endsection