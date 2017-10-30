<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<style>
body {
        background-image: url("images.jpg ");
} 
 
</style>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form method="post" >
 <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

<br>
 <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
</div>
<div>
<button type="submit">Login</button>
</form>
  </div>
  </html>
  <?php


//print_r($_POST);

//if(!$_POST) return false;
$con = mysqli_connect("localhost","root","root","project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "error";
  }
  // else {
  //     echo "success";
  // }

//   $q = "select * from user";
//   $result = $con->query($q);
//     while($row = $result->fetch_assoc()) {
//         echo  $row['username'];
//     }
if($message){
  echo "error";
}
//if($_POST["done"]){
  $a = $_POST["uname"];
  $b = $_POST["psw"];
  $q = "select * from user where username='".$a."' and pasword='".$b."' ";
  //exit();
  $result =$con->query($q);
  // print_r($result);
  $count =mysqli_num_rows($result);
 // echo $count; die;
  if ($count> 0) {
    header('location:test.php');
    exit();
  }
    else{
      $message = "error";
      
  
    
    
    }
  //echo "LOGED IN AS ".$_POST["name"];
  
  
  ?>
  <!-- <h1>Login here!!</h1>
  <form action = "<?php $_PHP_SELF ?>" method = "POST">
  UserName: <input type = "text" name = "name" />
  Password: <input type = "text" name = "psswd" />
  <input type = "submit" name="done" />
  <a href="registration.php">signup</a>
  </form>
  </body>
  </html> -->
