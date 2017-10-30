<?php
$link = mysqli_connect("localhost","root","root","project");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql=" SELECT * FROM list";
$result= $link->query($sql);
if ($result->num_rows > 0)
?>
<table id="contact-list">
        <thead>
            <tr>
                <th>projectname</th>
                <th>projectstatus</th>
                <th>projectrating</th>
                
  <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row =$result->fetch_assoc()) :?>



            <tr>
                <td><?php echo $row['projectname']; ?></td>
                <td><?php echo $row['projectstatus']; ?></td>
                <td><?php echo $row['projectrating']; ?></td>
                
                <td class="contact-delete"><form action='delete.php' method="post">
<input type="hidden" name="name" value="">
<input type="submit" name="submit" value="Delete">
</form></td>                
            </tr>

        <?php endwhile; ?>

        </tbody>
    </table>