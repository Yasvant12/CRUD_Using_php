<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " .  mysqli_connect_error());
}

$id=$_GET['rn'];

$query = "DELETE FROM reg WHERE Sr_No='$id' ";

$data=mysqli_query($conn, $query);

if($data){
header("location:display.php");
}else{
    echo "data do not deleted ";
}






?>