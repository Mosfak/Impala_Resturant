<?php
	
    session_start();
    $pg=$_SESSION['pg'];


	if(isset($_POST['submit'])){
        if(isset($_POST['ques'])){
            $val=$_POST['ques'];
            
            if($val=="Option1")
                $_SESSION['right']++;
            else if($val ="Option2")
                $_SESSION['left']++;
            $_SESSION['pg']++;
            $pg++;
            if($pg==11){
                header("refresh:0,url='../ques/result.php");
                die();
            }
            header("refresh:0;url='../ques/$pg.php");
          
        }
        else{
            echo "<script>alert('Please answer to proceed');</script>" ;
            
            
            header("refresh:0;url='../ques/$pg.php'");
            die();
        }
        
    }
    





?>