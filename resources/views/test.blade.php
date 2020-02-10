<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.7 Ajax Request example</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>



<div class="container">



    <input type="radio" name="1" class="cat" value="llll">
    <input type="radio" name="1" class="cat" value="sssss">

</div>

</body>

<script type="text/javascript">
   let roles = document.getElementsByClassName('cat');
   console.log(roles.length);
   for(let i=0 ;roles.length > i ; i++){
       roles[i].addEventListener('change',(e)=>{
           console.log('sed');
       });
   }

</script>

<script>


</script>


</html>
