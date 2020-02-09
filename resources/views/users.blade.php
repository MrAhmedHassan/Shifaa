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
         <input id="input-1" name="input-1" class="rating rating-loading"
          data-min="0" data-max="5" data-step="0.1" 
         value="{{ $user->averageRating }}" data-size="xs" disabled="">
         <input id="input-1" style="color:red;" name="input-1" value="4.3" class="rating rating-loading">
        </td>
         
 
         
         <td>
<a href="{{ route("posts.show",$user->id) }}" class="btn btn-primary btn-sm">View</a>
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
    $("#input-id").rating();
    
    $(document).ready(function(){
    $('#input-1').rating({min: 0, max: 8, step: 0.1, stars: 8});
});
</script>

    
@endsection