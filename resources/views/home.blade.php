@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 <h1>{{auth()->user()}}</h1>
                <div class="card-body">
                    @if (session('status'))
                        <h1>{{auth()->user()}}</h1>
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <h1>{{auth()->user()}}</h1>
                        </div>
                    @endif
                        <h1>{{auth()->user()}}</h1>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
