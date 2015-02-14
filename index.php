<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "ugl";


mysql_connect($host,$user,$pass); 

mysql_select_db($db);


$sql = "SELECT * FROM pics  ORDER BY dateupload DESC";

$result = mysql_query($sql);


?>


<html>
 
  <head>
    <title>UGL</title>
    <link rel="stylesheet" href="css/skeleton.css">
    </head>

    <body>

<center> <br><br><br>
    <table border="1" width="60%">

       <thead>
       	

       <tr>
         <td>Id</td>
         <td>Nume</td>
         <td>Image</td>
         <td>Data upload</td>
        </tr>


       </thead>


  



<?php
     
  while ($row = mysql_fetch_array($result)){


      echo "<tr>";

     echo '<td>'.$row['id'].'</td>';
      echo '<td>'.$row['nume'].'</td>';
       echo "<td><img src='".$row['image']."' width='100' height='80'></td>"; 
     echo '<td>'.$row['dateupload'].'</td>';

     echo "</tr>";

  }

?>

</table>

</center>
  </body>

    </html>
