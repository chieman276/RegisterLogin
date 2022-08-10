<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
					<h2><b>Login</b> </h2>
				</div>
				<div class="panel-body">
					<form role="form" action="{{ route('postLogin') }}" method="post">
						@csrf
						<div class="form-group">
							@if (Session::has('success'))
							<div class="alert alert-danger">{{session::get('success')}}</div>
							@endif
							<div class="form-label-group">
								@if (Session::has('error_login_id'))
								<div class="alert alert-danger">{{session::get('error_login_id')}}</div>
								@endif
							</div>
						</div><!-- /.form-group -->
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Tên tài khoản" name="login_id" type="text"
									value="{{ old('login_id')}}">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('login_id') }}</p>
									@endif
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật Khẩu" name="password" type="password"
									value="{{ old('password')}}">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('password') }}</p>
									@endif
							</div>
							<br><br>
							<div>
								<button type="submit" style="width:400px" class="btn btn-primary"> Login </button>
							</div>
							<br>
							<div class="text-center p-t-115">
								<a style="width:200px" class="btn btn-success" href="{{route('register')}}">
									Register
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