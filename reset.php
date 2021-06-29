<?php 
	$conn= mysqli_connect('localhost','root','','largedata');
    
    if(isset($_GET['token'])){
    	$token = mysqli_real_escape_string($conn,$_GET['token']);
    	$query= "select * from password_reset where token='$token'";
    	$run= mysqli_query($conn,$query);
    	if(mysqli_num_rows($run)>0){
    		$row = mysqli_fetch_array($run);
    		$token = $row['token'];
    		$email = $row['email'];

    	}else{
    		header("location:login.php");
    	}	

}
    if(isset($_POST['submit'])){
    	$password = mysqli_real_escape_string($conn,$_POST['password']);
    	$confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
    	//$options = ['cost'=>11];
    	//$hashed = password_hash($password,PASSWORD_BCRYPT,$options);
    	if($password!=$confirmpassword){
    		$msg = "<div class='alert alert-danger'> Sorry,password didn't match.</div>";
    	}elseif(strlen($password)<6) {
    		$msg = "<div class='alert alert-danger'> Password must be more 6 characters long.</div>";
    	}else{
    		$query = "update usertable1 set password='$password' where name='$email'";
    		mysqli_query($conn,$query);
    		$query = "delete from password_reset where email='$email'";
    		mysqli_query($conn,$query);
    		$msg = "<div class='alert alert-success'>Password is updated.</div>";
    	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Reset password</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="login-box">
		   <div class="row">
			<div class="col-md-6 login-left">
				<h2> Reset password </h2>
				<form action="" method="post">

					<div class="form-group">
						Email:<input type="text" name="" value="<?php echo $email; ?>" class="form-control" readonly>
					</div>

					<div class="form-group">
						New Password:<input type="text" class="form-control" name="password">
					</div>

					<div class="form-group">
						Confirm Password:<input type="password"  class="form-control" name="confirmpassword">
					</div>

					<?php if(isset($msg)){echo $msg;}?>

					<div class="form-group">
					<button  class="btn btn-primary" name="submit">Reset Password</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

   
</body>
</html>