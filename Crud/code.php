<?php

    $conn = mysqli_connect("localhost","root","","crud");
    
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encpassword = md5($password);
        $role = $_POST['role'];
        $dob = $_POST['dob'];

        $image = $_FILES['image']['name'];
        $oldloc = $_FILES['image']['tmp_name'];
        $imagelocation = "images/".$image;
        move_uploaded_file($oldloc,$imagelocation);

        $query = "INSERT INTO user (Name, Email, Password, Role, DOB, Image) VALUES ('$name', '$email', '$encpassword', '$role', '$dob', '$image')";

        $execute = mysqli_query($conn,$query);
        if($execute){
            header("location:insert.php");
            echo "Successfully";
        }
        else{
            echo "Error";
        }
        
        // echo $name." ".$email." ".$password." ".$encpassword." ".$role." ".$dob."<br/><br/>".$image;
        // echo "<pre>";
        // print_r($image);
        // echo "</pre>";
    }



?>