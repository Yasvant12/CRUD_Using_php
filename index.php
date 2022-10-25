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
            <h1>Registration Form</h1>
        </div>
        <div class="clearfix"></div>
            <div class="inp">
                <form action="#" method="post">
                    <label for="Name:">First Name : </label><br>
                    <input type="text" placeholder="Enter Your Name here" name="fName" ><br>
                    <label for="Name:">Last Name : </label><br>
                    <input type="text" placeholder="Enter Your Name here" name="lName" ><br>
                    <label for="password:">Password : </label><br>
                    <input type="password" name="pwd"><br>
                    <label for="email:">Email : </label><br>
                    <input type="text" name="email"   placeholder="Enter Your Email here"><br>
                    <label for="phone:">Phone : </label><br>
                    <input type="text" name="phone"  placeholder="Enter Your Phone Number here"><br>
                    <button  name="regidter"  >Register</button>
                </form>
            </div>

       
    </div>

    <a href="display.php">
        want to see the data
    </a>
</body>
</html>


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
if(isset($_POST['regidter'])){

$fname=$_POST['fName'];
$lname=$_POST['lName'];
$pass=$_POST['pwd'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql = "INSERT INTO reg (fname, lname, password,email,phone)
VALUES ('$fname','$lname','$pass','$email','$phone')";
$data=mysqli_query($conn, $sql);

     if ($data) {
      echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
$conn->close();
?>
