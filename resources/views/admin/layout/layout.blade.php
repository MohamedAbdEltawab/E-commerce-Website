<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {!! Html::style('admin/bootstrap/css/bootstrap.min.css')!!}
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  {!! Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}

  <!-- Theme style -->
   {!! Html::style('admin/dist/css/AdminLTE.min.css')!!}
 
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {!! Html::style('admin/dist/css/skins/_all-skins.min.css')!!}
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini">

<!-- ================= Start Header ============= -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Panel</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Control Panel</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
      
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="admin/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p></p>
                    </a>
                  </li>
                  <li>
                  </li>
                  <li>
                    
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                  <li>
                 
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                
                 
      
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->name}} - Web Developer
                 
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{url('/')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
<!-- ================= End Header ==================-->
<!-- ================= Start Sidebar ==================-->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ url('/adminpanel')}}">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('adminpanel/sitesetting')}}">
                <i class="fa fa-gear"></i>Site Settings</a>
            </li>
            
          </ul>
        </li>
          <!-- =============== Start Users List ============== -->
          @if(Auth::user()->admin_role === 1)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Users Control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('adminpanel/users')}}">
                <i class="fa fa-table"></i>All Users</a>
            </li>
            <li><a href="{{url('adminpanel/users/create')}}">
                <i class="fa fa-circle-o"></i> Add New User</a>
            </li>
             <li><a href="{{url('adminpanel/users')}}">
                <i class="fa fa-circle-o"></i> Edit User</a>
             </li>
          </ul>
         </li>
         @endif
          <!-- =============== End Users List ============== -->
          <!-- =============== Start Product Department ============== -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Products Control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/adminpanel/categories')}}">
                <i class="fa fa-table"></i>All Categories</a>
            </li>
            <li><a href="{{url('/adminpanel/categories/create')}}">
                <i class="fa fa-circle-o"></i> Add Category</a>
            </li>
             <li><a href="{{url('/adminpanel/categories')}}">
                <i class="fa fa-circle-o"></i> Edit Category</a>
             </li>
          </ul>
         </li>
          <!-- =============== End Product Department============== -->

          <!-- =============== Start Contact Us =================== -->
          <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope-o"></i> <span>Contact Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            
             <li><a href="{{url('adminpanel/allmessage')}}">
                <i class="fa fa-circle-o"></i> All Message</a>
             </li>
          </ul>
         </li>
          <!-- =============== End Contact Us =================== -->
          <!-- =============== Start Add Photo =================== -->
           <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i> <span>Photo Control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            
             <li><a href="{{url('adminpanel/photoslide')}}">
                <i class="fa fa-circle-o"></i>Slider Photos</a>
             </li>
          </ul>
         </li>
          <!-- =============== End Add Photo ================ -->
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


<!-- ================= End Sidebar ==================-->

<div class="content-wrapper">

@yield('content')

</div>



<!-- ================= Start Footer ==================-->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.11
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
<!-- ================= End Footer ==================-->
 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          
          
          
          
        </ul>
        

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            

            
          </div>
          

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
           
          </div>
          
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>


<!-- jQuery 2.2.3 -->
{!! Html::script('admin/plugins/jQuery/jquery-2.2.3.min.js')!!}

<!-- Bootstrap 3.3.6 -->
{!! Html::script('admin/bootstrap/js/bootstrap.min.js')!!}

<!-- FastClick -->
{!! Html::script('admin/plugins/fastclick/fastclick.js')!!}

<!-- AdminLTE App -->
{!! Html::script('admin/dist/js/app.min.js')!!}

<!-- Sparkline -->
{!! Html::script('admin/plugins/sparkline/jquery.sparkline.min.js')!!}

<!-- jvectormap -->
{!! Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}

{!! HtmL::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}

<!-- SlimScroll 1.3.0 -->
{!! Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js')!!}

<!-- ChartJS 1.0.1 -->
{!! Html::script('admin/plugins/chartjs/Chart.min.js')!!}

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- {!! Html::script('admin/dist/js/pages/dashboard2.js')!!} -->

<!-- AdminLTE for demo purposes -->
{!! Html::script('admin/dist/js/demo.js')!!}

@yield('footer')
</body>
</html>
