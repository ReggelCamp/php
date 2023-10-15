<?php
include "dbcon.php";

if (isset($_POST['display'])){
   

$display = "SELECT * FROM todo";

    $statement = $pdo->prepare($display);
    $statement -> execute();

    $result = $statement -> fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

    </head>
    <body>
        <tr>
        <th>ID</th>
        <th>Activity</th>
        </tr>

        <?php
            if ($result) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - activity " . $row["activity"];
                echo "<br>";
            }
       } //else {
           
        //        <tr>
            
        //}
       
        ?>
    
    </body>
    </html>