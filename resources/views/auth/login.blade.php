@extends('layouts.app')

@section('content')
<div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          {{-- <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"> --}}
          <p class="p-t-35">Sign into your account</p>
          <!-- START Login Form -->
             <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Login</label>
              <div class="controls">
                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                <!-- <input type="text" name="username" placeholder="User Name" class="form-control" required> -->
              </div>
            </div>
             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input type="password" class="form-control" name="password" placeholder="Credentials" required>
              </div>
            </div>
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6 no-padding">
                <div class="checkbox ">
                  <input type="checkbox" value="1" id="checkbox1">
                  <label for="checkbox1">Keep Me Signed in</label>
                </div>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn btn-link text-info" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
               {{--  <a href="#" class="text-info small">Help? Contact Support</a> --}}
              </div>
            </div>
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
          </form>
          <!--END Login Form-->
          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
              <div class="col-sm-3 col-md-2 no-padding">
{{--                 <img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60"> --}}
              </div>
             
            </div>
          </div>
        </div>
      </div>

@endsection
