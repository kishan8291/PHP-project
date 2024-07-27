<?php 
include "connection.php";

$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$queries=$_POST["queries"];

$sql = "UPDATE `contact` SET `name` = '$name', `email` = '$email', `contact` = '$contact', `queries` = '$queries' WHERE `contact`.`id` = $id;";

if (mysqli_query($conn,$sql)) {
    header("location:show.php");
} else {
    echo "Some thing went wrong";
}

mysqli_close($conn);
?>