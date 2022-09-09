<?php
$servername = "localhost";
$username = "root";
$password = "";

$database = "farzi_bank";

// Create a connection
$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);
/*
$sql = "INSERT INTO bank VALUES 
        ('Andhra Pradesh',8040,'0010DB58040'),
        ('Arunachal Pradesh',8006,'00DB58006'),
        ('Assam',8778,'00DB58778'),
        ('Bihar',8800,'00DB55656'),
        ('Chhattisgarh',8008,'00DB55656'),
        ('Goa',8070,'00DB55656'),
        ('Gujarat',8750,'00DB55656'),
        ('Haryana',7000,'00DB55656'),
        ('Himachal Pradesh',8700,'00DB55656'),
        ('Jammu and Kashmir',8080,'00DB55656'),
        ('Jharkhand',8001,'00DB55656'),
        ('Karnataka',8002,'00DB55656'),
        ('Kerala',8003,'00DB55656'),
        ('Madhya Pradesh',8004,'00DB55656'),
        ('Maharashtra',8005,'00DB55656'),
        ('Manipur',8006,'00DB55656'),
        ('Meghalaya',8011,'00DB55656'),
        ('Mizoram',8012,'00DB55656'),
        ('Nagaland',8013,'00DB55656'),
        ('Odisha',8014,'00DB55656'),
        ('Punjab',8015,'00DB55656'),
        ('Rajasthan',8016,'00DB55656'),
        ('Sikkim',8017,'00DB55656'),
        ('Tamil Nadu',8018,'00DB55656'),
        ('Telangana',8019,'00DB55656'),
        ('Tripura',8020,'00DB55656'),
        ('Uttarakhand',8021,'00DB55656'),
        ('Uttar Pradesh',8022,'00DB55656'),
        ('West Bengal',8000,'00DB55656')
";

// this is to check database connection
if($conn) {
    echo "success";
}
else {
    die("Error". mysqli_connect_error());
}


$sql = "CREATE TABLE UserSignup (
        uname VARCHAR(30) NOT NULL,
        pswd VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        $result = mysqli_query($conn, $sql);
      $sql1="create table bank(
        branchno int primary key,
        branchname varchar(30),
        ifsc varchar(11))
        ";
        if(mysqli_query($conn, $sql1)){
            echo 'connected1';
        }
            
            
           $sql2 = "create table newAccount(
            fname varchar(30),
            lname varchar(30),
            email varchar(30),
            city varchar(30),
            state varchar(30),
            zip int ,
            address varchar(30),
            adhaar varchar(15),
            gender varchar(30),
            dob date,
            phone int,
            branchname varchar(30),
            branchno int ,
            ifsc varchar(11),
            accountno VARCHAR(15) NOT NULL)";
            if(mysqli_query($conn, $sql2)){
                echo 'connected2';
            }
            */
            
?>