<?php include 'main_header.php';
	  require_once "controllers/Login_controller.php";
?>

<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
			<lebel><?php echo $err_username;?></lebel>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password"  value="<?php echo $password?>"  class="form-control">
			<lebel><?php echo $err_password;?></lebel>
		</div>
		<div class="form-group text-center">
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>