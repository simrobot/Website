<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta name="csrf-token" content="{{ csrf_token() }}">     -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="{{asset('/vendor/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <script>
        $.ajax({ 
			url:'http://localhost:8080/SMS4/encodeSMS4',
			type:"POST",
			cache: false,
			dataType: 'JSON',
			// headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data:{ 
				str: "simrobot",
				key: "tfxqJoUXWXeeScdQrLbHPYJtmWDNRF"
			},
			success:function(data) {

				// status=0 操作成功
				if(!data['status']){
					alert(data['message']);
					location.pathname='/admin';
				}else{
					alert(data['message']);
				}
				
			},
			error:function() { 
				//系统错误
				console.log('系统错误');
			}
		});
    </script>
</body>
</html>