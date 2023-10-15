<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=test','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("location:fpage.php");
   echo "yes";
}
catch(Exception $e)
{
    echo "Connection Error: ", $e->getMessage();
}

?>
