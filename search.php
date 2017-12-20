

<link rel="stylesheet" type="text/css" href="search.css">
<form method="post" >
<input type="text" name="search" placeholder="Search..">
<input type="submit" name='save' value="submit">
</form> 
<form method="get" action="test.php">
           <button type="submit"style="width:6%">BACK</button>
                    </form>  
<?php

$link = mysqli_connect("localhost", "root", "root","project");
$search=$_POST['search'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql=" SELECT * FROM list WHERE projectname ='$search'";
$result= $link->query($sql);
if ($result->num_rows > 0)
?>
<!-- <table id="contact-list">
<thead>
    <tr>
       <th>Slno</th>
        <th>projectname</th>
        <th>projectstatus</th>
        <th>projectrating</th>
        
          
    </tr>
</thead>
<tbody> -->


<?php while ($row =$result->fetch_assoc()) {?>


    <table id="contact-list">
<thead>
    <tr>
       
        <th>projectname</th>
        <th>projectstatus</th>
        <th>projectrating</th>
        
          
    </tr>
</thead>
<tbody>
    <tr>
        
        <td><?php echo $row['projectname']; ?></td>
        <td><?php echo $row['projectstatus']; ?></td>
        <td><?php echo $row['projectrating']; ?></td>
    </tr>

<?php } ?>

</tbody>
</table>
