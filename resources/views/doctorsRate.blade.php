@extends('layouts.app')


@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
 <div class="panel panel-default">
 <div class="panel-body">



 
<form action="{{ route('doctors.post') }}" method="POST">
  {{ csrf_field() }}
  
 <div class="card">
<div class="container-fliud">
  <div class="wrapper row">
  <div class="preview col-md-6">
<div class="preview-pic tab-content">
 <div class="tab-pane active" id="pic-1"><img src="https://dummyimage.com/500x450/000/fff" /></div>
 </div>
   </div> <div class="details col-md-6">
<div class="rating">
  <br>
 <!--input id="input-1" name="rate" class="rating rating-loading"
  data-min="0" data-max="5" data-step="1" value="{{ $user->userAverageRating }}"
   data-size="xs" -->

 <input id="e5" name="rate" value="5" type="radio"></a><label for="e5">☆</label>
		<input  id="e4" name="rate" value="4" type="radio"></a><label for="e4">☆</label>
		<input  id="e3" name="rate" value="3" type="radio"></a><label for="e3">☆</label>
		<input id="e2" name="rate" value="2" type="radio"></a><label for="e2">☆</label>
	<input  id="e1" name="rate" value="1" type="radio"></a><label for="e1">☆</label>
	
     <input type="hidden" name="id" required="" value="{{ $user->id }}">
 
   <br/> <button class="btn btn-success">Submit Review</button>
 </div>   </div>  </div>
  </div> </div>
 </form>
  </div>
  </div>
 </div>
</div>
</div>

<script type="text/javascript">

 

</script>

@endsection