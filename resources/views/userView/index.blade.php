@extends('layouts.user')

@section('contac')
<div class="container">
<div class="row">
    <div class="col-12 text-center">
        <img src="storage/{{auth()->user()->profile->pathLogo}}" width="250px" height="250px">
        <p>{{auth()->user()->profile->name}}</p>
        <p>{{auth()->user()->profile->linkLoca}}</p>
        <p>{{auth()->user()->profile->descr}}</p>
    </div>

    <div class="col-12">
        <div class="row">

            <div class="col-4">
                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">الطلبات الجديدة </h5>
                        <p class="card-text">{{$ord}}</p>
                        <a href="{{route('user.neworder')}}" class="btn btn-info">عرض الطلبات </a>

                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">الطلبات </h5>
                        <p class="card-text">{{$dord}}</p>
                        <a href="{{route('user.myorder')}}" class="btn btn-info">عرض الطلبات </a>


                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">طلبات اليوم  </h5>
                        <p class="card-text">{{$doyord}}</p>
                        <a href="{{route('user.myorder')}}" class="btn btn-info">عرض الطلبات </a>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
@endsection
