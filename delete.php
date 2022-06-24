<?php
include('connection.php');

$sql = "DELETE FROM data WHERE id = " . $_GET["id"] . "";

$result = mysqli_query($conn, $sql);
if($result){
    header('Location: display.php');
}else{
    echo "User not deleted".mysqli_error($conn);
}
mysqli_close($conn);
?>