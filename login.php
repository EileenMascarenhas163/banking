
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container my-4 ">

        <h1 class="text-center">Login </h1>
        <form method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <br>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">

            </div>

            <div class="form-group">
                <br>
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
                <p>No Account!! Create one <a href="http://localhost/eileen/signup.php/" target="_blank">Sign up</a> here</p>
            </div>
        </form>


    </div>

</body>

</html>

<?php

include 'dbconnect.php';

@$username = $_POST['username'];
@$password = $_POST['password'];
$hash = substr(md5($password), 0, -2);


$sql = "SELECT * FROM usersignup where uname = '$username'";
$result = mysqli_query($conn, $sql);  //true
$num = mysqli_num_rows($result);



if ($num > 0) {

    // OUTPUT DATA OF EACH ROW
    while ($row = mysqli_fetch_row($result)) {
        if (!(strcmp($row[1], $hash))) {

            echo ' <div class="alert alert-success
                alert-dismissible fade show" role="alert">
                <strong>Your logged in!! </strong>
                <button class = "btn btn-dark text-light" onclick="myFunction()">Click here to see ur account info</button>

            </div>
            
            <script>
            function myFunction() {
            window.open("http://localhost/eileen/display.html");
            }
            </script> ';
        } else {
            echo ' <div class="alert alert-warning
                alert-dismissible fade show" role="alert">
                <strong>Password incorrect</strong>
            </div> ';
        }
    }
}
/*
else{
    echo ' <div class="alert alert-info
                alert-dismissible fade show" role="alert">
                <strong>User not found</strong>
            </div> ';
}*/
?>