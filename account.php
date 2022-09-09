
<?php
include 'dbconnect.php';

@$firstname = $_POST["firstname"];
@$lastname = $_POST["lastname"];
@$email = $_POST["email"];
@$city = $_POST["city"];
@$state = $_POST["state"];
@$zip = (int) $_POST["zip"];
@$address = $_POST["address"];
@$adhaar = $_POST["adhaar"];
@$gender = $_POST["gender"];
@$dob = $_POST["dob"];
@$phone = (int) $_POST["phone"];
$accountno = strval(rand(000000000000000,999999999999999));

while (mysqli_num_rows(mysqli_query($conn,"SELECT * from newaccount where accountno = $accountno")) >0 ){
  $accountno = strval(rand(000000000000000,999999999999999));
}






$sql1 = "SELECT * FROM newaccount where adhaar = '$adhaar'" ;
$result =mysqli_query($conn,$sql1);
$num = mysqli_num_rows($result);

if ($num == 0){
  $sql = "INSERT INTO newaccount VALUES(
    '$firstname',
    '$lastname' ,
    '$email',
    '$city',
    '$state',
    '$zip',
    '$address',
    '$adhaar',
    '$gender',
    '$dob',
    '$phone',
    '$accountno',0)";

    $temp =  "INSERT INTO balance VALUES($accountno,0,0,0,current_timestamp())";


    
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $temp)){
      echo '<div style="background-color:yellow;">

  <h1>Account created successfully</h1> 
  <strong style="color:red;">Account no :' . $accountno .'</strong> 
  
                <button  onclick="myFunction()">Click here to see ur account info</button>

                </div> 
            <script>
            function myFunction() {
            window.open("http://localhost/eileen/display.html");
            }
            </script> 
  
';


    }
    
   



    
}
else{
  echo '<h1 style="color:red;">you can\'t create a new account as u already have it!!</br> To check ur info kindly <a href="http://localhost/eileen/index.html">log in</a>>>></h1>';
}




/*
else if(){
  echo ' <div class="alert alert-danger
        alert-dismissible fade show" role="alert">

    <strong>You can\'t create a new account as you already have an account in this click here for the info!!</strong> 
    
</div> ';
}
*/
?>