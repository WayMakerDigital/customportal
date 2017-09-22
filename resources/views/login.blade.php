@extends('master')
@section('content')
<div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>WayMaker Learning</h1>
                  </div>
                  <p>E-learning Portal</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="{!! route('signin') !!}" id="login-form" method="post">
                  {{csrf_field()}}
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" placeholder="Username" class="input-material" required>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" placeholder="Password" class="input-material" required>
                    </div><input id="login" type="submit" value="Login" class="btn btn-primary">
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="/register" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
      </div>
    </div>
@endsection