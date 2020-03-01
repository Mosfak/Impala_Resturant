<?php
  $servername="localhost";
$username="root";
$password="";
$dbname="mydb";
  
$email=$_POST['email'];
$pass=$_POST['pass'];


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    echo "Connection Error!".$conn->connect_error;
    die();
}

$sql="SELECT * FROM account WHERE email=? and pass=? ";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$email,$pass);
$stmt->execute();

$stmt->store_result();

if($stmt->num_rows>0){
    echo "Login Successfull";
    header("refresh:1;url='../index.php'");
}
else{
    echo "Login Failed!!!!";
    header("refresh:1;url='../login.html'");
           
}


?>