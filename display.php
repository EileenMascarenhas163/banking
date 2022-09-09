

<?php  
include 'dbconnect.php';
include 'info.php';

@$a = $_POST["adr"];



$sql1 = "SELECT * FROM newaccount where accountno = '$a'" ;
$result =mysqli_query($conn,$sql1);
$num = mysqli_num_rows($result);

if ($num > 0){
  while($row = mysqli_fetch_row($result)){
    @$firstname = $row[0];
    @$lastname  = $row[1];
    @$email  = $row[2];
    @$city = $row[3];
    @$state  = $row[4];
    @$zip  = $row[5];
    @$address  = $row[6];
    @$adhaar  = $row[7];
    @$gender  = $row[8];
    @$dob = $row[9];
    @$phone  = $row[10];
    @$accountno  = $row[11];
  
  $sql3 = "SELECT * FROM bank where state_branch = '$state'" ;
  $result3 =mysqli_query($conn,$sql3);
  $num3 = mysqli_num_rows($result3);
  if ($num3 > 0) {
    while($row = mysqli_fetch_array($result3)){
      @$branchcode  = $row[1];
      @$ifsc  = $row[2];
      
    }
    
  }

  
  }
 
$sql2 = "SELECT * FROM balance where accountno = '$a'" ;
$result1 =mysqli_query($conn,$sql2);
$num1 = mysqli_num_rows($result1);

if ($num1 > 0){
  while($row = mysqli_fetch_row($result1)){
    @$saving  = $row[3];
  }
}
 
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    table{
        height: 100vh;
    }
</style>
</head>
<body>
<table class="table table-dark table-border text-justify">
  <tr>
    <th>First Name  </th>
    <td>'. $firstname.'</td>
 
  </tr>
  <tr>
    <th>Last Name</th>
    <td>'. $lastname.'</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>'. $email.'</td>
  </tr>
  <tr>
    <th>City</th>
    <td>'. $city.'</td>
  </tr>
  <tr>
    <th>State</th>
    <td>'. $state.'</td>
  </tr>
  <tr>
    <th>Zip</th>
    <td>'. $zip.'</td>
  </tr>
  <tr>
    <th>Address</th>
    <td>'. $address.'</td>
  </tr>
  <tr>
    <th>Adhaar</th>
    <td>'. $adhaar.'</td>
  </tr>
  <tr>
    <th>Gender</th>
    <td>'. $gender.'</td>
  </tr>
  <tr>
    <th>DOB</th>
    <td>'. $dob.'</td>
  </tr>
  <tr>
    <th>Phone</th>
    <td>'. $phone.'</td>
  </tr>
  <tr>
    <th>Account No</th>
    <td>'. $accountno.'</td>
  </tr>
  <tr>
  <th>Branch No</th>
  <td>'. $branchcode.'</td>
</tr>
<tr>
<th>IFSC</th>
<td>'. $ifsc.'</td>
</tr>

  <tr>
    <th>Saving</th>
    <td>'. $saving.'</td>
  </tr>
  <tr>
    <th colspan="2">
 
            <div class="col-12">
            <button class="btn btn-light text-light"><a href="http://localhost/eileen/deposit_button.html" style="text-decoration:none;">Deposit</a></button>
            &nbsp;
            <button class="btn btn-light text-light"><a href="http://localhost/eileen/withdraw_button.html" style="text-decoration:none;">Withdraw</a></button>

            </div>
        </div>
</th>

  </tr>
</table>


    
</body>
</html>';
}
else {
    echo'<h3 style="color:red">you dont have an account first <a href="http://localhost/eileen/index.html">create an account</a> </h3>';
}
?>