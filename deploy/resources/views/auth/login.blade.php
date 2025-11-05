
<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>Dashboard Login > Thornton Lodge</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('/Adminassets/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/Adminassets/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('/Adminassets/assets/vendor/linearicons/style.css')}}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('/Adminassets/assets/css/main.css')}}">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your room -->
	<link rel="stylesheet" href="{{asset('/Adminassets/assets/css/demo.css')}}">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
</head>
<body>
<!-- WRAPPER -->
<div id="wrapper">
	<div class="vertical-align-wrap">
		<div class="vertical-align-middle">
			<div class="auth-box ">
				<div class="left">
					<div class="content">
						<div class="header">
							<p class="lead">Login to your account</p>
						</div>
						<form class="form-auth-small" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="signin-email" class="control-label sr-only">Email</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">Password</label>
								<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
							<div class="form-group clearfix">
								<label class="fancy-checkbox element-left">
									<input type="checkbox" class="ace" name="remember" {{ old('remember') ? 'checked' : '' }}>
									<span>Remember me</span>
								</label>
							</div>
							<div class="form-group clearfix">
								@include('inc.messages')
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							<div class="bottom">
								<span class="helper-text"><i class="fa fa-lock"></i>
									<!--<a href="{{ route('password.request') }}">
										<i class="ace-icon fa fa-arrow-left"></i>
										I forgot my password
									</a> -->
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="right">
					<div class="overlay"></div>
					<div class="content text">
						<div class="logo text-center"><img width="50%" src="{{asset('/images/logo.png')}}" alt="Logo"></div>
						<h1 class="heading">Welcome to Thornton Lodge Dashboard</h1>
						<p>Developed by <a href="http://www.adameveandapple.co.uk/" style="color:greenyellow">Adameveandapple</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- END WRAPPER -->

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0484'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>









