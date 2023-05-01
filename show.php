<?php
$servername="localhost";
$username="root";
$password="";
$database="table_1";


$con=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `details` WHERE 1";
$result=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1px solid black">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile Number</th>
        <th>Email Id</th>
        <th>Password</th>
    </tr>
<?php
while($row=mysqli_fetch_array($result)){

?>
<tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['first_name']?></td>
    <td><?php echo $row['last_name']?></td>
    <td><?php echo $row['mobile_number']?></td>
    <td><?php echo $row['email_id']?></td>
    <td><?php echo $row['password']?></td>
    <td>
  <a href="delete.php?id=<?php echo $row['id']?>"><button>delete</button></a>
    </td>
</tr>
<?php
}
?>
<?php 




?>
</table>
</body>
</html>