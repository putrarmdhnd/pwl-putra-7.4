@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body bg-green">
                <div class="col-md-12 text-center">
                    @if($user->roles_id==1)
                    <h4>Anda Login sebagai Admin</h4>
                    @else
                    <h4>Anda Login sebagai User</h4>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@stop
