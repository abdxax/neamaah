<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- file web -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- anmation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- datepiker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <!-- font link -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- slider -->


     <!-- custom css -->
    <link  rel="stylesheet" href="css/style.css">
    <link  rel="stylesheet" href="css/style2.css">

    <!-- icon head -->
    <link rel="icon" href="image/webImage/namah.gif">
    <title>نعمة</title>
</head>
<body  dir="rtl">
<header><!--Start Header -->
    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light navcol">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"></a>


        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
            <ul class="navbar-nav mx-auto text-center" >
                <li class="nav-item ">
                    <a class="nav-link" href="#index">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#about">تعريف بالمبادرة</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#part">شركاء النجاح</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#order">تقديم طلب </a>
                </li>
            </ul>

        </div>
    </nav>
</header><!--End Header-->

<section class="intor" id="index"><!--Start section intro-->
    <div class="logo"  data-aos="fade-down">
        <img src="image/webImage/namah.gif" width="250px" height="190px">
    </div>
    <div class="txt-into ">
        <h3 class="w-100 text-center">وَإِذْ تَأَذَّنَ رَبُّكُمْ لَئِن شَكَرْتُمْ لَأَزِيدَنَّكُمْ ۖ</h3>
    </div>
</section><!--End section intro-->

<section dir="rtl" id="about"><!--Start section about-->
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-title text-center " data-aos="zoom-in-up">
                    <h2>تعريف المبادرة </h2>
                    <img src="image/webImage/emp.png"  width="110px" height="100px">
                    <img src="image/webImage/hail.png" width="110px" height="100px">
                </div>
            </div>
            <div class=" col-sm-10 text-center">
                <p>
                    <b>
                    (وَضَرَبَ اللَّهُ مَثَلًا قَرْيَةً كَانَتْ آمِنَةً مُطْمَئِنَّةً يَأْتِيهَا رِزْقُهَا رَغَدًا مِنْ كُلِّ مَكَانٍ فَكَفَرَتْ بِأَنْعُمِ اللَّهِ فَأَذَاقَهَا اللَّهُ لِبَاسَ الْجُوعِ وَالْخَوْفِ بِمَا كَانُوا يَصْنَعُونَ)
                        </b>
                           <br>
                    للحد من صور الاسراف و تسهيل الوصول للجمعيات حفظ الطعام باستخدام التقنيه الحديثه من هنا انطلقت فكرة نعمه و بدعم من سمو امير منطقة حائل عبدالعزيز بن سعد بن عبدالعزيز ال سعود و نائبه سمو الامير فيصل بن فهد بن مقرن ال سعود و برعاية من مجلس شباب منطقة حائل .
                </p>
            </div>

            <div class="col-12 text-center " data-aos="zoom-in-up">
                <h3>طريقة عمل المنصة </h3>
                <img src="image/webImage/lamp.png" width="80px" height="100px">
            </div>

            <div class=" col-sm-10 text-center">
               <p>من خلال خطوات بسيطة يمكن المستفيد تقديم طلب حفظ نعة من خلال المنصة :</p>
                <ul class="ullist text-right">
                    <li>تقديم طلب من خلال المنصة قبل موعد المناسبة بوقت كافي اقل مدة 24 ساعه قبل العزيمة .</li>
                    <li>يتم فرز الطلبات بشكل الي و ياصل الطلب الى الجمعية المناسبة.</li>
                    <li>يتم التعامل مع الطلب من قبل الجمعيه .</li>
                </ul>
            </div>


        </div>
    </div>
</section><!--End section about -->

<!--<section> Start section cards
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 " id="part">
                <div class="text-center">
                    <h2>شركاء النجاح </h2>
                </div>
            </div>

            @foreach($ch as $c)

                <div class="col-lg-4 col-md-4 col-sm-10 m-auto pb-1" data-aos="zoom-in-up">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="storage/{{$c->profile->pathLogo}}" alt="Card image cap" height="150px" width="150px">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">{{$c->profile->name}}</h5>
                            <div class="card-text text-center">


                            </div>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="storage/{{$c->profile->pathLogo}}" alt="Avatar" style="width:300px;height:300px;">

                            </div>
                            <div class="flip-card-back">
                                <h1>{{$c->profile->name}}</h1>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>


                </div>

        @endforeach
         -->







        </div>
    </div>
</section><!--End section cards-->


<section ><!--Start section order-->
    <div class="container-fluid" id="order">
        <div class="row" >

            <div class="col-12" >
                <div class="text-title text-center">
                    <h2>تقديم طلب  </h2>
                    @if($msg=Session::get('msg'))

                        <div class="col-12">
                            <div class="alert alert-success text-center">{{$msg}}</div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-8 m-auto text-center" dir="rtl">

                <form method="POST" class="froms-order" >
                    @csrf
                    <div class="form-group row {{$errors->has('name')?'has-error':''}}" >
                        <label for="staticEmail" class="col-sm-5 col-form-label"  >الاسم</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control {{$errors->has('name')?'x':''}}" id="staticEmail" name="name">
                            <p>@error('name') {{$errors->first('name')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('phone')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-5 col-form-label">رقم الجوال</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control {{$errors->has('phone')?'x':''}}" id="staticEmail" name="phone" >
                            <p>@error('phone') {{$errors->first('phone')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-5 col-form-label">المدينة</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="city">
                                @foreach($city as $cit)
                                    <option value="{{$cit['id']}}">{{$cit['cityNmae']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('link')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-5 col-form-label">رابط مكان المناسبة</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control {{$errors->has('link')?'x':''}}" id="staticEmail" name="link">
                            <p>@error('des_locato') {{$errors->first('link')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('des_locato')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-5 col-form-label">وصف مكان المناسبة</label>
                        <div class="col-sm-7">
                            <textarea class="form-control {{$errors->has('des_locato')?'x':''}}" rows="7" name="des_locato"> </textarea>
                            <p>@error('des_locato') {{$errors->first('des_locato')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row date {{$errors->has('dat')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-5 col-form-label">التاريخ</label>
                        <div class="col-sm-7">
                            <!--<input type="text" class="form-control" id="datepicker" name="dat">-->
                            <input data-date-format="yyyy-mm-dd" id="datepicker" class="form-control {{$errors->has('dat')?'x':''}}" name="dat">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                            <p>@error('dat') {{$errors->first('dat')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('time')?'has-error':''}}" >
                        <label for="staticEmail" class="col-sm-5 col-form-label">الوقت </label>
                        <div class="col-sm-7 row">
                            <div class="col-5">
                                <input type="text" name="time" class="form-control {{$errors->has('time')?'x':''}}">

                            </div>
                            <div class="col-7 ">
                                <select class="form-control" name="ps">
                                    <option value="a.m ">صباح</option>
                                    <option value="p.m ">مساء</option>
                                </select>
                            </div>
                            <p>@error('time') {{$errors->first('time')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="submit"  class="btn btn-default navcol btn-block" id="staticEmail" value="ارسال" >
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section><!--End section order-->

<section>
    <div class="container text-center my-3" id="part">
        <h2 class="font-weight-light" data-aos="zoom-in-up">شركاء النجاح</h2>
        @if(empty($ch))
            <p>empty</p>
        @else
            <p>kj - {{count($ch)}}</p>
            <img class="img-fluid" src="storage/{{$ch[0]->profile->pathLogo}}" width="100px" height="100px">
        @endif
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">

                    <div class="carousel-item active text-center">


                    @foreach($ch as $c)

                    <div class="carousel-item ">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img class="img-fluid" src="storage/{{$c->profile->pathLogo}}" width="100px" height="100px">
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</section>



<footer ><!--Footer-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 fodt"><img src="image/webImage/2030logo.png" width="110px" height="100px" class="footer-image"></div>
            <div class="col-4 fodt"></div>
            <div class="col-4 fodt"> <img src="image/webImage/hail.png" width="110px" height="100px"> </div>
        </div>
    </div>

</footer><!--End footer -->






<!-- js files-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- js file anmation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>
<!-- js datapiker -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script>

<script src="js.js"></script>


</body>
</html>
