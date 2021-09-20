
<?php
$conn = mysqli_connect("localhost","root","","crud");

$query = mysqli_query($conn,"select * from user");
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);

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
    <div class="container">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>D ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Status</th>
                <th>Dob</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </thead>
            <?php
                foreach($result as $index => $row){
            ?>  
                    <tr>
                        <td><?php echo ($index+1) ?></td>
                        <td><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['Password'] ?></td>
                        <td><?php echo $row['Role'] ?></td>
                        <td><?php echo $row['Status'] ?></td>
                        <td><?php echo $row['DOB'] ?></td>
                        <td><img src="<?php echo "Images/".$row['Image'] ?>" alt="" height="50" width="50"></td>
                        <td><a href="update.php?id=<?php echo $row['Id']; ?>">Update</a></td>
                        <td><a href="delete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                    </tr>        
               <?php }?>
        </table>
        
    </div>
</body>
</html>