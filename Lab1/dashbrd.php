<html>

<?php
	if(!isset($_COOKIE['u_name']))
	{
		header('location: index.php');
	}
?>
	<head>
		
	</head>
	<body>
	    <?php echo "Welcome ". $_COOKIE['u_name']. "<br/>" ?>
		
	</body>
</html>