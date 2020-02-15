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
                            <li class="list-group-item list-group-item-dark" id="allDepartments">كل الأطباء</li>
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
                            <li onclick="theActiveColor()" class="list-group-item list-group-item-dark" id="bons">عظام</li>
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

                    <div class="col-md-5 tall mb-5 p-3 ml-3 mr-5 rounded allAboutDoctor" style="box-shadow: 3px 3px 8px;background-color:#178394">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="docImage img-fluid" style="width: 150px; height: 150px;" src="{{ asset($doctor->avatar) }}" alt="Doctor">
                            </div>
                            <div class="col-md-7">
                                <a href="/profiles/{{$doctor->id}}" class="doctorNameLink" style="text-decoration: none">
                                    <h4 class="text-white doctorName">د/{{$doctor->name}}</h4>
                                </a>



                                <p class="text-white catDog">دكتور {{$doctor->category->category}}</p>
                               <p>
                                    @for($i=5 ; $i>=1;$i--)
                                    @if($i <= $doctor->average_rate)
                                        <i style="font-size: 20px ;color:yellow" name="gemy" class="fa fa-star fa-2x" id="star5"></i>

                                        @else
                                        <i style="font-size: 20px " name="gemy" class="fa fa-star fa-2x" id="star5"></i>

                                        @endif
                                        @endfor
                                </p>
                                <div name="gemy1" class="gemy2" id="val" style="display:none">{{$doctor->averageRating}}</div>
                                <span class="details text-white" style="font-weight: bold">
                                    نبذة : {{$doctor->profile->abstract}}</span>
                                <i class="fa fa-map-marker fa-2x d-flex justify-content-start mt-3" style="color:#c6c8ca">
                                    <span class="details text-white mt-2 mr-2">عنوان العيادة : {{$doctor->profile->address}}</span>
                                </i>
                                <i class="fa fa-money-bill d-flex justify-content-start mt-2" style="font-size: 20px;color:#c6c8ca">
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
    //beActive

    /****************************Search***************************/
    function forAllDoctors() {
        let searchInput = document.getElementById('myInput');
        let filter = searchInput.value.toUpperCase();
        let ul = document.getElementById('myUL');
        let li = ul.getElementsByClassName('allAboutDoctor');
        for (let c = 0; c < li.length; c++) {
            let h4Name = li[c].getElementsByTagName("h4")[0];
            let txtValue = h4Name.textContent || h4Name.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[c].style.display = "";
            } else {
                li[c].style.display = "none";
            }
        }
    }
    /******************************Search By Side Bar*********************************/

    function forDep(type) {
        let allLis = document.getElementsByClassName('list-group-item-dark');
        for (let index = 0; index < allLis.length; index++) {
            allLis[index].classList.remove('beActive');
        }
        let searchDiv = document.getElementById(type).innerText;
        let specificLi = document.getElementById(type);

        specificLi.classList.add('beActive');

        let ul = document.getElementById('myUL');
        let li = ul.getElementsByClassName('allAboutDoctor');
        for (let c = 0; c < li.length; c++) {
            let h4Name = li[c].getElementsByClassName("catDog")[0];
            let txtValue = h4Name.textContent || h4Name.innerText;
            if (txtValue.toUpperCase().indexOf(searchDiv) > -1) {
                li[c].style.display = "";
            } else {
                li[c].style.display = "none";
            }
        }
    }

    /******************************Search All*********************************/

    function forAll(type) {
        let searchDiv = document.getElementById(type).innerText;
        let allLis = document.getElementsByClassName('list-group-item-dark');
        for (let index = 0; index < allLis.length; index++) {
            allLis[index].classList.remove('beActive');
        }
        let x = document.getElementById('allDepartments');
        x.classList.add('beActive');


        let ul = document.getElementById('myUL');
        let li = ul.getElementsByClassName('allAboutDoctor');

        for (let c = 0; c < li.length; c++) {
            li[c].style.display = "";
        }
    }

</script>
@endsection