<?php 
$host="localhost";
$username="root";
$password= "";
$dbname= "Practice";
$conn=mysqli_connect($host,$username,$password,$dbname);
// if(mysqli_connect_errno())
// {
//     echo "". mysqli_connect_error();
//     exit();
// } else {
//     echo "suceeded";
// }

if (!$conn) {
    echo mysqli_connect_error();
} 

?>