<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- for bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    
    <!-- for sweetalaert -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>


    <style>
        .hdr{
            text-align:center;
        }
       .btnborder{
            border-style:solid;
            margin-left:50px;
            margin-right:20px;
        } 
    </style>

</head>
<body>

    <!-- form action = "insert_menu.php" -->
    <form method = "POST">
        <h1 class = "hdr">Create Menu</h1>
        <br></br>
        <div class="mb-3 mx-5">
            <label for="MenuName" class="form-label">Menu Name</label>
            <input type="text" class="form-control" id="MenuName" name = "Menuname">     
        </div>
        <div class="mb-3 mx-5">
            <label for="MenuDescription" class="form-label">Menu Description</label>
            <input type="text" class="form-control" id="MenuDescription" name = "MenuDesc">
        </div>

        <div class="mb-3 mx-5">
            <label for="Price" class="form-label">Item Price</label>
            <input type="text" class="form-control" id="Price" name = "ItemPrice">
        </div>
    
        <button type="submit" class="btn btn-primary mx-5" name = "submit" value = "submit">Submit</button>
        <button type="submit" class="btn btn-primary mx-5" formaction = "view_menu.php" name = "view" value = "view">view</button>
        <button type="submit" class="btn btn-primary mx-5" formaction = "edit_delete_menu.php" name = "view" value = "view">view</button>

</form>
    <?php
    
    include "dbcon.php";
    
    if (isset($_POST['submit'])) {
        $Mname = $_POST["Menuname"];
        $Mdesc = $_POST["MenuDesc"];
        $Price = $_POST["ItemPrice"];

        try{
            // (menu_name,menu_desc,price) data inside the table "ref_menu"
            $query = "INSERT INTO ref_menu(menu_name,menu_desc,price) VALUES(?,?,?)";

            $stmt = $conn->prepare($query);
            $stmt -> execute([$Mname,$Mdesc,$Price]);
            
            $conn= NULL;
            $stmt = NULL;
            
           // $message = '<span style="color:green">Successfully added.</span>';
            //echo $message;
           // header("location:create_menu.php");
            //die();
        }
        catch(Exception $e)
    {
        echo "Connection Error: ", $e->getMessage();
    }
    }
    ?>

</body>
</html>

