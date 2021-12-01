<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Login Page</title>
  </head>
  <body>
    <div class="container h-100 d-flex justify-content-center">
    	<div class="jumbotron my-auto">
			<div class="row">
				<div class="col-md-12 col-xs-2 text-center login-panel" style="padding-bottom: 1%; padding-top: 1%;">
					<div class="col-md-12 col-xs-12" style="margin-bottom: 5%;">
						<h1>Login</h1>
					</div>
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<img src="./images/loginlogo.png" style="height: 100%; width: 100%;">
						</div>
						<div class="col-md-8 col-xs-8">
							<form method="POST">
								<div class="col-md-12 col-xs-8"> 
									<div class="input-group">
										<div class="input-group-pretent">
											<span class="input-group-text">@</span>
										</div>
										<input class="form-control" type="text" name="Username" placeholder="Username" required="">
									</div>
									<div class="input-group" style="margin-top: 3%; margin-bottom: 3%;">
										<div class="input-group-pretent">
											<span class="input-group-text">@</span>
										</div>
										<input class="form-control" type="password" name="Password" placeholder="Password" required="">
									</div>
									<button type="submit" name="Login" class="btn btn-primary btn-block">Login</button>
									<a href="register.php"><h4>Don't have an account?</h4></a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<script src="bootstrap-notify.min.js"></script>
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  </body>
</html>

<?php  
	if (isset($_POST['Login'])) {
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Connection = new mysqli("localhost", "root", "", "pwb");
		$CheckUsername = "SELECT username FROM users WHERE username LIKE '$Username' AND password LIKE '$Password'";
		$Result = $Connection->query($CheckUsername);
		session_start();

		if ($Result->num_rows > 0) {
			$CookieName = "user";
			$CookieValue = "$Username";
			setcookie($CookieName, $CookieValue, time() + 3600, "");
			header("Location: http://localhost/passwordbox2.0/index.php?content=passwords");
		} else {
			# fout
		}
	}
?>

