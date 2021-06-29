<!DOCTYPE html>
<html>
<head>
	<title>User login and registration</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> Login Here </h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						Name:<input type="text" name="urname" class="form-control" required>
					</div>
					<div class="form-group">
						Email:<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						Password:<input type="password" name="password" class="form-control" required>
					</div>

					<button type="submit" class="btn btn-primary">Login</button>
					<center>
						<a href="forget-password.php">Forgot Password?</a>
					</center>

				</form>
			</div>

			<div class="col-md-6 login-right">
				<h2> Register Here </h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						Name:<input type="text" name="urname" class="form-control" required>
					</div>
					<div class="form-group">
						Email:<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						Password:<input type="password" name="password" class="form-control" required>
					</div>

					<button type="submit" class="btn btn-primary" name="register" onsubmit ="runn()">Register</button>

				</form>
			</div>
		</div>
		</div>
	</div>
	<script type="text/javascript">
	function runn(){
		alert ("Your have registered yourself.");
	}
</script>
</body>
</html>