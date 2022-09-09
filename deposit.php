
<?php
include 'dbconnect.php';


    @$deposit = $_POST["inputDeposit"];
    @$acc  = $_POST["inputacc"];
    
    $sql = "UPDATE balance SET deposit = $deposit,t_savings = t_savings+$deposit where accountno = $acc";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<h1>success</h1>
        ';
       
       
    }
    
 
?>