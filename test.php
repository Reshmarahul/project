<html>
    <head><title>My First HTML</title>
        <link rel="stylesheet" type="text/css" href="test.css">
    </head>
    <style>
            body {
                    background-image: url("project.jpg ");
            } 
             
        </style>
             
            <body>
             
            <div id="header">
                  <h1>PROJECTMANAGEMENT</h1>
            </div>
            
            <div>
                <form method="get" action="add.php">
                <button type="submit"style="width:6%">ADD</button>
                </form>

                 <!-- <form method="get" action="index.php">
                 <button type="submit"style="width:6%">DELETE</button>
                 </form>   -->
                  <br>
                  <form method="get" action="search.php">
                <button type="submit"style="width:6%">SEARCH</button>
                </form>
                <form method="get" action="delete.php">
               <button type="submit"style="width:6%">DELETE</button>
                    </form>  
                    <form method="get" action="alter.php">
               <button type="submit"style="width:6%">EDIT</button>
                    </form>  

             </div>
             <br>
             <br>
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
                
            
            
                
                  
                
            </tr>
        </thead>
        <tbody>
        <?php while ($row =$result->fetch_assoc()) {?>



            <tr>
            <!-- <td><?php echo $row['id']; ?></td> -->
                <td><?php echo $row['projectname']; ?></td>
                <td><?php echo $row['projectstatus']; ?></td>
                <td><?php echo $row['projectrating']; ?></td>
                
                
                
                
            </tr>

        <?php } ?>

        </tbody>
    </table>
