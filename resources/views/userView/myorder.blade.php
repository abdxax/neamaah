@extends('layouts.user')
@section('contac')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form method="POST">
                @csrf
            <div class="col-5">
                <div class="form-group">
                    <select class="form-control" name="id">
                        @if($id_o==1)
                        <option value="1" selected>كل الطلبات </option>
                            <option value="2">طلبات اليوم </option>
                            <option value="3">الطلبات القادمة </option>
                        @elseif($id_o==2)
                            <option value="1" >كل الطلبات </option>
                        <option value="2" selected>طلبات اليوم </option>
                            <option value="3">الطلبات القادمة </option>
                        @elseif($id_o==3)
                            <option value="1" >كل الطلبات </option>
                            <option value="2">طلبات اليوم </option>
                        <option value="3" selected>الطلبات القادمة </option>
                        @endif
                    </select>
                </div>
            </div>
                <div class="col-5">
                    <div class="form-group text-center">
                        <input type="submit" name="sub" value="عرض " class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <td></td>
                    <td>الاسم </td>
                    <td>رقم التواصل </td>
                    <td>موقع المناسبة </td>
                    <td>وصف المكان </td>
                    <td>التاريخ </td>
                    <td>الوقت  </td>

                </tr>
                </thead>
                <tbody>
                @foreach($orf as $o)
                    <tr>
                        <td></td>
                        <td>{{$o['name']}}</td>
                        <td>{{$o['phone']}}</td>
                        <td><a href="{{$o['link']}}" class="btn btn-primary">الموقع</a></td>
                        <td>{{$o['desc']}}</td>
                        <td>{{$o['date_of_come']}}</td>
                        <td>{{$o['time_come']}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
