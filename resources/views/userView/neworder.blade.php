@extends('layouts.user')
@section('contac')
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
                <td>االحصول </td>
            </tr>
            </thead>
            <tbody>
            @foreach($neword as $ord)
                 <tr>
                     <td></td>
                     <td>{{$ord['name']}}</td>
                     <td>{{$ord['phone']}}</td>
                     <td><a href="{{$ord['link']}}" class="btn btn-info">الموقع </a> </td>
                     <td>{{$ord['desc']}}</td>
                     <td>{{$ord['date_of_come']}}</td>
                     <td>{{$ord['time_come']}}</td>
                     <td><a href="{{route('user.takeOrder',$ord['id'])}}" class="btn btn-success">اضافة </a> </td>

                 </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

