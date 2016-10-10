@extends('layouts.base_master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    <h3 class="text-center">Админка!</h3>
                    <a href="{{ route('admin.users.index') }}">
                        <i class="glyphicon glyphicon-home"></i> Пользователи
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
