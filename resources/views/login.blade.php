<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
 
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script src="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap') }}" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/login.css') }}">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="{{url('/login')}}" method="POST">
			<h1 style="margin-bottom: 1rem;">Sign Up</h1>
			<span>Daftarkan Akun Anda Disini</span>
			<input type="text" name="username" id="usernameup" placeholder="Username" />
            <input type="text" name="email" id="email" placeholder=" Email" />
			<input type="password" name="passwordup" id="passwordup" placeholder="Password" />
			<div style="display: flex;">
				<input type="checkbox" name="show" class="form-check-input" onclick="showPassUp()">
				<label for="show" class="form-check-label text-center" style="font-size: 12px; white-space: nowrap; margin-left: 3px; margin-top: 6px;">Show password</label>
			</div>
			<button type="submit" name="signup">Sign Up</button>
			<span style="color: red; margin-top: 0.3rem;"><?= (isset($errorS)) ? $errorS:"" ?></span>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="GET">
			<h1 style="margin-bottom: 1rem;">Sign In</h1>
			<span>Sign In dengan Username dan Password</span>
			<input type="text" name="username" id="username" placeholder="Username" />
            <input type="password" name="passwordin" id="passwordin" placeholder="Password" />
            <div style="display: flex;">
				<input type="checkbox" name="show" class="form-check-input" onclick="showPassIn()">
				<label for="show" class="form-check-label text-center" style="font-size: 12px; white-space: nowrap; margin-left: 3px; margin-top: 6px;">Show password</label>
			</div>
			<button type="submit" name="signin">Sign In</button>
			<span style="color: red; margin-top: 0.3rem;"><?= (isset($errorNS)) ? $errorNS:"" ?></span>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Sign Up</h1>
				<p>Mulailah perjalanan anda dengan kami. Buat akun anda disini.</p>
				<button class="ghost" id="signin">« Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Sign In</h1>
				<p>Sign In menggunakan akun anda yang telah terdaftar.</p>
				<button class="ghost" id="signup">Sign up »</button>
			</div>
		</div>
	</div>
</div>
</body>
<script src="{{url('JS/login.js')}}"></script>
</html>