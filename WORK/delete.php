<?php
include('config.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "DELETE FROM `users` WHERE ID = '$id'";
if(mysqli_query($conn,$sql)){
    header("Location:details.php");
}
else{
    echo "Deletion failed...";
}
?>
