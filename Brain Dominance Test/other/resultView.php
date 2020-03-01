<html>
<head>
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
     
    
    <div class="wlcm">
        <h1>Your Result:</h1>
            <?php session_start();echo "<h2>".$_SESSION['result']."</h2>"; ?>
        <h2>Score: Left Brain=<?php echo $_SESSION['leftScore'] ?>/100,  Right Brain=<?php echo $_SESSION['rightScore'] ?>/100<br></h2>
        
    </div>
   
 
</body>


</html>