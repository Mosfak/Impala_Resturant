<html>
<head>
    <link rel="stylesheet" type="text/css" href="welcome.css">
    
       
        
</head>
<body>
    <?php
        session_start();
        include '../php/init.php';        
    ?>
    
    <form action="../php/action.php" method="post">
        <h2>Put your hand on your head.<br>Which hand did you use?</h2>
        <br>
          
        <input type="radio"  Value="Option1" name="ques">
        Left<br>
        
        <input type="radio"  Value="Option2" name="ques">
        Right<br>
        
        <input type="submit" name="submit" value="next" >
        
    
    </form>
   
 
</body>


</html>