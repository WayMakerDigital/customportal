@extends('master')
@include('dashboard.navbar')
@section('content')
 @foreach($results as $result)
   <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href=""><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Account Settings</a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="/dashboard/{{$result['id']}}/details">Records</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Billing</a></li>
                <li><a href="/dashboard/{{$result['id']}}/courses">Courses</a></li>
              </ul>
            </li>
        </nav>
         <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Personal Details</h2>
            </div>
          </header>
          <ul class="breadcrumb">
            <div class="container-fluid">
            </div>
          </ul>
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">All form elements</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" value="{{$result['first_name']}}" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" value="{{$result['last_name']}}" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" value="{{$result['username']}}" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" value="{{$result['email']}}" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                        </form>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>
                        </div>
                        </ul>

@endforeach                      
@endsection