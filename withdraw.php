
<?php
include 'dbconnect.php';


    @$withdraw = $_POST["inputWithdraw"];
    @$acc1  = $_POST["inputacc"];
    
    $sql = "UPDATE balance SET withdraw = $withdraw,t_savings = t_savings-$withdraw where accountno = $acc1";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<h1>success</h1>
        ';
       
       
    }
 
?>
     


