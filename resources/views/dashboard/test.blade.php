@extends('master')
@include('dashboard.navbar')
@section('content')
 @foreach($datas as $data)
    <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href=""><i class="icon-home"></i>Dashboard</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Account Settings</a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="">Records</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Billing</a></li>
                <li><a href="">Courses</a></li>
              </ul>
            </li>

        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>First<br>Name</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number">{{$data['billing_address']}}</div>
                  </div>
                </div>

@endforeach
@endsection