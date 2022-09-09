<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container my-4 ">

        <h1 class="text-center">Signup Here</h1>
        <form method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
               
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
               
            </div>

            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to our <a href="#">Terms & conditions</a> 
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                SignUp
            </button>

        </form>


    </div>

    </script>
</body>

</html>





<?php
include 'dbconnect.php';

$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    /*$sql = "CREATE TABLE usersignup (
        uname VARCHAR(30) NOT NULL,
        pswd VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";*/
    $sql = "SELECT * FROM usersignup where uname = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);


    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    if ($num == 0) {
        if (($password == $cpassword) && $exists == false) {

            $hash = md5($password);

            // Password Hashing is used here.
            $sql = "INSERT INTO usersignup VALUES ('$username', '$hash',current_timestamp())";


            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    } // end if

    if ($num > 0) {
        $exists = "Username not available";
    }
} //end if
?>

<?php

if ($showAlert) {

    echo ' <div class="alert alert-success
        alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is
        now created and you can <a href="http://localhost/eileen/login.php/">login</a>.
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
}

if ($showError) {

    echo ' <div class="alert alert-danger
        alert-dismissible fade show" role="alert">
    <strong>Error!</strong> ' . $showError . '
<button type="button" class="close"
        data-dismiss="alert aria-label="Close">
        <span aria-hidden="true">×</span>
</button>
</div> ';
}

if ($exists) {
    echo ' <div class="alert alert-danger
        alert-dismissible fade show" role="alert">
    <strong>Error!</strong> ' . $exists . '
    <button type="button" class="close"
        data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div> ';
}



?>