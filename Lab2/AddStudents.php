<?php

    $name="";
    $id="";
    $dob="";
    $credit="";
    $cgpa="";
    $dept_id="";
    $err_name="";
    $err_id="";
    $err_dob="";
    $err_credit="";
    $err_cgpa="";
    $err_dept_id="";


    if ($_SERVER ["REQUEST_METHOD"] =="POST"){
        if(empty($_POST["u_name"])){
            $err_name="*Name required";
        }
        else{
            $name=$_POST["u_name"];
        }
        if(empty($_POST["u_id"])){
            $err_id="*Id required";
        }
        else{
            $id=$_POST["u_id"];
        }
        if(empty($_POST["dob"])){
            $err_dob="*Date Of Birth required";
        }
        else{
            $dob=$_POST["u_dob"];
        }

        if(empty($_POST["u_credit"])){
            $err_credit="*Credit required";
        }
        else{
            $credit=$_POST["u_credit"];
        }

        if(empty($_POST["u_cgpa"])){
            $err_cgpa="*CGPA required";
        }
        else{
            $cgpa=$_POST["u_cgpa"];
        }

        if(empty($_POST["u_dept_id"])){
            $err_dept_id="*Department Id required";
        }
        else{
            $dept_id=$_POST["u_dept_id"];
        }
    }
?>
<html>
    <head>
    
    </head>
    <body>
        <form method="POST">
        Name: <input type="text" name="u_name"><span><?php echo $err_name; ?> <br>
        ID: <input type="number" name="u_id"> <span><?php echo $err_id; ?><br>
        Date of Birth: <input type="number" name="u_dob"><span><?php echo $err_dob; ?> <br>
        Credit: <input type="number" name="u-credit"> <span><?php echo $err_credit; ?><br>
        CGPA: <input type="number" name="u_cgpa"><span><?php echo $err_cgpa; ?> <br>
        Deptartment ID: <input type="number" name="u_dept_id"><span><?php echo $err_dept_id; ?> <br>   
        <input type="submit" name="submit" value="Adding">
        </form>
    </body>
</html>