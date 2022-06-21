<?php
include('connection.php');

$sql = "DELETE FROM data WHERE id = " . $_GET["user_id"] . "";

$result = mysqli_query($conn, $sql);
if($result){
    header('Location: display.php');
}else{
    echo "User not deleted".mysqli_error($conn);
}
mysqli_close($conn);
?>