<html>
 <head></head>
 <body><div style="text-align:center">
 <h2>Let's Edit your Meetings</div>
 
 </div>
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
//echo "Connected successfully";


$sql= "SELECT * FROM list";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // output data of each row
 
 while($row = $result->fetch_assoc()) {
?>

<form style="text-align:center" action="edit.php" method="post">
 <div class="form-group">
 <input type="hidden" name="id" value="<?php echo $row["id"];?>" />
 <label >Title of project: </label>
 <input type="text" class="form-control" name="projectname" value="<?php echo $row["projectname"];?>" >
 </div>
 <div class="form-group">
 <label >projectstatus: </label>
 <input type="text" class="form-control" name="projectstatus" value="<?php echo $row["projectstatus"];?>">
 </div>
 <div class="form-group">
 <label > projectrating: </label>
 <input type="text" class="form-control" name="projectrating" value="<?php echo $row["projectrating"];?>" >
 </div>

 
<input type="submit" value="submit"></form>
</body>
 <br><br><br>

 





 <?php
 
 

 }
}


?>


</body>
</html>