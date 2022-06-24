<?php
include('connection.php');

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $username = $_POST['name'];
    $location = $_POST['location'];

    $sql = "UPDATE data SET name= '".$username."', location='".$location."' WHERE id='".$id."'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: display.php');
    }else {
        echo "failed to update".mysqli_error($conn);
    }

mysqli_close($conn);
?>