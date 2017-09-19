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
                    <h1>Waymaker Learning</h1>
                  </div>
                  <p>E-portal</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="{!! route('signup') !!}" method="post" id="register-form">
                  {{csrf_field()}}
                    <div class="form-group">
                      <input id="register-username" type="text" name="firstname" placeholder="First Name" required class="input-material">
                    </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="lastname" placeholder="Last Name" required class="input-material">
                    </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="username" placeholder="Username" required class="input-material">
                    </div>
                    <div class="form-group">
                      <input id="register-passowrd" type="password" name="password" placeholder="Password" required class="input-material">
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="email" placeholder="Email" required class="input-material">
                    </div>
                    <div class="form-group">
                    <select name="country" class="countries order-alpha form-control" id="countryId" >
                    <option value="">Select Country</option>
                    </select>
                   <select name="state" class="states order-alpha form-control" id="stateId">
                   <option value="">Select State</option>
                   </select>
                   <select name="city" class="cities order-alpha form-control" id="cityId">
                   <option value="">Select City</option>
                   </select>
                  </div>
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template">
                      <label for="license">I agree to the terms and policy</label>
                    </div>
                    <input id="register" type="submit" value="Register" class="btn btn-primary">
                  </form><small>Already have an account? </small><a href="/" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="//geodata.solutions/includes/countrystatecity.js"></script>
    @endsection