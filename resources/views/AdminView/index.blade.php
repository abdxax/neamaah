@extends('layouts.admin')

@section('contac')
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-12 text-center">
                <h3>ملخص </h3>
            </div>
            <div class="col-5 cardadm">

                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">عدد الجمعيات </h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">{{$ch}}</p>

                    </div>
                </div>

            </div>

            <div class="col-5 cardadm">

                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title">عدد الطلبات </h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">{{$ord}}</p>

                    </div>
                </div>

            </div>



        </div>
    </div>

@endsection
