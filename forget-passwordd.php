<?php 
	$conn= mysqli_connect('localhost','root');
	if(isset($_POST['submit'])){
		$email= mysqli_real_escape_string($conn,$_POST['user']);
		$query= "select * from usertable1 where email='$email'";
		$run= mysqli_query($conn,$query);
		if(mysqli_num_rows($run)>0){
			$row = mysqli_fetch_array($run);
			$db_email= $row['email'];
			$db_id= $row['id'];
			$token= uniqid(md5(time()));
			$query="insert into password_reset(id,email,token)values(NULL,'$email','$token')";
			if(mysqli_query($conn,$query)){
				$to= $db_email;
				$subject= "Password reset link";
				$message= "Click <a href='https://YOUR_WEBSITE.com/reset.php?token=$token'>here</a> to reset your pwd";
				$headers = "MIME-Version: 1.0"."/r/n";
				$headers = "Content-type:text/html;charset=UTF-8"."/r/n";
				$headers = 'From:<demo@demo.com>'."/r/n";
				//mail($to,$subject,$message,$headers);
				$msg= "<div class='alert alert-success'>Password reset link has been sent to the email.</div>";
			}
		}
		else{
			$msg = "<div class='alert alert-danger'>User not found.</div>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Forgot password</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> Forgot password </h2>
				<form action="" method="post">
					<div class="form-group">
						Enter email:<input type="text" name="email" class="form-control" required>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>

				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>