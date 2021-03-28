<?php
    require_once "db_con.php";
    $query ="select * from student";
    $res = get($query);
?>

<html>
    <head>
    </head>
    <body>
            <table style="border-collapse:collapse">
                <tr>
                    <th>Name</th>
                    <th>Id</th>
                    <th>Date Of Birth</th>
                    <th>Credit</th>
                    <th>CGPA</th>
                    <th>Deptartment Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
        

        <?php
            foreach($res as $row){
                echo "<tr>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["dob"]."</td>";
                echo "<td>".$row["credit"]."</td>";
                echo "<td>".$row["cgpa"]."</td>";
                echo "<td>".$row["dept_id"]."</td>";
            }
        ?>
        </table>
    </body>
</html>