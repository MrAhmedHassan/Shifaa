@extends('layouts.app')
@section('content')
<div class="container-fluid">

    <div class="contentDoctor doctors">
        <div class="row p-3 doc">
            <div class="col-md-2 border border-primary pt-2 theGoodDoctor rounded d-flex justify-content-center text-center">
                <aside>
                    <div class="d-flex justify-content-center">
                        <h3 class="widget_title">الأقسام</h3>
                    </div>
                    <ul class="list-group p-0" id="departUL">
                        <div class="mb-2" onclick="forAll('departUL')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="allDepartments">الكل</li>
                        </div>
                        <div class="mb-2" onclick="forDep('Gldia')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="Gldia">جلدية</li>
                        </div>
                        <div class="mb-2" onclick="forDep('mkh')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="mkh">مخ وأعصاب</li>
                        </div>
                        <div class="mb-2" onclick="forDep('rmd')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="rmd">رمد</li>
                        </div>
                        <div class="mb-2" onclick="forDep('listen')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="listen"> أنف, أذن وحنجرة</li>
                        </div>
                        <div class="mb-2" onclick="forDep('teeth')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="teeth">أسنان</li>
                        </div>
                        <div class="mb-2" onclick="forDep('bons')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="bons">عظام</li>
                        </div>
                        <div class="mb-2" onclick="forDep('heart')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="heart"> قلب وأوعيه دموية</li>
                        </div>
                        <div class="mb-2" onclick="forDep('bely')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="bely">باطنة</li>
                        </div>
                        <div class="mb-2" onclick="forDep('bol')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="bol">مسالك بولية</li>
                        </div>
                        <div class="mb-2" onclick="forDep('children')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="children">أطفال</li>
                        </div>
                        <div class="mb-2" onclick="forDep('pregnant')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="pregnant">نساء وتوليد</li>
                        </div>
                        <div class="mb-2" onclick="forDep('sergy')" onmouseover="this.style.cursor = 'pointer'">
                            <li class="list-group-item list-group-item-dark" id="sergy">جراحة</li>
                        </div>
                    </ul>
                </aside>
            </div>

        <div class="col-md-10 tall">
            <div class="row" id="myUL">
                <div class="col-md-12 d-flex justify-content-center">
                    <input onkeyup="forAllDoctors()" class="mb-4 p-3 rounded w-50" type="text" id="myInput" style="background-color: blanchedalmond" placeholder="ابحث عن طبيب ..">
                </div>

                @foreach($doctors as $doctor)

                        <div class="col-md-5 tall bg-dark mb-5 p-3 ml-3 mr-5 rounded allAboutDoctor" style="box-shadow: 3px 3px 20px;">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="docImage img-fluid" style="width: 150px; height: 150px;" src="{{ asset($doctor->avatar) }}" alt="Doctor">
                                </div>
                                <div class="col-md-7">
                                    <a href="/profiles/{{$doctor->id}}" class="doctorNameLink">
                                        <h4 class="text-primary doctorName">د/{{$doctor->name}}</h4>
                                    </a>
                                    <p class="text-white catDog">دكتور {{$doctor->category->category}}</p>
                                    <p>
                                        <i style="font-size: 20px" name="gemy" class="fa fa-star fa-2x" id="star5"></i>
                                        <i style="font-size: 20px" name="gemy" class="fa fa-star fa-2x" id="star4"></i>
                                        <i style="font-size: 20px" name="gemy" class="fa fa-star fa-2x" id="star3"></i>
                                        <i style="font-size: 20px" name="gemy" class="fa fa-star fa-2x" id="star2"></i>
                                        <i style="font-size: 20px" name="gemy" class="fa fa-star fa-2x" id="star1"></i>
                                    </p>
                                    <div name="gemy1" class="gemy2" id="val" style="display:none">{{$doctor->averageRating}}</div>
                                    <span class="details text-white" style="font-weight: bold">
                                            نبذة : {{$doctor->profile->abstract}}</span>
{{--                                    </i>--}}
                                    <i class="fa fa-map-marker fa-2x d-flex justify-content-start  text-primary">
                                        <span class="details text-white mt-2 mr-2">عنوان العيادة : {{$doctor->profile->address}}</span>
                                    </i>
                                    <i class="fa fa-money-bill d-flex justify-content-start text-primary mt-2" style="font-size: 20px;">
                                        <span class="details text-white mr-2 mt-1">سعر الكشف :{{$doctor->profile->price}} جنيه </span>
                                    </i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center align-items-center">
            {{ $doctors->links() }}
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

function forDep(type) {
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

/******************************Search All*********************************/

function forAll(type) {
    let searchDiv = document.getElementById(type).innerText;
    let ul = document.getElementById('myUL');
    let li = ul.getElementsByClassName('allAboutDoctor');
    for( let c = 0; c < li.length; c++ ) {
            li[c].style.display = "";
    }
}





var gemy=document.getElementsByName("gemy");
var gemy1=document.getElementsByName("gemy1");
var arraySparsee2 = [];
for (var i=0;i<gemy1.length;i++){
    arraySparsee2.push(parseInt(gemy1[i].innerText)) ;
}
var start=0;
var end=5;
for (var i=0;i<arraySparsee2.length;i++){
    console.log(arraySparsee2[i]);
    if(arraySparsee2[i]==1){
        arr=[];
        for(j=start;j<end;j++)
      {
        arr.push(gemy[j]);
      }
      console.log(arr[0]);
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
