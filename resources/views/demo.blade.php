@extends("admin.layouts.app")
@section("mycss")
<style>asd</style>	
@endsection
@section("content")	
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
	<!-- content -->
@endsection


@section("myjs")
<script>asd</script>
@endsection