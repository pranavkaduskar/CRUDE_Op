




<?php




$sname = "localhost";
$username = "root";
$pass = "";
$dbname = "sdacprac";



$conn = mysqli_connect( $sname, $username, $pass, $dbname);
if(!$conn ){
    echo "not connected".mysqli_connect_error();
}


$id = $_POST["id"];
$name = $_POST["uname"];
$uemail = $_POST["uemail"];
$uquerry = $_POST["uquerry"];

$sql = "UPDATE `usersquery` SET `id` = '$id', `name` = '$name', `email` = '$uemail', `querry` = '$uquerry' WHERE `usersquery`.`id` = $id;";

if(mysqli_query($conn,$sql)){
    header("Location:umanage.php");

}else{
    echo "Something went worng";
}

mysqli_close($conn);
?>