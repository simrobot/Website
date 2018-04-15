<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SimRobot Studio</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/vendor/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/vendor/admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('/vendor/admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/vendor/admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/vendor/admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"></head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  
  <body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">
            <b>SR</b>A</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <b>SimRobot Studio</b>
          </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <!-- <span class="sr-only">Toggle navigation</span> -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span></a>
                <ul class="dropdown-menu">
                  <li class="header">你有 4 条新消息</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{asset('/vendor/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"></div>
                          <h4>关于实验室
                            <small>
                              <i class="fa fa-clock-o"></i>5 分钟</small></h4>
                          <p>实验室网站开发。。。</p>
                        </a>
                      </li>
                      <!-- end message --></ul>
                  </li>
                  <li class="footer">
                    <a href="#">查看所有消息</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('/vendor/admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">Kyle Liu</span></a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('/vendor/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    <p>Kyle Liu - Web Developer
                      <small>信息最后更新于2018年3月26日13:10:27</small></p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#">关注</a></div>
                      <div class="col-xs-4 text-center">
                        <a href="#">收藏</a></div>
                      <div class="col-xs-4 text-center">
                        <a href="#">朋友</a></div>
                    </div>
                    <!-- /.row --></li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">个人中心</a></div>
                    <div class="pull-right">
                      <a href="javascript:void(0)" class="btn btn-default btn-flat" id="loginout">退出登录</a></div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar">
                  <i class="fa fa-gears"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--===============================================- ->
      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('/vendor/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"></div>
            <div class="pull-left info">
              <p>Kyle Liu</p>
              <a href="#">
                <i class="fa fa-circle text-success"></i>Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="搜索...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">导航栏</li>
            <li>
              <a href="/admin">
                <i class="fa fa-home"></i>
                <span>首页</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-red">1</small>
                  <small class="label pull-right bg-blue">2</small></span>
              </a>
            </li>
            <!-- 系统设置（开始） -->
            <li class="treeview">
              <a href="#">
                <i class="fa  fa-gear"></i>
                <span>系统设置</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="">
                    <i class="fa fa-circle-o text-aqua"></i>系统设置</a>
                </li>
                <li>
                  <a href="">
                    <i class="fa fa-circle-o"></i>网站设置</a>
                </li>
                <li class="active">
                  <a href="">
                    <i class="fa fa-circle-o"></i>访问设置</a>
                </li>
                <li>
                  <a href="">
                    <i class="fa fa-circle-o"></i>流量设置</a>
                </li>
              </ul>
            </li>
            <!-- 系统设置（结束） -->
            <!-- 日志管理（开始） -->
            <li class="treeview">
              <a href="#">
                <i class="fa  fa-slideshare"></i>
                <span>日志记录</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">4</span></span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="">
                    <i class="fa fa-circle-o"></i>系统日志</a>
                </li>
                <li>
                  <a href="">
                    <i class="fa fa-circle-o"></i>访问日志</a>
                </li>
                <li>
                  <a href="">
                    <i class="fa fa-circle-o"></i>用户日志</a>
                </li>
              </ul>
            </li>
            <!-- 日志管理（结束） -->
            <!-- 用户管理（开始） -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>用户管理</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/admin/user/index">
                    <i class="fa fa-circle-o"></i>用户列表</a>
                </li>
                <li>
                  <a href="">
                    <i class="fa fa-circle-o"></i>角色列表</a>
                </li>
              </ul>
            </li>
            <!-- 用户管理（结束） --></ul>
        </section>
        <!-- /.sidebar --></aside>
      <!--===============================================- ->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>首页
            <small>...</small></h1>
          <ol class="breadcrumb">
            <li>
              <a>
                <i class="fa fa-dashboard"></i>首页</a>
            </li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">

          <!-- 提示条（开始） -->
          <div class="callout callout-info">
            <h4>提示</h4>
            <p>Add。。</p>
          </div>
          <!-- 提示条（结束） -->
          <!-- 计数模块（开始） -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['ACCESS_NUMBER_TOTAL'] }}</h3>
                  <p>网站总访问数量</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">详细信息
                  <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ $count['ACCESS_NUMBER_NOW_DAY'] }}</h3>
                  <p>今日访问数量</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">详细信息
                  <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $count['TOTAL_USER_NUMBER'] }}</h3>
                  <p>注册的用户</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">详细信息
                  <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ $count['ACCESS_NUMBER_TOTAL'] }}</h3>
                  <p>网站访问量</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">详细信息
                  <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- 计数模块（结束） -->
          

        </section>
        <!-- /.content --></div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b>1.0.1</div>
        <strong>Copyright &copy; 2014-2018
          <a href="https://github.com/simrobot">SimRobot Studio</a>.</strong>All rights reserved.</footer></div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="{{asset('/vendor/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('/vendor/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('/vendor/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('/vendor/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/vendor/admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/vendor/admin/dist/js/demo.js')}}"></script>
    <script>


	$(function(){
		$("#loginout").click(function(){
			loginout();
		})
	})

     function loginout(){
		
		$.ajax({ 
			url:'/api/user/loginout',
			type:"POST",
			cache: false,
			dataType: 'JSON',
			data:{ 
				email:'sEmail',
				password:'sPassword'
			},
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success:function(data) {
				// status=0 操作成功
				if(!data['status']){
					alert(data['message']);
					location.pathname='/admin/login';
				}else{
					// status !=0 操作失败
					alert(data['message']);
				}

			},
			error:function() { 
				//系统错误
				console.log('系统错误');
			}
		});

		return false;
	}
    </script>
  </body>

</html>