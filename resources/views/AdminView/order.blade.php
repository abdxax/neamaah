@extends('layouts.admin')
@section('contac')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h3>ملخص الطلبات </h3>
            </div>
        </div>
        <div class="col-9">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>المنطقة</th>
                    <th>العدد</th>
                </tr>
                </thead>
                <tbody>
                @php($count=1)
                @foreach($citys as $city)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$city['cityNmae']}}</td>
                        <td>{{$city->orders->count()}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
