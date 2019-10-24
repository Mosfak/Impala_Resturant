<?php


session_start();
$left=$_SESSION['left'];
$right=$_SESSION['right'];
$result="comment";
if($left==$right){
    $result="Your both brain part are equally dominant.";
}
else if($left>$right)
    $result="Your left brain dominates right brain.";

else if($right>$left){
    $result="Your right brain dominates left brain.";
}
$_SESSION['leftScore']=($left*10);
$_SESSION['rightScore']=($right*10);
$_SESSION['result']=$result;

header("refresh:0;url='../other/resultView.php'")
?>