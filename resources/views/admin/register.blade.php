<!DOCTYPE html>
<html>
    
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>SimRobot Registration</title>
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
	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('/vendor/admin/plugins/iCheck/square/blue.css')}}">
	<!-- LayUI -->
	<link rel="stylesheet" href="{{asset('/vendor/admin/plugins/layui/css/layui.css')}}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"></head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="{{asset('/vendor/admin/index2.html">
				<b>SimRobot</b>Studio</a>
		</div>
		<div class="register-box-body">
			<p class="login-box-msg">注册账号</p>
			<!-- <form action="" method=""> -->
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="用户名" id="username">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="邮箱" id="email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="密码" id="password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="确认密码" id="cpassword">
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<label>
								<input id="agree" type="checkbox">我同意条款
								<a href="#">条约</a></label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat" id="register">注册</button></div>
					<!-- /.col --></div>
			<!-- </form> -->
			<div class="social-auth-links text-center">
				<a class="btn btn-block btn-social btn-github">
					<i class="fa fa-github"></i>Sign in with GitHub</a>
			</div>
			<a href="/admin/login" class="text-center">我已经有账号了</a></div>
		<!-- /.form-box --></div>
	<!-- /.register-box -->
	<!-- jQuery 3 -->
	<script src="/vendor/admin/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- LayUI -->
	<script src="/vendor/admin/plugins/layui/layui.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="/vendor/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="/vendor/admin/plugins/iCheck/icheck.min.js"></script>
	<script>
	$(function() {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%'
			/* optional */
		});
		// 后台登录Ajax传输
		$('#register').click( function() {
			var sName = $("#username").val();
			var sEmail = $("#email").val();
			var sPassword = $("#password").val();
			var scPassword = $("#cpassword").val();
			var tAgree = $("#agree").prop('checked');
			
			// 前端开始检测
			// 检测是否统一条约
			if(!tAgree){
				alert("请同意条约！");
				return false;
			}
			// 检测用户名
			if(!sName){
				alert("请输入用户名！");
				return false;
			}
			// 检测邮箱
			if(!sEmail){
				alert("请输入邮箱！");
				return false;
			}
			// 检测密码
			if(sPassword.length < 6 ){
				alert("密码长度必须大于6位！");
				console.log(sPassword);
				return false;
			}
			$.ajax({ 
				url:'/api/user/register',
				type:"POST",
				cache: false,
				dataType: 'JSON',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data:{ 
					username: sName,
					password: sPassword,
					cpassword: scPassword,
					email: sEmail
				},
				success:function(data) {
					if(data["status"]){
						alert(data['message']);
                		location.pathname='/admin/user/index';
					}
					console.log(data);
				},
				error:function() { 
					console.log('系统错误');
				}
			});
		});
	});

	</script>
</body>

</html>