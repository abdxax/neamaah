@extends('layouts.admin')
@section('contac')

    <div class="container">
        <div class="row  justify-content-center">

            <div class="col-12">
                <div class="text-center ">
                    <h3>اضافة جمعية جديدة </h3>

                    @if($message = Session::get('msg'))

                        @if($message=='done')
                          <div class="col-10">
                              <div class="alert alert-success">
                                  تم اضافة الجمعية بنجاح
                              </div>
                          </div>
                        @elseif($message=='error')
                            <h1>Not work</h1>
                        @endif

                    @endif
                </div>
            </div>
            <div class="col-md-8">
                <form method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">البريد الالكتروني </label>
                        <div class="col-sm-7">
                            <input type="email"  class="form-control" id="staticEmail" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">كلمة المرور </label>
                        <div class="col-sm-7">
                            <input type="password"  class="form-control" id="staticEmail" name="password" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">كلمة المرور </label>
                        <div class="col-sm-7">
                            <input type="password"  class="form-control" id="staticEmail" name="password_conf" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">المدينة</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="city">
                                @foreach($city as $cit)
                                    <option value="{{$cit['id']}}">{{$cit['cityNmae']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 text-center">
                            <input type="submit"  class="btn btn-info " name="sub" value="حفظ" >
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <td></td>
                        <td>الجمعية</td>
                        <td>البريد الالكتروني </td>
                        <td>المدينة</td>
                       <!-- <td>حذف </td>-->
                    </tr>
                    </thead>
                <tbody>
                @php($count=1)
                 @foreach($users as $user)
                     <tr>
                         <td>{{$count++}}</td>
                         <td>{{$user->profile->name}} </td>
                         <td>{{$user['email']}}</td>
                         <td>{{$user->profile->city->cityNmae}}</td>

                     </tr>
                 @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
