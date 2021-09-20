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
        <form action="code.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control">

            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">

            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">

            <label for="role">Select Role:</label>
            <select name="role" class="form-control" id="">
                <option value="">----Select-----</option>
                <option value="admin">Admin</option>
                <option value="employee">Employee</option>
                <option value="student">Student</option>
            </select>

            <label for="dob">Date Of Birth:</label>
            <input type="date" name="dob" class="form-control">

            <label for="image">Profile Image:</label>
            <input type="file" name="image" class="form-control">

            <input type="submit" value="Submit" name="btn" class="form-control btn btn-primary mt-2">
        </form>
        </div>
    </div>
    </div>
</body>
</html>