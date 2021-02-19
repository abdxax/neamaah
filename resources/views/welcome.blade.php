



<section><!-- Start section cards-->
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12 col-sm-10 offset-sm-2" id="part">
                <div class="text-center">
                    <h2>شركاء النجاح </h2>
                </div>
            </div>

            @foreach($ch as $c)

                <div class="col-lg-4 col-md-4 col-sm-10 m-auto pb-1" data-aos="zoom-in-up">
                <!--<div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="storage/{{$c->profile->pathLogo}}" alt="Card image cap" height="150px" width="150px">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">{{$c->profile->name}}</h5>
                            <div class="card-text text-center">


                            </div>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>-->
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
        <!-- -->


            <!-- -->




        </div>
    </div>
</section><!--End section cards-->

<section ><!--Start section order-->
    <div class="container-fluid" id="order">
        <div class="row" data-aos="zoom-out">

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
                        <label for="staticEmail" class="col-sm-4 col-form-label"  >الاسم</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control {{$errors->has('name')?'x':''}}" id="staticEmail" name="name">
                            <p>@error('name') {{$errors->first('name')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('phone')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-4 col-form-label">رقم الجوال</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control {{$errors->has('phone')?'x':''}}" id="staticEmail" name="phone" >
                            <p>@error('phone') {{$errors->first('phone')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">المدينة</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="city">
                                @foreach($city as $cit)
                                    <option value="{{$cit['id']}}">{{$cit['cityNmae']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('link')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-4 col-form-label">رابط الموقع</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control {{$errors->has('link')?'x':''}}" id="staticEmail" name="link">
                            <p>@error('des_locato') {{$errors->first('link')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('des_locato')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-4 col-form-label">وصف الموقع</label>
                        <div class="col-sm-8">
                            <textarea class="form-control {{$errors->has('des_locato')?'x':''}}" rows="7" name="des_locato"> </textarea>
                            <p>@error('des_locato') {{$errors->first('des_locato')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row date {{$errors->has('dat')?'has-error':''}}">
                        <label for="staticEmail" class="col-sm-4 col-form-label">التاريخ</label>
                        <div class="col-sm-8">
                            <!--<input type="text" class="form-control" id="datepicker" name="dat">-->
                            <input data-date-format="yyyy-mm-dd" id="datepicker" class="form-control {{$errors->has('dat')?'x':''}}" name="dat">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                            <p>@error('dat') {{$errors->first('dat')}} @enderror</p>
                        </div>
                    </div>

                    <div class="form-group row {{$errors->has('time')?'has-error':''}}" >
                        <label for="staticEmail" class="col-sm-4 col-form-label">الوقت </label>
                        <div class="col-sm-8 row">
                            <div class="col-4">
                                <input type="text" name="time" class="form-control {{$errors->has('time')?'x':''}}">

                            </div>
                            <div class="col-6 ">
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



<footer ><!--Footer-->
    <div class="row">
        <div class="col-4 f-right">
            <img src="image/webImage/2030logo.png" width="150px" height="100px">
        </div>
        <div class="col-4 ">
            <div class="text-center m-2">
                <h5>تطوير : عبدالرحمن الجارالله </h5>
                <p>@2020</p>
            </div>
        </div>
        <div class="col-4 ">
            <img src="image/webImage/hailtest.png" width="220px" height="130px">
        </div>
    </div>
</footer><!--End footer -->
