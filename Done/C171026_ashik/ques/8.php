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
        <h2>Can you remember your dreams when you wake up?</h2>
        <br>
          
        <input type="radio"  Value="Option1" name="ques">
        I often remember them clearly<br>
        
        <input type="radio"  Value="Option2" name="ques">
        I usually can't remember them except for few<br>
        
        <input type="submit" name="submit" value="next" >
        
    
    </form>
   
 
</body>


</html>