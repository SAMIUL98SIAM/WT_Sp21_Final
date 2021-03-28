<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="Lab_2";

    function execute($query){
        global $db_server,$db_user,$db_pass,$db_name;
        $conn = mysqli_connect ($db_server,$db_user,$db_pass,$db_name);
        mysqli_query($conn,$query);
    }

    function get $query){
        global $db_server,$db_user,$db_pass,$db_name;
        $conn = mysqli_connect ($db_server,$db_user,$db_pass,$db_name);
        $res = mysqli_query($conn,$query);
        $data=[];
        if(mysqli_num_rows($res)>0){
            while ($row=mysqli_fetch_assoc($res)){
                $data[]=$row;
            }
        }
        return $data;
    }

?>