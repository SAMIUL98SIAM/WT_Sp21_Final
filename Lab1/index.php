
<html>



<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['u_name'] ;
		$pass = $_POST['u_pass'] ;
		if($name=="Siam" && $pass == "1234")
		{
			setcookie("u_name",$name,time()+120);
			header("location: dashbrd.php");
		}
	}
?>




	<head>
	</head>
	<body>
		
		
		<div>
		
			<form action="" method="POST">
				<table align="center">
					<tr>
						<td><span>Username:</span> </td>
						<td><input type="text"  placeholder="username" name="u_name">
						</td>
					</tr>
					<tr>
						<td><span>Password: </span></td>
						<td><input type="password" placeholder="password"  name="u_pass">
						</td>
					</tr>
					<tr>
						<td colspan="3" align="right"><input type="submit"  value="Login" name="login">
					</tr>
				</table>
			</form>
		</div>
		
		
	
	</body>
</html>