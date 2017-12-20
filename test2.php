<table style="width:100%">
                               <tr>
                                 
                                 <th>projectname</th> 
                                 
                                 <th>projectstatus</th>
                                 <th>projectrating</th>
                                 <th>Delete</th>
                              </tr>     
                 
<tbody>
    <?php
$link = mysqli_connect("localhost","root","root","project");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql=" SELECT * FROM list";
$result= $link->query($sql);
if ($result->num_rows > 0)
{
    while($row =$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" .$row["projectname"]. "</td>";
        echo "<td>"  .$row["projectstatus"]. "</td>";
        echo "<td>"  .$row["projectrating"]. "</td>";
    //     echo "<td>"<form action='delete.php' method="post">
    
    //    <input type="submit" name="delete" value="Delete">
    //     </form>"</td>";              
                    
        echo "</tr>";
       
    }
    
}
  else{
      echo "no projects";
  }  
    
    ?>
    </tbody>
</table>   
     </body> 
     </html>