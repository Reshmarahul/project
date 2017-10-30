<head>
        <link rel="stylesheet" type="text/css" href="add.css">
      
      </head>


        project name:<br>
        <form method="post" >
        <input type="text" name="projectname"><br>
        <!-- project member:<br>
        <input type="text" name="projectmember1"><br>
        <input type="text" name="projectmember2"><br>
        <input type="text" name="projectmember3"><br>
        <input type="text" name="projectmember4"><br> -->
        project status:<br>
        <input type="text" name="projectstatus"><br>
        project rating:<br>
        <input type="text" name="projectrating"><br>
        
        <input type="submit" name='save' value="submit"><br>
        <br>
        <br>
        </form>   
        <form method="get" action="test.php">
           <button type="submit"style="width:6%">BACK</button>
                    </form>  
                
           
<?php

$link = mysqli_connect("localhost", "root", "root","project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($_POST['save'] && $_POST['projectname'] !=''&& $_POST['projectstatus'] !=''&& $_POST['projectrating']){
   $a=$_POST['projectname'];
  
   $b=$_POST['projectstatus'];
   $c=$_POST['projectrating'];
   

  // Attempt insert query execution
  $sql ="INSERT INTO list (projectname,projectstatus,projectrating) VALUES ('$a','$b','$c')";

  
             
  if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
  
}

mysqli_close($link);
?>