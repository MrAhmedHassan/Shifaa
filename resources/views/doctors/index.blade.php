@extends('layouts.app')
@section('content')
<div class="container-fluid">

    <div class="contentDoctor doctors">
        <div class="row p-3 doc">
            <div class="col-md-2 border border-primary pt-2 theGoodDoctor rounded d-flex justify-content-center text-center">
                <aside>


                    <a href="/article/create" class="btn btn-info w-100 mb-3"> إنشاء مقال</a>
                    <div class="d-flex justify-content-center">
                        <h3 class="widget_title">الأقسام</h3>
                    </div>
                    <ul class="list-group p-0" id="departUL">
                        <div class="mb-2" onclick="forGldia('Gldia')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="Gldia">جلدية</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('mkh')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="mkh">مخ وأعصاب</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('rmd')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="rmd">رمد</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('listen')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="listen">أنف وأذن وحنجرة</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('teeth')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="teeth">أسنان</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('bons')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="bons">عظام</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('heart')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="heart">قلب وأوعية دموية</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('bely')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="bely">باطنة</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('bol')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="bol">مسالك بولية</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('children')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="children">أطفال</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('pregnant')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="pregnant">نساء وتوليد</li>
                        </div>
                        <div class="mb-2" onclick="forGldia('sergy')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="sergy">جراحة</li>
                        </div>
                    </ul>
                </aside>
            </div>
            <div class="col-md-5 tall">
                <a href="/profiles/{{$doctor->id}}">
                    <h4 class="text-primary">د/{{$doctor->name}}</h4>
                </a>
                <p class="text-white">دكتور {{$doctor->category->category}}</p>
                <p>
         <i name="gemy" class="fa fa-star fa-2x" id="star5"></i>
         <i name="gemy" class="fa fa-star fa-2x" id="star4"></i>
         <i name="gemy" class="fa fa-star fa-2x" id="star3"></i>
         <i name="gemy" class="fa fa-star fa-2x" id="star2"></i>
         <i name="gemy" class="fa fa-star fa-2x" id="star1"></i>
       </p>
       <div name="gemy1" class="gemy2" id="val" style="display:none" >{{$doctor->averageRating}}</div>


        <div class="col-md-10 tall">
            <div class="row" id="myUL">
                <div class="col-md-12 d-flex justify-content-center">
                    <input onkeyup="forAllDoctors()" class="mb-4 p-3 rounded w-50" type="text" id="myInput" style="background-color: blanchedalmond" placeholder="ابحث عن طبيب ..">
                </div>

                @foreach($doctors as $doctor)

                        <div class="col-md-5 tall bg-dark mb-5 p-3 ml-3 mr-5 rounded allAboutDoctor" style="box-shadow: 3px 3px 20px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="docImage img-fluid" style="width: 200px; height: 200px;" src="{{ asset($doctor->avatar) }}" alt="Doctor">
                                </div>
                                <div class="col-md-8">
                                    <a href="/profiles/{{$doctor->id}}">
                                        <h4 class="text-primary">د/{{$doctor->name}}</h4>
                                    </a>
                                    <p class="text-white catDog">دكتور {{$doctor->category->category}}</p>
                                    <p>
                                        <i name="gemy" class="fa fa-star fa-2x" id="star5"></i>
                                        <i name="gemy" class="fa fa-star fa-2x" id="star4"></i>
                                        <i name="gemy" class="fa fa-star fa-2x" id="star3"></i>
                                        <i name="gemy" class="fa fa-star fa-2x" id="star2"></i>
                                        <i name="gemy" class="fa fa-star fa-2x" id="star1"></i>
                                    </p>
                                    <div name="gemy1" class="gemy2" id="val" style="display:none">{{$doctor->averageRating}}</div>
                                    <span class="details text-white" style="font-weight: bold">
                                            نبذة : {{$doctor->profile->abstract}}</span>
                                    </i>
                                    <i class="fa fa-map-marker fa-2x d-flex justify-content-start  text-primary">
                                        <span class="details text-white mt-2 mr-2">عنوان العيادة : {{$doctor->profile->address}}</span>
                                    </i>
                                    <i class="fa fa-money-bill d-flex justify-content-start text-primary mt-2">
                                        <span class="details text-white mr-2">سعر الكشف :{{$doctor->profile->price}} جنيه </span>
                                    </i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">


/****************************Search***************************/
function forAllDoctors() {
    let searchInput = document.getElementById('myInput');
    let filter = searchInput.value.toUpperCase();
    let ul = document.getElementById('myUL');
    let li = ul.getElementsByClassName('allAboutDoctor');
    for( let c = 0; c < li.length; c++ ) {
        let h4Name = li[c].getElementsByTagName("h4")[0];
        let txtValue = h4Name.textContent || h4Name.innerText;
        if( txtValue.toUpperCase().indexOf(filter) > -1 ) {
            li[c].style.display = "";
        } else {
            li[c].style.display = "none";
        }
    }


}
/******************************Search By Side Bar*********************************/

function forGldia(type) {
    let searchDiv = document.getElementById(type).innerText;
    let ul = document.getElementById('myUL');
    let li = ul.getElementsByClassName('allAboutDoctor');
    for( let c = 0; c < li.length; c++ ) {
        let h4Name = li[c].getElementsByClassName("catDog")[0];
        let txtValue = h4Name.textContent || h4Name.innerText;
        if( txtValue.toUpperCase().indexOf(searchDiv) > -1 ) {
            li[c].style.display = "";
        } else {
            li[c].style.display = "none";
        }
    }
}





            <div class="col-md-5">
                <table class="table table-striped table-dark text-center border border-warning">
                    <thead class="bg-primary">
                        <tr style="font-size: 20px; color:#ffd7db">
                            <th scope="col">الأيام</th>
                            <th scope="col">من / إلي</th>
                            <th scope="col">الحجز</th>
                        </tr>
                    </thead>
                    <tbody>

                    @php
                        $reveals = $doctor->reveals;
                    @endphp
                    @if(count($reveals) < 1)
                        <tr class="text-primary">
                            <td>
                                <p style="font-size: 20px">لم يحدد</p>
                            <td>
                                <p style="font-size: 20px">لم يحدد</p>
                            </td>
                            <td>غيرمتاح</td>
                        </tr>
                        @elseif(count($reveals) <= 3)

                        @foreach($reveals as $reveal)
                            <tr class="text-primary">
                                <td>
                                {{--                                <p style="font-size: 20px">السبت</p>--}}
                                {{ \Carbon\Carbon::parse($reveal->date)->format('D')}}
                                {{--                                {{ date('dddd', strtotime($reveal->date)) }}                            </td>--}}
                                <td>
                                    <p style="font-size: 20px">     {{$reveal->start}}
                                        /       {{$reveal->end}} </p>
                                </td>
                                <td>  <form method="post" action="/reservations/{{$reveal->id}}/{{$doctor->id}}">
                                        @csrf
                                        <button type="submit" class="btn btn-success">احجز</button>


                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @else

                        @for($i=0 ; $i<3 ;$i++)
                            <tr class="text-primary">
                                <td>
                                {{--                                <p style="font-size: 20px">السبت</p>--}}
                                {{ \Carbon\Carbon::parse($reveals[$i]->date)->format('D')}}
                                {{--                                {{ date('dddd', strtotime($reveal->date)) }}                            </td>--}}
                                <td>
                                    <p style="font-size: 20px">     {{$reveals[$i]->start}}
                                        /       {{$reveals[$i]->end}} </p>
                                </td>
                                <td>
                                    <form method='post' action="/reservations/{{$reveals[$i]->id}}/{{$doctor->id}}">
                                        @csrf
                                        <button type="submit" class="btn btn-success">احجز</button>
                                    </form>
                                </td>
                            </tr>
                            @endfor

                        @endif

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    @endforeach
</div>

<div >
    <footer class="container-fluid bg-primary text-white d-flex justify-content-center align-items-center navbar-fixed-bottom" style="position: absolute;top:100% !important;height: 60px">Copyright by Ghosts 2020 ©</footer>
</div>

<script type="text/javascript">

var gemy=document.getElementsByName("gemy");
var gemy1=document.getElementsByName("gemy1");
var arraySparsee2 = [];
for (var i=0;i<gemy1.length;i++){

    arraySparsee2.push(parseInt(gemy1[i].innerText)) ;

}
var start=0;
var end=5;
for (var i=0;i<arraySparsee2.length;i++){
    // console.log(arraySparsee2[i]);
    if(arraySparsee2[i]==1){
        arr=[];
        for(j=start;j<end;j++)
      {
        arr.push(gemy[j]);
      }
      arr[0].style.color="yellow";
    start+=5;
    end+=5;
    continue;
   }else if(arraySparsee2[i]==2){
       arr1=[];
    for(j=start;j<end;j++)
      {

       arr1.push(gemy[j]);

      }

       arr1[0].style.color="yellow";
       arr1[1].style.color="yellow";

    start+=5;
    end+=5;
    continue;
   }else if(arraySparsee2[i]==3){
       arr2=[];
    for(j=start;j<end;j++)
      {
        arr2.push(gemy[j]);
      }
     arr2[0].style.color="yellow";
      arr2[1].style.color="yellow";
       arr2[2].style.color="yellow";
    start+=5;
    end+=5;
    continue;
   }else if(arraySparsee2[i]==4){
       arr3=[];
    for(j=start;j<end;j++)
      {

        arr3.push(gemy[j]);
      }
    arr3[0].style.color="yellow";
       arr3[1].style.color="yellow";
       arr3[2].style.color="yellow";
      arr3[3].style.color="yellow";
    start+=5;
    end+=5;
    continue;
   }else if(arraySparsee2[i]==5){
       arr4=[];
    for(j=start;j<end;j++)
      {
        arr4.push(gemy[j]);
      }
      arr4[0].style.color="yellow";
       arr4[1].style.color="yellow";
       arr4[2].style.color="yellow";
       arr4[3].style.color="yellow";
       arr4[4].style.color="yellow";
    start+=5;
    end+=5;
    continue;
   }
}





/*const arraySparse = ["a","b","c"]
let numCallbackRuns = 0

const arraySparse2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
var start=0;
var end=5;
arraySparse2.slice(start,end);
for (var i=0;i<arraySparse.length;i++){
    console.log(arraySparse[i]);
    console.log(arraySparse2.slice(start,end));
    start+=5;
    end+=5;

}*/










//console.log(document.getElementsByClassName("text-primary")[0]);

/*var star1= document.getElementById("star1");
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
  }*/

</script>
@endsection
