<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themedesigner.in/demo/myadmin/myadmin/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2016 09:05:05 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/admin/images/favicon.png">
<title>My Admin - is a responsive admin template</title>
<!-- Bootstrap Core CSS -->
<link href="{{url('/')}}/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="{{url('/')}}/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="{{url('/')}}/admin/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{url('/')}}/admin/css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="index.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Admin</span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        {{--<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i> <span class="badge badge-xs badge-warning">5</span></a>--}}
          {{--<ul class="dropdown-menu nicescroll mailbox">--}}
            {{--<li>--}}
              {{--<div class="drop-title">You have 4 new messages</div>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<div class="message-center"> <a href="#">--}}
                {{--<div class="user-img"> <img src="{{url('/')}}/admin/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>--}}
                {{--<div class="mail-contnet">--}}
                  {{--<h5>Pavan kumar</h5>--}}
                  {{--<span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>--}}
                {{--</a> <a href="#">--}}
                {{--<div class="user-img"> <img src="{{url('/')}}/admin/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>--}}
                {{--<div class="mail-contnet">--}}
                  {{--<h5>Sonu Nigam</h5>--}}
                  {{--<span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>--}}
                {{--</a> <a href="#">--}}
                {{--<div class="user-img"> <img src="{{url('/')}}/admin/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>--}}
                {{--<div class="mail-contnet">--}}
                  {{--<h5>Arijit Sinh</h5>--}}
                  {{--<span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>--}}
                {{--</a> <a href="#">--}}
                {{--<div class="user-img"> <img src="{{url('/')}}/admin/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>--}}
                {{--<div class="mail-contnet">--}}
                  {{--<h5>Pavan kumar</h5>--}}
                  {{--<span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>--}}
                {{--</a> </div>--}}
            {{--</li>--}}
            {{--<li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> --}}
                {{--<i class="fa fa-angle-right"></i> </a></li>--}}
          {{--</ul>--}}
          {{--<!-- /.dropdown-messages -->--}}
        {{--</li>--}}
        <!-- /.dropdown -->
        {{----}}
        {{--<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i> <span class="badge badge-xs badge-danger">5</span></a>--}}
          {{--<ul class="dropdown-menu dropdown-tasks">--}}
            {{--<li> <a href="#">--}}
              {{--<div>--}}
                {{--<p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>--}}
                {{--<div class="progress progress-striped active">--}}
                  {{--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a href="#">--}}
              {{--<div>--}}
                {{--<p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>--}}
                {{--<div class="progress progress-striped active">--}}
                  {{--<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a href="#">--}}
              {{--<div>--}}
                {{--<p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>--}}
                {{--<div class="progress progress-striped active">--}}
                  {{--<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a href="#">--}}
              {{--<div>--}}
                {{--<p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>--}}
                {{--<div class="progress progress-striped active">--}}
                  {{--<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>--}}
          {{--</ul>--}}
          {{--<!-- /.dropdown-tasks -->--}}
        {{--</li>--}}
        {{--<!-- /.dropdown -->--}}
        {{--<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-bell"></i> <span class="badge badge-xs badge-info">5</span></a>--}}
          {{--<ul class="dropdown-menu dropdown-alerts">--}}
            {{--<li> <a href="#">--}}
              {{--<div> <i class="ti-comments fa-fw"></i> New Comment <span class="pull-right text-muted small">4 minutes ago</span> </div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a href="#">--}}
              {{--<div> <i class="ti-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span> </div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a href="#">--}}
              {{--<div> <i class="ti-email fa-fw"></i> Message Sent <span class="pull-right text-muted small">4 minutes ago</span> </div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a href="#">--}}
              {{--<div> <i class="ti-pencil-alt fa-fw"></i> New Task <span class="pull-right text-muted small">4 minutes ago</span> </div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a href="#">--}}
              {{--<div> <i class="ti-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span> </div>--}}
              {{--</a> </li>--}}
            {{--<li class="divider"></li>--}}
            {{--<li> <a class="text-center" href="#"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </li>--}}
          {{--</ul>--}}
          {{--<!-- /.dropdown-alerts -->--}}
        {{--</li>--}}
        {{----}}
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
        <li>
          <form role="search" class="app-search hidden-xs">
            <input type="text" placeholder="Search..." class="form-control">
            <a href="#"><i class="fa fa-search"></i></a>
          </form>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{url('/')}}/admin/images/users/hritik.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Maruti</b> </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
  <div class="navbar-default sidebar nicescroll" role="navigation">
    <div class="sidebar-nav navbar-collapse ">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
          <!-- /input-group -->
        </li>
        <li class="nav-small-cap">Main Menu</li>
        <ul class="nav nav-second-level">
            <li> <a href="{{URL::TO('site-admin')}}">Dashboard</a> </li>
          </ul>
        <ul class="nav nav-second-level">
            <li><a href="{{URL::TO('table')}}">Quotation</a></li>
          </ul>

      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-12">
          <h4 class="page-title">Welcome to My Admin</h4>
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Dashboard 2</li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-warning pull-right m-t-20">Daily</span>
              <h2 class="m-b-0 m-t-0 counter">150</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline7"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-success pull-right m-t-20">Weekly</span>
              <h2 class="m-b-0 m-t-0 counter">200</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline8"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-info pull-right m-t-20">Monthly</span>
              <h2 class="m-b-0 m-t-0 counter">220</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline9"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="white-box">
            <div class="text-left"><span class="badge badge-purple pull-right m-t-20">Yearly</span>
              <h2 class="m-b-0 m-t-0 counter">120</h2>
              <p class="text-muted m-b-25">Increase Sales</p>
              <div class="chart-box">
                <div id="sparkline10"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-md-9">
          <div class="white-box">
            <div id="morris-bar-chart" style="height: 380px;"></div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
          <div class="row">
            <div class="col-lg-12">
              <div class="white-box">
                <div class="bar-widget">
                  <div class="table-box">
                    <div class="cell text-left">
                      <div id="sparkline1"></div>
                    </div>
                    <div class="table-detail text-right">
                      <h2 class="m-t-0 m-b-5 font-light counter">3506</h2>
                      <h5 class="text-muted m-b-0 m-t-0">Sales</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="white-box">
                <div class="bar-widget">
                  <div class="table-box">
                    <div class="cell text-left">
                      <div id="sparkline2"></div>
                    </div>
                    <div class="table-detail text-right">
                      <h2 class="m-t-0 m-b-5 font-light">18% Total</h2>
                      <h5 class="text-muted m-b-0 m-t-0">Visitors</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
          <div class="row">
            <div class="col-lg-12">
              <div class="white-box">
                <div class="bar-widget">
                  <div class="table-box">
                    <div class="cell text-left">
                      <div id="sparkline4"></div>
                    </div>
                    <div class="table-detail text-right">
                      <h2 class="m-t-0 m-b-5 font-light counter">2547</h2>
                      <h5 class="text-muted m-b-0 m-t-0">clicks</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="white-box">
                <div class="bar-widget">
                  <div class="table-box">
                    <div class="cell text-left">
                      <div id="sparkline6"></div>
                    </div>
                    <div class="cell text-right">
                      <h2 class="m-t-0 m-b-5 font-light counter">1354</h2>
                      <h5 class="text-muted m-b-0 m-t-0">Views</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!--row -->
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-12">
          <div class="white-box">
            <h3>Browser Stats</h3>
            <ul class="basic-list">
              <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
              <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
              <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
              <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
              <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12">
          <div class="white-box">
            <div class="user-bg"> <img src="{{url('/')}}/admin/images/large/img1.jpg" alt="user" style="100%">
              <div class="overlay-box">
                <div class="user-content"> <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="images/users/genu.jpg"></a>
                  <h4 class="text-white">User Name</h4>
                  <h5 class="text-white">info@myadmin.com</h5>
                </div>
              </div>
            </div>
            <div class="user-btm-box">
              <div class="col-md-4 col-sm-4 text-center">
                <p class="text-purple"><i class="ti-facebook"></i></p>
                <h1>258</h1>
              </div>
              <div class="col-md-4 col-sm-4 text-center">
                <p class="text-blue"><i class="ti-twitter"></i></p>
                <h1>125</h1>
              </div>
              <div class="col-md-4 col-sm-4 text-center">
                <p class="text-danger"><i class="ti-dribbble"></i></p>
                <h1>556</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12">
          <div class="white-box">
            <h3>Activity</h3>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="images/users/genu.jpg"> </div>
                <div class="sl-right">
                  <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                  <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="images/users/sonu.jpg"> </div>
                <div class="sl-right">
                  <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                  <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="images/users/ritesh.jpg"> </div>
                <div class="sl-right">
                  <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                  <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left"> <img class="img-circle" alt="user" src="images/users/govinda.jpg"> </div>
                <div class="sl-right">
                  <div><a class="text-info" href="#">John Doe</a> <span class="sl-date">5 minutes ago</span></div>
                  <p>assign a new task <a href="#" class="text-info"> Design weblayout</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ row -->
    </div>
    <!-- /.container-fluid -->
  </div>
 
  <!-- /#page-wrapper -->
    <footer class="footer text-center"> 2016 &copy; Myadmin brought to you by themedesigner.in </footer>
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{url('/')}}/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('/')}}/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('/')}}/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!--Nice scroll JavaScript -->
<script src="{{url('/')}}/admin/js/jquery.nicescroll.js"></script>
<!--Morris JavaScript -->
<script src="{{url('/')}}/admin/bower_components/raphael/raphael-min.js"></script>
<script src="{{url('/')}}/admin/bower_components/morrisjs/morris.js"></script>
<!--Wave Effects -->
<script src="{{url('/')}}/admin/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('/')}}/admin/js/myadmin.js"></script>
<script src="{{url('/')}}/admin/js/dashboard2.js"></script>
<script src="{{url('/')}}/admin/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{{url('/')}}/admin/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
</body>

<!-- Mirrored from themedesigner.in/demo/myadmin/myadmin/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 May 2016 09:05:10 GMT -->
</html>
