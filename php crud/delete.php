<?php 
include "connection.php";

$id = $_GET["id"];

$sql = "DELETE FROM contact WHERE `contact`.`id` = $id";

if (mysqli_query($conn,$sql)) {
    header("location:show.php");
} else {
    echo "Some thing went wrong";
}

mysqli_close($conn);
?>