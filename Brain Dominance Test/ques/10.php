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
        <h2>Do you prefer to express your feelings through drawings or writing?</h2>
        <br>
          
        <input type="radio"  Value="Option1" name="ques">
        Drawing<br>
        
        <input type="radio"  Value="Option2" name="ques">
        Writing<br>
        
        <input type="submit" name="submit" value="next" >
        
    
    </form>
   
 
</body>


</html>