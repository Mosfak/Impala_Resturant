<?php
  $servername="localhost";
$username="root";
$password="";
$dbname="mydb";
  
$info=$_POST['search'];



$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    echo "Connection Error!".$conn->connect_error;
    die();
}

$sql="SELECT hadith FROM hadith WHERE reference=? "; //edit sql command

$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$info);               //this replaces ques mark in
$stmt->execute();

$stmt->store_result();

if($stmt->num_rows>0){
    echo "<script>info('$info')</script>";
    
    
}
else{
    echo "<script>document.getElementById('para').innerHTML='Not Found'</script>";
}


?>