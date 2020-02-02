@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><br><br><br><br>


@php
//echo $results;
for($i=0;$i<count($results);$i++)
{
$range=range($results[$i]->from,$results[$i]->to);
$range=range($results[$i]->fromm,$results[$i]->too);
if(in_array($sum,$range))
{
echo $results[$i]->result;
}

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
