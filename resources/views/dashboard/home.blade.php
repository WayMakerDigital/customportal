@extends('master')
@include('dashboard.navbar')
@section('content')

 <!-- Dashboard Counts Section-->
    <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="{{$customer['id'] }}"><i class="icon-home"></i>Dashboard</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Account Settings</a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="/dashboard/{{$customer['id']}}/details">Records</a></li>
                <li><a href="/dashboard/{{$customer['id']}}/shipping">Shipping</a></li>
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
                    <div class="number">{{$customer['first_name']}}</div>
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
                    <div class="number">{{$customer['last_name']}}</div>
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
                    <div class="number">{{$customer['username']}}</div>
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
                    <div class="number">{{$customer['orders_count']}}</div>
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
                      <div class="badge badge-rounded bg-green">4 New</div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item d-flex align-items-center">
                        <div class="image"></div>
                        <div class="text" style="margin-right:25px;">
                            <h3 class="h5"><strong>Agile Business Analyst Bootcamp</strong></h3></a></div><br/>
                            <div class="row"><button class="btn btn-primary btn-sm"><a href="https://waymakerlearning.com/courses/agile-business-analyst-bootcamp/" target="_blank">Take Course</a></button></div>
                      </div>
                      <div class="item d-flex align-items-center">
                         <div class="image"></div>
                        <div class="text" style="margin-right:25px;">
                            <h3 class="h5"><strong>Prince 2 Foundation Course</strong></h3></a></div>
                            <div class="row"><button class="btn btn-primary btn-sm"><a href="https://waymakerlearning.com/courses/prince2-foundation-course/" target="_blank">Take Course</a></button></div>
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"></div>
                        <div class="text" style="margin-right:20px;">
                            <h3 class="h5"><strong>Professional Diploma in Digital Selling</strong></h3></a></div>
                           <div class="row"><button class="btn btn-primary btn-sm"><a href="https://waymakerlearning.com/courses/professional-diploma-in-digital-selling/" target="_blank">Take Course</a></button></div>
                      </div>
                      <div class="item d-flex align-items-center">
                         <div class="image"></div>
                        <div class="text" style="margin-right:15px;">
                            <h3 class="h5"><strong>Professional Diploma in Digital Marketing</strong></h3></a></div>
                            <div class="row"><button class="btn btn-primary btn-sm"><a href="https://waymakerlearning.com/courses/professional-diploma-digital-marketing/" target="_blank">Take Course</a></button></div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
 @endsection




