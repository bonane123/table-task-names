<?php
include ('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <table>
    <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOCATION</th>
            <th>DELETE</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row > 0){
            
            while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['location'];?></td>
                        <td><a href="delete.php?user_id=<?php echo $row['id'];?>">delete</a></td>
                    </tr>
                <?php
            }
            $row--;
        }else{
            echo 'Failed'.mysqli_error($conn);
        }
        ?>
        
        
    </table>
    <a href="index.php">back</a>
</body>
</html>