<!-- 左边导航栏（开始） -->
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
</aside>
<!-- 左边导航栏（结束） -->