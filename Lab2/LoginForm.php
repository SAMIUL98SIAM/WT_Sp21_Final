<?php 
    require_once "db_con.php";
    $uname ="";
    $upass="";


    if ($_SERVER ["REQUEST_METHOD"] =="POST"){
        $name = $_POST["u_name"];
        $pass = $_POST["u_pass"];
        $query= "select * from admin where username='$name' and password='$pass'";
        $res= get($query);
        if(count ($res)>0){
            header ("Location: Dashbrd.php");
        }
        else{
            echo "username or password is invalid!!!";
        }

    } 
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="POST">
        Username: <input type="text" name="u_name"> <br>
        Password: <input type="password" name="u_pass"> <br>   
        <input type="submit" name="submit" value="Login"> 
    </form>
</body>
</html>