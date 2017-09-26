@extends('master')
@include('dashboard.navbar')
@section('content')
   <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="/dashboard/{{$customer['id']}}"><i class="icon-home"></i>Dashboard</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Account Settings</a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="/dashboard/{{$customer['id']}}/details">Records</a></li>
                <li><a href="/dashboard/{{$customer['id']}}/shipping">Shipping</a></li>
                <li><a href="/dashboard/{{$customer['id']}}/courses">Courses</a></li>
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
                     </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Details</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="/dashboard/{{$customer['id']}}/details" method="post">
                       {{csrf_field()}}
                       {{method_field('PUT')}}

                     @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach

                   @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                   @endif
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Name</label>
                          <div class="col-sm-9">
                         <input type="text" name="firstname" value="{{$customer['first_name']}}" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lastname" value="{{$customer['last_name']}}" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" value="{{$customer['username']}}" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" value="{{$customer['email']}}" name="password" class="form-control">
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
@endsection