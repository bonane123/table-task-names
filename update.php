<?php
include('connection.php');

$sql = "SELECT * FROM data WHERE id = '" . $_GET['id'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
if($row>0){
    $row = mysqli_fetch_assoc($result);
    ?>


<!DOCTYPE html>
<html>
  <head>
      <title> UPDATE FORM </title>

    </head>
   <body style="text-align:center;">

 
       <div class="row justify-content-center">
       <form action="update_process.php" method="POST"> 
           <div class="form-group">
            <label>User ID</label>
            <input type="number" name="id" class="form-control" value="<?php echo $row['id']?>" disabled>
            </div><br>
            <label>Names</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
            </div><br>
<div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" value="<?php echo $row['location']?>">
            </div><br>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">
                <a href="update_process.php?id=<?php echo $row['id'] ?>">Update</a>
            </button>
            <a href="display.php">display</a>
            </div>            
        </form>
        <?php
        
    }
        ?>
       
       </div>
    </body>
            

</html>