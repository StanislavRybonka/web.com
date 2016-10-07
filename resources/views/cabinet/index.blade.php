@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if(Auth::user()->role)
                            <a href="{{ route('admin.index') }}">
                                <i class="glyphicon glyphicon-home"></i> Admin
                            </a>
                        @endif
                            <a href="{{ route('profile.index') }}">
                                <i class="glyphicon glyphicon-home"></i> Profile
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
