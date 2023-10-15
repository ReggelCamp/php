<?php
    include "dbcon.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Act = $_POST["activity"];

        try{
            
            //userinfo = database name

            $insert= "INSERT INTO todo(activity) VALUES(?);";

            $stmt = $pdo->prepare($insert);
            $stmt -> execute([$Act]);
            
            $pdo = NULL;
            $stmt = NULL;

            //die();
        }
        catch(Exception $e)
    {
        echo "Connection Error: ", $e->getMessage();
    }
    }
    else{
        header("location:fpage.php");
    }

  
?>




