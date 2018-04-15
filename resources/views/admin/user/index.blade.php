@extends("admin.layouts.app")

@section("mycss")
<style>

</style>
@endsection

@section("content")	
<section class="content-header">
    <h1>用户管理
        <small>...</small></h1>
    <ol class="breadcrumb">
        <li>
            <a><i class="fa fa-dashboard"></i>用户列表</a>
        </li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
                <div class="box-header">
                    <a href="/admin/user/add"><button type="button" class="btn  btn-success">添加用户</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="userlist" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>用户名</th>
                                <th>邮箱</th>
                                <th>真实姓名</th>
                                <th>操作</th>
							</tr>
                        </thead>
                        <tbody>@foreach ($users as $user)
                            <tr>
                                <td>{{ $user->u_id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->realname }}</td>
                                <td>
                                    <a href="/admin/user/edit?id={{ $user->u_id }}"><button type="button" class="btn  btn-success">修改</button></a>
                                    <a href="/api/user/del?id={{ $user->u_id }}"><button type="button" class="btn  btn-danger">删除</button></a>
                                </td>
                                <tr>@endforeach</tfoot></table>
                </div>
                <!-- /.box-body -->
			</div>
            <!-- /.box -->
		</div>
        <!-- /.col -->
	</div>
    <!-- /.row -->
</section>

@endsection

@section("myjs")
<script>

</script>
@endsection