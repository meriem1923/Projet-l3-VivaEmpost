<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projet";
$conn = mysqli_connect($host, $username, $password, $database);
if($conn){
    echo "connected";
} else{ 
    echo "failed";
}
$id=$_GET['id'];
$sup= mysqli_query($conn,"DELETE FROM `post` WHERE id=$id");
header("Location:gestion-post.php")
?>

