@extends('layouts.user')
@section('contac')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @if($message = Session::get('msg'))

                    @if($message=='done')
                        <div class="col-10">
                            <div class="alert alert-success text-center">
                                تم اضافة الجمعية بنجاح
                            </div>
                        </div>
                    @elseif($message=='error')
                        <h1>Not work</h1>
                    @endif

                @endif
                <form method="POST">
                    @csrf
                    <div class="col-5">
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="رقم التواصل ">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group text-center">
                            <input type="submit" name="sub" value="اضافة  " class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <td></td>
                        <td>رقم التواصل </td>
                        <td>حذف   </td>

                    </tr>
                    </thead>
                    <tbody>
                    @php($count=1)
                     @foreach($Phones as $ph)
                         <tr>
                             <td>{{$count++}}</td>
                             <td>{{$ph->phone}}</td>
                             <td><a href="{{route('user.deletephone',$ph->id)}}" class="btn btn-danger">حذف</a> </td>
                         </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
