<html>
<head>
    <link rel="stylesheet" type="text/css" href="welcome.css">
    <?php
        $left=0;
        $right=0;
    
    ?>
</head>
<body>
 
    
    <form action="../php/action.php" method="post">
        <h2>Look at an object and close one eye.<br>
Which eye is still open?</h2>
        <br>
          
        <input type="radio"  Value="Option1" name="ques">
        Left<br>
        
        <input type="radio"  Value="Option2" name="ques">
        Right<br>
        
        <input type="submit" name="submit" value="next" >
        
    
    </form>
   
 
</body>


</html>