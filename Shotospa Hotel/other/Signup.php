<!DOCTYPE html>
<html>
<head>
      <title> Hotel Shotoshopa</title>
	  <link rel="stylesheet" type="text/css" href="../css/style.css">
	  <link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
     <header id="hm">		 
         <div class="logo">
             <img src ="../logo.png">
			
		 <ul>
		     <li><a href="../index.php#hm"><b>HOME</b></a></li>
			 <li><a href="../gallery.php"><b>Gallery</b></a></li>
			 <li><a href="../index.php#room"><b>Room</b></a></li>
			 <li><a href="../index.php#about"><b>About</b></a></li>
			 <li><a href="../index.php#contact"><b>Contact</b></a></li>
             <li><a href="Login.php"><b>Login</b></a></li>
		 </ul>
         </div>
         <div class ="title">
		      <div class="wrapper">
            <div class="frm" >
                <form action="../php/signupaction.php" method="post">
                    
                    <lebel for="email">Email:</lebel><br>
                    <input type="text" size="50" name="email" /><br>
                    <lebel for="pass">Password:</lebel><br>
                    <input type="password" size="50" name="pass" /><br>
                    <lebel for="name">Name:</lebel><br>
                    <input type="text" size="50" name="name" /><br>
                    <lebel for="phone">Phone:</lebel><br>
                    <input type="text" size="50" name="phone" /><br>
                    
                    <input type="submit" name="submit" ><br>
                    
                </form>

            </div>
        </div>
         </div>
         
    </header >
    </body>
</html>
