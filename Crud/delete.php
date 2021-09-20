
<?php

$conn = mysqli_connect("localhost","root","","crud");

$id = $_GET['id'];

    $query = mysqli_query($conn,"delete from user where Id=$id");
        
    header("location:select.php");
    

?>