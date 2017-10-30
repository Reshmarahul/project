
<html>
 <head>

 </head>
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql= "SELECT * FROM list";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // output data of each row
 
 while($row = $result->fetch_assoc()) {

$sql1 = "UPDATE list SET projectname='{$_POST['projectname']}',projectstatus='{$_POST['projectstatus']}',projectrating='{$_POST['projectrating']}' where id='{$_POST['id']}'";
echo $sql1;
$result1 = $conn->query($sql1);
print_r(result1);


}}

header('location:test.php');
?>


 
</html>