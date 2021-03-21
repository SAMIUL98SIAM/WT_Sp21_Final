<?php
	$name="";
	$err_name="";
	$pass="";
	$err_pass="";
	$Error=false;
	$err_message="";
	$user=array("Siam"=>"1234","Fahad"=>"1234","Atowar"=>"1234");
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["name"])){
			$err_name="Username Needed";
			$Error = true;
		}
		else{
			$name = htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Needed";
			$Error = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		if(!$Error){
			$found=false;
			foreach($user as $n=>$p){
				if($n==$name && $p==$pass){
					
					header("Location: dashbrd.php");
				}
			}
			$err_message="Invalid username or password";		
		}
	}
?>

<html>
	<head>
    <style>
        .err-msg{
        color:red;
        font-size:16px;
        font-weight:bold;
        font-family:tahoma;
}
    </style>
		
	</head>
	<body>
		
		
		<div>
		
			
			<table align="center">
				<tr>
					<td colspan="3" align="center"><span class="err-msg"><?php echo $err_message;?></span></td>
				</tr>
			</table>
			<form action="" method="POST">
				<table align="center">
					<tr>
						<td><span>Username:</span> </td>
						<td><input type="text" value="<?php echo $name;?>" placeholder="username" name="name">
						<br><span class="err-msg"><?php echo $err_name;?></span>
						</td>
					</tr>
					<tr>
						<td><span>Password: </span></td>
						<td><input type="password" placeholder="password"  name="pass">
						<br><span class="err-msg"><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td colspan="3" align="right"><input type="submit"  value="Login" name="login">
					</tr>
				</table>
			</form>
		</div>
		
		
	
	</body>
</html>