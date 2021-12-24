@extends('auth.login')

@section('title','Fitness-GYM | MemberLogin')

@section('head','Member Login')

@section('content')
<div class="admin-login-col-2">
	<form id="login" class="input-group" method="POST" action="{{url('memberlogin')}}">
		@csrf
		<input id="email" type="email" placeholder="email/userid" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
             @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <input id="password" type="password" placeholder="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		<input type="checkbox" class="check-box" name=""><span><a href="">Remember Password</a></span><span class="fgt"><a href="#">Forgot Password</a></span>
		<br/>
		    {{session('error')}}
		<button type="submit" class="submit-btn">Login</button>
    </form>
</div>
@endsection