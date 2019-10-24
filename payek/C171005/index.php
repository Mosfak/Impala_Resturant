<!DOCTYPE html>
<html>
<head>
      <title> Hotel Shotoshopa</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/gallery.css">
      <link rel="stylesheet" type="text/css" href="css/bamboo.css">
      <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script type="text/javascript" src="js/bamboo.js"></script>
    <style type="text/css">
        .demo {
            position: relative;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin-left:150px;
            margin-bottom:0px;
            margin-top:60px;
            width: 1200px;
            height: 450px;
            overflow: hidden;
            border: 10px solid #fefefe;
            box-shadow: 1px 1px 8px 2px rgba(0, 0, 0, .1);
        }
    </style>
</head>
<body>
     <header id="hm">		 
         <div class=" logo">
             <img src ="logo.png">
			
		 <ul>
		     <li><a href=""><b>HOME</b></a></li>
			 <li><a href="#gallery"><b>Gallery</b></a></li>
			 <li><a href="#room"><b>Room</b></a></li>
			 <li><a href="#about"><b>About</b></a></li>
			 <li><a href="Contact.php"><b>Contact</b></a></li>
             <li><a href="other/Login.php"><b>Log in</b></a></li>
		 </ul>
         </div>
         <div class ="title">
		        <h1> Welcome</h1>
				
         </div>
         
    </header >
    <header id="gallery">		 
         <div class=" logo">
             <img src ="logo.png">
			
		 <ul>
		     <li class="active"><a href="#hm"><b>HOME</b></a></li>
			 <li><a href="#gallery"><b>Gallery</b></a></li>
			 <li><a href="#room"><b>Room</b></a></li>
			 <li><a href="#about"><b>About</b></a></li>
			 <li><a href="Contact.php"><b>Contact</b></a></li>
             <li><a href="other/Login.php"><b>Log in</b></a></li>
		 </ul>
         </div>
		        <div class="demo">
        <div class="slides">
            <div><img src="Picture/1.jpg"></div>
            <div><img src="Picture/2.jpg"></div>
            <div><img src="Picture/3.jpg"></div>
            <div><img src="Picture/4.jpg"></div>
            <div><img src="Picture/5.jpg"></div>
            <div><img src="Picture/6.jpg"></div>
            <div><img src="Picture/7.jpg"></div>
            <div><img src="Picture/8.jpg"></div>
            <div><img src="Picture/9.jpg"></div>
            <div><img src="Picture/10.jpg"></div>
        </div> 
    </div>  
    <script type="text/javascript">
        var element = document.querySelector('.demo');
        var sildeshow = bamboo(element, 'into');
    </script>
         
         
    </header >
    <header id="room"></header>
    <header id="about"></header>
    <div class="fix footer" >
                <div class="fix contacts">
                    <h1>Contacts</h1>
                    <hr width="300px"  color="red" style="margin-left: 600px;">
                    <p >Email:yap.yeasin@gmail.com</p>
                    <p>Phone:01318370755</p>
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
