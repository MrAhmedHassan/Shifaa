@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><br><br><br><br>


@php
//echo $results;
if($sum==0)
{
    echo "لم نتلق اى اجابات من فضلك اعد اﻻختبار وجاوب على اﻻسئله";
}
for($i=0;$i<count($results);$i++)
{
$range=range($results[$i]->start,$results[$i]->end);

if(in_array($sum,$range))
{
echo "<div class='text text-light bg-success p-3 '>".$results[$i]->result."</div>";
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
