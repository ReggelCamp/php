<?php
//to display
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
                    <th scope="col">Edit/Delete</th>

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
                            ?>
                            
                            <td>
                                <form method="post" enctype="multipart/form-data" action="?edit_id=<?php echo $row['id']; ?>" style="display: inline;">
                                    <input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-primary">EDIT</button>&nbsp;
                                </form>
                                <form method="post" style="display: inline;">
                                    <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
				            </td>
                            <?php echo "</tr>";
                            }
                            ?>
                            
                <!-- </tr> -->
             
            </tbody>
        </table>
        <form>
            <button type="submit" class="btn btn-primary mx-5" formaction = "create_menu.php" name = "view" value = "view">Create Menu</button>
        </form>
        </body>
</html>


<?php
//for delete
    include "dbcon.php";
    $id = null;

    if (isset($_POST['delete'])) {
       
        $id = trim($_POST['delete']);
//            $id = ($_POST['delete']);



        try{
            $query = "DELETE FROM ref_menu WHERE id=?";
            $st = $conn->prepare($query);
            $st->execute([$id]);
          
            $conn = null;

            echo "<script>
            swal({
                icon: 'success',
                title: 'Success',
                text: 'Menu item created!',
              });
              </script>";
          
        }

        catch(Exception $e)
    {
        echo "Connection Error: ", $e->getMessage();
    }
    }

?>

<?php
    
    include 'dbcon.php';
  //  include 'create_menu.php'; 

    if(isset($_POST['edit'])){

       // header ("Location: create_menu.php");


        $Mname = trim($_POST["menu_name"]);  
        $Mdesc = trim($_POST["menu_desc"]);
        $Price = trim($_POST["price"]);


        try{
            $query = "Update ref_menu set menu_name=?,menu_desc=?,price=? where id=?";
            $st = $conn->prepare($query);
            $st->execute(array($Mname,$Mdesc,$Price));
            $db = null;
           // header ("Location: create_menu.php");
        }
        catch(Exception $e)
        {
            echo "Connection Error: ", $e->getMessage();
        }
    }
?>
