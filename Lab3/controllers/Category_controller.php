<?php
    require_once 'model/db_config.php' ;
    $name = "" ;
    $err_name = "" ;
    $hasError = false ;
    if(isset($_POST["add_category"]))
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
        insertCategory($name);
    }

    function insertCategory($name)
    {
        $query = "INSERT INTO categories VALUES (NULL,'$name')" ;
        execute($query) ;
        header("Location: allcategories.php");
    }
    function getCategories($id)
    {
        $query = "select * from categories where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllCategories()
    {
        $query = "select * from categories" ;
        $result = get($query) ;
        return $result ;
    }
?>