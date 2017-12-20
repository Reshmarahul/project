<link rel="stylesheet" type="text/css" href="search.css">
<form method="post" >
<input type="text" name="delete" placeholder="Search..">
<input type="submit" name='save' value="submit">
</form> 
<form method="get" action="test.php">
           <button type="submit"style="width:6%">BACK</button>
                    </form>  
<?php

$link = mysqli_connect("localhost", "root", "root","project");
$delete=$_POST['delete'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM list WHERE projectname='$delete'";
if($_POST['save']){
if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}
}
$link->close();
?>