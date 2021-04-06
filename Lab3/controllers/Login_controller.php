<?php
    require_once 'model/db_config.php' ;
	$hasError = false ;
	$name = "" ;
	$err_name = "" ;
	$username = "" ;
	$err_username = "" ;
	$email = "" ;
	$err_email = "";
	$password = "" ;
	$err_password = "" ;
	if(isset($_POST["sign_up"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError = true ;
			$err_name = "Name required!" ;
		}
		else 
		{
			$name = $_POST["name"] ;
		}
		
		if(empty($_POST["username"]))
		{
			$hasError = true ;
			$err_username = "Userame required!" ;
		}
		else 
		{
			$username = $_POST["username"] ;
		}


		if(empty($_POST["password"]))
		{
			$hasError = true ;
			$err_password = "Password required!" ;
		}
		else 
		{
			$password = $_POST["password"] ;
		}
         
		if(empty($_POST["email"]))
		{
			$hasError = true ;
			$err_email = "Email required!" ;
		}
		else 
		{
			$email = $_POST["email"] ;
		}
        if(!$hasError)
        {
            insertUser($name,$username,$password,$email) ;
        }
       
         
	}

    if(isset($_POST["btn_login"]))
    {
        if(empty($_POST["username"]))
		{
			$hasError = true ;
			$err_username = "Username required!" ;
		}
		else 
		{
			$username = $_POST["username"] ;
		}
		if(empty($_POST["password"]))
		{
			$hasError = true ;
			$err_password = "Password required!" ;
		}
		else 
		{
			$password = $_POST["password"] ;
		}
        if(isset($_POST['btn_login']))
        {
            if(authentication($username,$password))
            {
                header("Location: dashboard.php") ;
            }
            echo "Invalid username or password" ;
        }
    }

    function insertUser($name,$username,$password,$email)
    {
        $query = "INSERT INTO user VALUES (NULL,'$name','$username','$password','$email')" ;
        echo $query ;
        execute($query) ;
    }
    function authentication($username,$password)
    {
        $query = "select * from user where username='$username' and password='$password'";
        $result = get($query) ;
        if(count($result) > 0)
        {
            return $result[0] ;
        } 
        return false ;   
    }
?>