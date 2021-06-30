<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Blood In Need</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="{{asset('images/logo.png')}}"/>
	<!--style----->
	<style>
		body{
			font-family:poppins;
		}
	</style>
	</head>
<body>
    <section id="main">
        <nav>
            <!--logo--------------->
            <a href="#" class="logo">
                <img src="{{asset('images/logo.png')}}"/>
            </a>

            <!--navigation menu-------------->
            <ul class="menu">
                <li><a href="#main">Home</a></li>
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#aboutus">About US</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <!--Login button--------->
            <button id="login" class="login">Log In</button>
            </nav>
            <div class="container" id="container">
                <div class="form-container sign-up-container">

                    <form action="/user/save" method="post">                        @csrf
                    <h1>Create Account</h1>
                    <div class="social-container">

                    </div>
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="tel" name="phone" placeholder="Phone Number">
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
                            <h1>Blood In Need</h1>
                            <p>Already have account?</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Blood In Need</h1>
                            <p>Donate your blood for a reason, let the reason to be life</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
                </div>

            <!--content----------------->
	       <div class="content" id="contents">

        <div class="model">
            <img src="images/logo.png"/>
        </div>
        <!--text-------------->
        <div class="main-text">
            <h1>Donate! It is a bloody good job.</h1>
            <p>There is a hope of life to someone in your blood donation.</p>
        <!--btn------->
            <button type="button" id="test" class="register-btn">Register Here</button>
        </div>
        </div>
    </section>

    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>
