<?php

$sname = "localhost";
$username = "root";
$pass = "";
$dbname = "sdacprac";



$conn = mysqli_connect( $sname, $username, $pass, $dbname);
if(!$conn ){
    echo "not connected".mysqli_connect_error();
}

$name = $_POST["uname"];
$uemail = $_POST["uemail"];
$uquerry = $_POST["uquerry"];



$sql = "INSERT INTO `usersquery` (`id`, `name`, `email`, `querry`) VALUES (NULL, '$name', '$uemail', '$uquerry'); ";

if(mysqli_query($conn,$sql)){
    header("Location:thanku.html");

}else{
    echo "Something went worng";
}

mysqli_close($conn);
?>