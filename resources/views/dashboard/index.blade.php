@extends('master')
@include('dashboard.navbar')
@section('content')

 <!-- Dashboard Counts Section-->
 @foreach($results as $result)
    <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href=""><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Account Settings</a>
              <ul id="dashvariants" class="collapse list-unstyled">
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
                    <div class="number">{{$result['first_name']}}</div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Last<br>Name</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number">{{$result['last_name']}}</div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>User<br>Name</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number">{{$result['username']}}</div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Courses<br>Bought</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number">{{$result['orders_count']}}</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

            <div class="container-fluid">
              <div class="row">
                <!-- Trending Articles-->
                <div class="col-lg-6">
                  <div class="articles card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Trending Courses</h2>
                      <div class="badge badge-rounded bg-green">4 New       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item d-flex align-items-center">
                        <div class="image"></div>
                        <div class="text" style="margin-right:13px;"><a href="#">
                            <h3 class="h5"><strong>Agile Business Analyst Bootcamp</strong></h3></a></div>
                            <input id="login" type="submit" value="Take Course" class="btn btn-primary btn-sm">
                      </div>
                      <div class="item d-flex align-items-center">
                         <div class="image"></div>
                        <div class="text"><a href="#">
                            <h3 class="h5"><strong>Digital Marketing Professional</strong><small>Price: N50,000</small></h3></a></div>
                            <input id="login" type="submit" value="Take Course" class="btn btn-primary btn-sm">
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"></div>
                        <div class="text" style="margin-right:13px;"><a href="#">
                            <h3 class="h5"><strong>Agile Business Analyst Bootcamp</strong></h3></a></div>
                            <input id="login" type="submit" value="Take Course" class="btn btn-primary btn-sm">
                      </div>
                      <div class="item d-flex align-items-center">
                         <div class="image"></div>
                        <div class="text" style="margin-right:13px;"><a href="#">
                            <h3 class="h5"><strong>Agile Business Analyst Bootcamp</strong></h3></a></div>
                            <input id="login" type="submit" value="Take Course" class="btn btn-primary btn-sm">
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"></div>
                        <div class="text" style="margin-right:13px;"><a href="#">
                            <h3 class="h5"><strong>Agile Business Analyst Bootcamp</strong></h3></a></div>
                            <input id="login" type="submit" value="Take Course" class="btn btn-primary btn-sm">
                      </div>>
                      </div>
                    </div>
                  </div>
                </div>
          @endforeach
 @endsection




