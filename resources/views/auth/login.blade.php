<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link href="/css/login-style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="hero">
		<div class="intro">FITNESS-GYM</div>
		<div class="admin-login">
			<div class="head">@yield('head')</div>
			<div class="admin-login-col-1">
				<img src="/image/logo.png" alt=""/>
				<br><br>
				<b>FITNESS-GYM</b>
			</div>
			@yield('content')
		</div>
	</div>
</body>
</html>
