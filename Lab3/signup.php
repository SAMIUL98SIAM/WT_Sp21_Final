<?php include 'main_header.php';
	require_once "controllers/Login_controller.php";
?>


<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
			<lebel><?php echo $err_name;?></lebel>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
			<lebel><?php echo $err_username;?></lebel>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="email" value="<?php echo $email;?>" class="form-control">
			<lebel><?php echo $err_email;?></lebel>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" value="<?php echo $password?>" class="form-control">
			<lebel><?php echo $err_password;?></lebel>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>