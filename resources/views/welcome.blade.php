<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Shop Log In</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="/user/save" method="post">

    @csrf
	<h1>Create Account</h1>
	<div class="social-container">

	</div>
	<input type="text" name="name" placeholder="Full Name">
	<input name="phone" placeholder="Phone Number">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="password" name="password" placeholder="Confirm Password">
	<button type="submit">SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="/user/check" method="POST">
        @csrf
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-google"></i></a>
	</div>
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<a href="#">Forgot Your Password</a>

	<button type="submit">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>My Shop</h1>
			<p>Already have account?</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>My Shop</h1>
			<p>Enter your details and start your shopping journey</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
