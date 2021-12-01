<!DOCTYPE html>
<html>
<head>
	<title>PWB-Register</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container h-100 d-flex justify-content-center">
    	<div class="jumbotron my-auto">
			<div class="row">
				<div class="col-md-12 col-xs-2 text-center login-panel" style="padding-bottom: 1%; padding-top: 1%;">
					<div class="col-md-12 col-xs-12" style="margin-bottom: 5%;">
						<h1>Register</h1>
					</div>
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<img src="./images/loginlogo.png" style="height: 100%; width: 100%;">
						</div>
						<div class="col-md-8 col-xs-8">
							<form method="POST">
								<div class="col-md-12 col-xs-8"> 
									<div class="input-group LoginForm">
										<div class="input-group-pretent">
											<span class="input-group-text">@</span>
										</div>
										<input class="form-control " type="email" name="Email" placeholder="Email" required="">
									</div>
									<div class="input-group LoginForm">
										<div class="input-group-pretent">
											<span class="input-group-text">@</span>
										</div>
										<input class="form-control " type="text" name="Username" placeholder="Username" required="">
									</div>
									<div class="input-group LoginForm">
										<div class="input-group-pretent">
											<span class="input-group-text">@</span>
										</div>
										<input class="form-control " type="password" name="Password" placeholder="Password" required="">
									</div>
									<div class="input-group LoginForm">
										<div class="input-group-pretent">
											<span class="input-group-text">@</span>
										</div>
										<input class="form-control " type="password" name="SecPassword" placeholder="Repeat password" required="">
									</div>
									<button type="submit" name="Register" class="btn btn-primary btn-block LoginForm">Register</button>
									<a href="login.php"><h4>Already have an account?</h4></a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


		<!-- <script type="text/javascript">
			function WrongPassword() {
					$.notify({
						icon: 'glyphicon glyphicon-warning-sign',
						title: 'Wrong password!',
						message: 'Make sure your passwords are the same.'
					}, {
						type: 'danger'
					})
				}

			function User() {
					$.notify({
						icon: 'glyphicon glyphicon-warning-sign',
						title: 'Username or email already taken!',
						message: 'Please choose another username or email.'
					}, {
						type: 'danger'
					})
				}

			function RecordCreated() {
					$.notify({
						icon: 'glyphicon glyphicon-warning-sign',
						title: 'Record created!',
						message: 'Please login.'
					}, {
						type: 'success'
					})
				}	
		</script> -->

	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php

	
	if (isset($_POST['Register'])) {
		$username = $_POST['Username'];
		$password = md5($_POST['Password']);
		$SecPassword = md5($_POST['SecPassword']);
		$email = $_POST['Email'];
		$connection = new mysqli("localhost", "root", "", "pwb");
		$CheckUsername = "SELECT username FROM users WHERE username='$username'";
		$CheckEmail = "SELECT email FROM users WHERE email='$email'";
		$sql = "INSERT INTO users (username, password, email)VALUES ('$username', '$password', '$email')";
		$ResultUsername = $connection->query($CheckUsername);
		$ResultEmail = $connection->query($CheckEmail);
		

		if ($ResultUsername->num_rows > 0 or $ResultEmail->num_rows > 0) {
			// echo "<script>User()</script>";
		} elseif($ResultUsername->num_rows == 0 and $ResultEmail->num_rows == 0) {
  			if ($password == $SecPassword) {
  				// echo "<script>RecordCreated()</script>";
  				// $restult = $connection->query($sql);
  			}else {
  				// echo "<script>WrongPassword()</script>";
  			}
		}
	}
?>


</body>
</html>