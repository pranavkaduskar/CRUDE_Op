<?php


        $id = $_GET["id"];
       
 
       $sanme = "localhost";
       $username = "root";
       $pass = "";
       $dbname = "sdacprac";

       $conn = mysqli_connect($sanme, $username, $pass, $dbname);
       if(!$conn){
        echo "Data base is not connected".mysqli_connect_errno();

       }


       $sql = "DELETE FROM usersquery WHERE `usersquery`.`id` = $id";

       if(mysqli_query($conn,$sql)){
        header("Location:umanage.php");

       }else{
        echo "User is not Deleted";
       }




       mysqli_close($conn);
?>