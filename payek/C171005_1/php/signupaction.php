<?php
  $servername="localhost";
$username="root";
$password="";
$dbname="mydb";
  
$email=$_POST['email'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$phone=$_POST['phone'];

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    echo "Connection Error!".$conn->connect_error;
    die();
}

$sql="INSERT INTO account VALUES(?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss",$email,$pass,$name,$phone);
if(!$stmt->execute())
    echo "Error!!! Try Again!";
else{
    echo "Sign Up Successfull";
    header("refresh:2;url='../index.php'");       
}


?>