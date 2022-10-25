<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>displaying the data</title>
    <style>
        table {
            margin-top:30px;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        table {
          border-collapse: collapse;
}
button{
    background:red;
   width:70px;
   padding:10px;
   outline:none;
   border:none;
   border-radius:5px ;
   font-size:15px;
}
a{
    font-size:30px;
    font-weight:bold;
 
}
    </style>





</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>Operation</th>
          
        </tr>

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

$show = " SELECT * FROM reg";

$data=mysqli_query($conn, $show);

$row=mysqli_num_rows($data);
// resutl=my_sqli_fetch_assoc($row);
// echo $row;
if($row!=0)
{
while($result=mysqli_fetch_assoc($data))
{
    echo "
  <tr>
   <td>".$result['Sr_No']."</td>
   <td>".$result['fname']."</td>
   <td>".$result['lname']."</td>
   <td>".$result['password']."</td>
   <td>".$result['email']."</td>
   <td>".$result['phone']."</td>
   <td>

   <a href='delete.php?rn=$result[Sr_No]' onclick='return che()'><button>Delete</button></a>
  <a href='Update.php?rn=$result[Sr_No] & fn=$result[fname] & ln=$result[lname] & em=$result[email] & ph=$result[phone]' ><button>Update</button></a>
</td>


  </tr>
  ";
}
}else{
    echo "Table has no record record";
}
?>


    </table>
    <a href="index.php">
        want to insert data
    </a>
</body>
<script>
    function che(){
        return confirm("Are You Sure want to delete the data");
    }
</script>
</html>