@extends('layouts.user')
@section('contac')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h3>تحديث بيانات الجمعيه </h3>
            @if($message = Session::get('msg'))

                @if($message=='done')
                    <div class="col-10">
                        <div class="alert alert-success">
                          تم التحديث بنجاح
                        </div>
                    </div>
                @elseif($message=='error')
                    <h1>Not work</h1>
                @endif

            @endif
        </div>
         <div class="col-12 user-profilesimage">

             <img src="{{$mag}}" width="150px" height="150px"><br>
         </div>
        <form method="POST"  enctype="multipart/form-data">
            @csrf
           <div class="form-group row">
               <div class="col-12">
                   <input type="text" name="name" id="nam" class="form-control" value="{{$prof->name}}" placeholder="االاسم">
               </div>
           </div>

            <div class="form-group row">
                <div class="col-12">
                    <input type="text" name="linkLoca" id="nam" class="form-control" value="{{$prof->linkLoca}}"  placeholder="الموقع">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <input type="text" name="descr" id="nam" class="form-control" value="{{$prof->descr}}"  placeholder="وصف الموقع">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <input type="file" name="pathLogo" id="nam" class="form-control"  value="{{$prof->pathLogo}}" >

                </div>

                <div class="text-right">
                    <span class="text-right">ارفق شعار الجمعيه </span>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12 text-center">
                    <input type="submit" name="sub" id="nam" class="btn btn-info" value="تحديث ">

                </div>
            </div>


        </form>
    </div>
</div>
@endsection
