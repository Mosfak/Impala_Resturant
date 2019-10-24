<!DOCTYPE html>
<html>
<head>
      <title> Hotel Shotoshopa</title>
	  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
     <header id="hm">		 
         <div class=" logo">
             <img src ="logo.png">
			
		 <ul>
		     <li><a href="index.php"><b>HOME</b></a></li>
			 <li><a href="gallery.php"><b>Gallery</b></a></li>
			 <li><a href="#room"><b>Room</b></a></li>
			 <li><a href="#about"><b>About</b></a></li>
			 <li><a href="#contact"><b>Contact</b></a></li>
             <li><a href="other/Login.php"><b>Log in</b></a></li>
		 </ul>
         </div>


         <div class ="title">
            <div class="wrapper">
                <div class="frm" >

                    <form action="../php/loginaction.php" method="post">
                        
                        <lebel for="email">Email:</lebel><br>
                        <input type="text" size="50" name="email" /><br>
                        <lebel for="pass">Password:</lebel><br>
                        <input type="password" size="50" name="pass" /><br>
                        <lebel for="message">Message:</lebel><br>
                      	<textarea></textarea><br>
                        <input type="submit" name="submit" ><br>
                        
                    </form>

                </div>
            </div>
         </div>

    </header >

    <div class="fix footer" >
                <div class="fix contacts">
                    <h1>Contacts</h1>
                    <hr width="300px"  color="red" style="margin-left: 600px;">
                    <p >Email:yap.yeasin@gmail.com</p>
                    <p>Phone:01318370744</p>
                </div>
                <div class="fix seat">
                    <form>
                        <h2>Reserve a Room!</h2>
                        Enter date:<br>
                        <input type="date"><br>
                        Enter Time:<br>
                        <input type="time"><br>
                        Enter party size:<br>
                        <input type="number"><br>
                        <input type="submit"><br>
                    </form>
                </div>
               
                <div class="fix map">
                    <h3>We are Here:</h3>
                    <img src="Picture/map.jpg" width="400" height="200">
                </div>
            </div>
			<div class="fix cpyright">
				<hr color="white">
				&copy;Developed by Yeasin Arafat Payek
			</div>

    
    </body>
</html>
