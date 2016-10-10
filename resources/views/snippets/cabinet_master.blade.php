@extends('layouts.base_master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <nav class="navbar navbar-default navbar-fixed-side">
                    <ul>
                        @if(Auth::user()->role)
                            <li> <a href="{{ route('admin.index') }}">
                                <i class="glyphicon glyphicon-home"></i> Admin
                            </a>   </li>
                        @endif
                        <li>
                        <a href="{{ route('profile.index') }}">
                            <i class="glyphicon glyphicon-home"></i> Profile
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
            @yield('cabinet_content')
        </div>
    </div>
@endsection
