<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
  <head>
      <title> PHP CRUDE </title>

    </head>
   <body style="text-align:center;">

 
       <div class="row justify-content-center">
       <form action="index.php" method="POST"> 
           <div class="form-group">
            <label>Names</label>
            <input type="text" name="name" class="form-control" placeholder="enter your name">
            </div><br>
<div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" placeholder="enter your location">
            </div><br>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
            <a href="display.php">display</a>
            </div>
            <?php
            if(isset($_POST['save'])){
                $name = $_POST['name'];
                $location = $_POST['location'];
             
            if(empty($name) && empty($location)){
                echo 'Please fill all the form';
            }
                elseif(empty($name)){
                   echo 'Please enter the name';
                }
                elseif (empty($location)){
                    echo 'Please enter the location';
                }
                else{
                   $sql = "INSERT INTO data (name, location) VALUES ('$name','$location')";
                   $result = mysqli_query($conn, $sql);
                   if($result){
             
                     
            echo 'Data are succefully registed';
        }else{
           echo 'Data are not inserted'.mysqli_error($conn);
   
        }
        ?>
        </form>
        <?php
         }
        }
        mysqli_close($conn);
        ?>
       </div>
    </body>
            

</html>