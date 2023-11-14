<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Tunas Operasi Prima</title>
	<link rel="shortcut icon" href="{{ asset('TOP.ico') }}">
	<!-- <link href="{{ asset('login.css') }}" rel="stylesheet"> -->

	<!-- css lokal -->
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
<!-- Navigation Bar -->
	<div>
		<nav>
	      <div>
	        <a>
	          <img src="navbar.png" alt="Logo" style="height: 30px;">
	        </a>
	        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	          <div class="navbar-nav">
	            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
	            <a class="nav-item nav-link" href="#">Service</a>
	            <a class="nav-item nav-link" href="#">Company</a>
	            <a class="nav-item nav-link" href="#">Blog</a>
	            <a class="nav-item nav-link" href="#">Sign In</a>
	          </div>
	        </div>
	      </div>
	    </nav>
	</div>
<!-- Form Input -->
	<div class="login-container">
	        <form action="/login" method="post">
	            <div class="form-group">
	                <label for="email">Email:</label>
	                <input type="email" id="email" name="email" required>
	            </div>

	            <div class="form-group">
	                <label for="password">Password:</label>
	                <input type="password" id="password" name="password" required>
	            </div>

	            <button type="submit">Log In</button>
	        </form>

	        <div class="login-links">
	            <a href="/register">Don't have an account?</a>
	            <a href="/forgot-password">Forgot Password?</a>
	        </div>
	</div>

</body>
</html>