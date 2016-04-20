@extends('layouts.app')

@section('title')
    Kuesioner
@endsection

@section('content')
<div class="container" width="1200px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Home
                    <br>
                    <a href="{{ url('responden/create') }}" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>Lanjut 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
