@extends('layouts.app')
@section('title')
Login
@endsection
<style type="text/css">
    .panel{
        border-radius: 10px;
        border:none;
    }
</style>

@section('content')
<div class="container">
    <div class="row" style="margin: 100px">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}" autocomplete="off">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">E-Mail Address</label>

                            <div class="col-md-1">
                                <input id="email" type="email" class="form-control" name="email" required placeholder="Type Your Email" autocomplete="off">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-2">
                                <input id="password" type="password" class="form-control" name="password" required style="width:250px; background: #FFF;" autocomplete="off">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"  style="margin-left: -108">Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1 col-md-offset-1">
                                <button type="submit" class="btn btn-warning" style="width: 100px; padding: 10px; font-size: 18px">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
