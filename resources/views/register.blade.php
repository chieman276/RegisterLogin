<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="text-center">
					<h2><b>Register</b> </h2>
				</div>
				<div class="panel-body">
					<form role="form" action="{{ route('register.store')}}" method="post">
						@csrf
						<div>
							@if (Session::has('success'))
							<div class="text text-success"><b>{{session::get('success')}}</b></div>
							@endif
							@if (Session::has('error'))
							<div class="text text-danger"><b>{{session::get('error')}}</b></div>
							@endif
						</div>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Họ Tên" type="text"
									value="{{ old('full_name')}}" name="full_name">
								@if ($errors->any())
								<p style="color:red">{{ $errors->first('full_name') }}</p>
								@endif
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Tên tài khoản" type="text"
									value="{{ old('login_id')}}" name="login_id">
								@if ($errors->any())
								<p style="color:red">{{ $errors->first('login_id') }}</p>
								@endif
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Số điện thoại" type="text"
									value="{{ old('phone')}}" name="phone">
								@if ($errors->any())
								<p style="color:red">{{ $errors->first('phone') }}</p>
								@endif
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="email" value="{{ old('email')}}"
									name="email">
								@if ($errors->any())
								<p style="color:red">{{ $errors->first('email') }}</p>
								@endif
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" type="password"
									value="{{ old('password')}}" name="password">
								@if ($errors->any())
								<p style="color:red">{{ $errors->first('password') }}</p>
								@endif
							</div>
							<div>
								<label> Trạng thái</label>
								<select name="status" class="form-control">
									<option value="1" @selected( old('status')=='1' )>Hiện</option>
									<option value="0" @selected( old('status')=='0' )>Ẩn</option>
								</select>
								@if ($errors->any())
								<p style="color:red">{{ $errors->first('status') }}</p>
								@endif
							</div>
							<br><br>
							<div>
								<button type="submit" style="width:400px" class="btn btn-primary"> Register </button>
							</div>
							<br>
							<div class="text-center p-t-115">
								<a style="width:200px" class="btn btn-success" href="{{route('login')}}">
									Login
								</a>
							</div>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>