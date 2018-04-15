@extends("admin.layouts.app")

@section("mycss")
<style>

</style>
@endsection

@section("content")	
<section class="content-header">
    <h1>添加用户
        <small>...</small></h1>
    <ol class="breadcrumb">
        <li>
            <a>
                <i class="fa fa-dashboard"></i>修改用户</a>
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">修改用户</h3></div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="javascript:void(0);" onsubmit="return edituser();">
                    <div class="box-body">
                        <div class="form-group">
                            <label>用户名</label>
                            <input type="text" class="form-control" id="username" placeholder="请输入用户名" value="{{$user->username}}"></div>
                        <div class="form-group">
                            <label>真实姓名</label>
                            <input type="text" class="form-control" id="realname" placeholder="请输入真实姓名" value="{{$user->realname}}"></div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">用户邮箱</label>
                            <input type="email" class="form-control" id="email" placeholder="请输入邮箱地址" value="{{$user->email}}"></div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">密码</label>
                            <input type="password" class="form-control" id="pwd" placeholder="请输入密码"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" id="edit">修改</button>
                    </div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</section>


@endsection


@section("myjs")
<script>
$("edit").click() = edituser();

 function edituser(){
        var sUserName = $("#username").val();
        var sRealName = $("#realname").val();
        var sEmail = $("#email").val();
        var sPassword = $("#pwd").val();

          $.ajax({ 
          url:'/api/user/edit',
          type:"POST",
          cache: false,
          dataType: 'JSON',
          data:{ 
            id: {{$user->u_id}},
            username: sUserName,
            realname: sRealName,
            email: sEmail,
            password: sPassword
          },
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          success:function(data) {
          if(!data['status']){
                alert(data['message']);
                    location.pathname='/admin/user/index';
                }else{
                    alert(data['message']);
                    return false;
                }
            
			},
			error:function() { 
				//系统错误
				console.log('系统错误');
			}
		});
}
</script>
@endsection