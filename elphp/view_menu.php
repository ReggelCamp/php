<?php

    include "dbcon.php";

    try{

        $query = "SELECT * from ref_menu order by 1 asc";
        $st = $conn->prepare($query);
		$st->execute();
		$rows = $st->fetchAll();
		$conn = null;

		//return $rows;

        //echo "yey";
    }

catch(Exception $e)
    {
        echo "Connection Error: ", $e->getMessage();
    }


?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            .hdr{
                text-align:center;
                color:blue;
            }
        </style>
    </head>
    <body>

        <h1 class = "hdr">Menu List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Menu #</th>
                    <th scope="col">Menu name</th>
                    <th scope="col">Menu description</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            
            <tbody>       
                <tr>
                    <?php
                        foreach ($rows as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['menu_name'] . "</td>";
                            echo "<td>" . $row['menu_desc'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                        }
                    ?>
                </tr>
             
            </tbody>
        </table>

    </body>
</html>