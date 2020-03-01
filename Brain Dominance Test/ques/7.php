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
        <h2>Clap please !!!<br>Which of your hand is on top?</h2>
        <br>
          
        <input type="radio"  Value="Option1" name="ques">
        Left<br>
        
        <input type="radio"  Value="Option2" name="ques">
        Right<br>
        
        <input type="submit" name="submit" value="next" >
        
    
    </form>
   
 
</body>


</html>