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
        <h2>You prefer _____ than _____?</h2>
        <br>
          
        <input type="radio"  Value="Option1" name="ques">
        Drawing and playing music <br>
        
        <input type="radio"  Value="Option2" name="ques">
        Solving puzzle or math problem<br>
        
        <input type="submit" name="submit" value="next" >
        
    
    </form>
   
 
</body>


</html>