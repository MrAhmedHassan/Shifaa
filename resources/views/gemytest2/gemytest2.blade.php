@extends('/layouts/app')

@section('content')
<br><br><br><br>
<div class="container " align="right" dir="rtl">
    <div class="row">
        <div class="col-md-12">
<form method='post' action='/test' enctype="multipart/form-data">
            @csrf
            <h1>اختبار الذكـــــاء</h1>

            <div class="jumbotron">
            <div class="text text-light bg-dark p-2"> هل تشعر بالصداع ؟</div>
            <input type="radio" name="gender" value="1">ايوة<br>
            <input type="radio" name="gender" value="2">ﻻ<br>
            <input type="radio" name="gender" value="3"> ربما فى بعض اﻻحيان<br>
            <input type="radio" name="gender" value="4"> مش عارف اذا كنت وﻻ ﻻء <br>

           <hr class="my-4">

           <div class="text text-light bg-dark p-2"> هل تشعر بالبرد ؟</div>
            <input type="radio" name="a" value="1">ايوة<br>
            <input type="radio" name="a" value="2">ﻻ<br>
            <input type="radio" name="a" value="3"> ربما فى بعض اﻻحيان<br>
            <input type="radio" name="a" value="4"> مش عارف اذا كنت وﻻ ﻻء <br>

            <hr class="my-4"> 

            <div class="text text-light bg-dark p-2"> هل تشعر بالضيق ؟</div>
            <input type="radio" name="b" value="1">ايوة<br>
            <input type="radio" name="b" value="2">ﻻ<br>
            <input type="radio" name="b" value="3"> ربما فى بعض اﻻحيان<br>
            <input type="radio" name="b" value="4"> مش عارف اذا كنت وﻻ ﻻء <br>


            <hr class="my-4">

            <div class="text text-light bg-dark p-2"> هل تشعر بالحر ؟</div>
            <input type="radio" name="c" value="1">ايوة<br>
            <input type="radio" name="c" value="2">ﻻ<br>
            <input type="radio" name="c" value="3"> ربما فى بعض اﻻحيان<br>
            <input type="radio" name="c" value="4"> مش عارف اذا كنت وﻻ ﻻء <br>

           </div>

    <input type="submit" value="submit" class="btn btn-success">

</form>
  


        </div>
    </div>
</div>


    <script>



 var answerDmeer=[];

   
    </script>

@endsection