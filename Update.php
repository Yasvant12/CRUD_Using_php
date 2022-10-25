<?php 

$id=$_GET['rn'];
 $fn=$_GET['fn'];
 $ln=$_GET['ln'];
 $em=$_GET['em'];
$ph=$_GET['ph'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
       
        <div class="heade">
            <h1>Update Form</h1>
        </div>
        <div class="clearfix"></div>
            <div class="inp">
                <form action="#" method="POST">
                    <label for="Name:">ID : </label><br>
                    <input type="text" value = "<?php echo "$id " ?>" name="id" ><br>
                    <label for="Name:">First Name : </label><br>
                    <input type="text" value = "<?php echo "$fn" ?>" name="fName" ><br>
                    <label for="Name:">Last Name : </label><br>
                    <input type="text" value="<?php echo "$ln" ?>" name="lName" ><br>
                    <!-- <label for="password:">Password : </label><br>
                    <input type="password" name="pwd"><br> -->
                    <label for="email:">Email : </label><br>
                    <input type="text" name="email"  value="<?php echo "$em" ?>"><br>
                    <label for="phone:">Phone : </label><br>
                    <input type="text" name="phone"  value="<?php echo "$ph" ?>"><br>
                    <button  name="regidter"  >Register</button>
                </form>
            </div>

       
    </div>
</body>
</html>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

 $conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " .  mysqli_connect_error());
}





if(isset($_POST['regidter'])){
    // echo "i love india";
   
    $id=$_POST['id'];
    $fname=$_POST['fName'];
    $lname=$_POST['lName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];



$query = "UPDATE reg SET fname='$fname', lname='$lname',email ='$email',phone='$phone' WHERE Sr_No='$id' ";


$data = mysqli_query($conn,$query);
if($data){
    echo "updated";
            // echo "<script>alert("Data updated sucessfully")</script>";
}else{
    echo "Failedto update";
    // echo "<script>alert("Data not updated sucessfully")</script>";
}

}

?>
















