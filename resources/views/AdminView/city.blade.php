@extends('layouts.admin')

@section('contac')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <h3>اضافة مدينة جديدة  </h3>
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
            <form method="POST">
                @csrf
               <div class="form-group row">
                   <input type="text" name="city" class="form-control">

               </div>
                <div class="form-group">
                    <div class="col text-center">
                        <input type="submit" name="sav" class="btn btn-secondary" value="حفظ">
                    </div>
                </div>
            </form>

            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>المدينة</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($count=1)
                    @foreach($citys as $city)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$city['cityNmae']}}</td>
                            <td><a href="{{route('admin.city.delete',$city['id'])}}" class="btn btn-danger">حذف</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

