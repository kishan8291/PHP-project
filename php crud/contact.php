<?php 
include "connection.php";

$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$queries=$_POST["queries"];
$sql="INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `queries`) VALUES (NULL, '$name', '$email', '$contact', '$queries');";
if (mysqli_query($conn, $sql) ){
  header("Location:show.php");
} else {
    echo"insert data" . mysqli_error( $conn);
}

mysqli_close($conn);


?>