
<?php

$conn = mysqli_connect("localhost","root","","crud");

$id = $_GET['id'];

$query = mysqli_query($conn,"select * from user where Id=$id");

$result = mysqli_fetch_assoc($query);

    if(isset($_POST['updbtn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encpassword = md5($password);

        $query = mysqli_query($conn,"update user set Name='$name', Email='$email', Password='$encpassword' where Id=$id");
        
        header("location:select.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container bg-warning">
    <div class="row">
    <div class="col-md-6 m-auto mt-5 mb-5 pt-5 pb-5">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $result['Name'] ?>" class="form-control">

            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $result['Email'] ?>">

            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" value="<?php echo $result['Password'] ?>">

            <input type="submit" value="Submit" name="updbtn" class="form-control btn btn-primary mt-2">
        </form>
        </div>
    </div>
    </div>
</body>
</html>