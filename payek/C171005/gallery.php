<!DOCTYPE html>
<html>
<head>
      <title> Hotel Shotoshopa</title>
	  <link rel="stylesheet" type="text/css" href="css/gallery.css">
	  <link rel="stylesheet" type="text/css" href="css/bamboo.css">
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
		     <li class="active"><a href="index.php"><b>HOME</b></a></li>
			 <li><a href="gallery.php"><b>Gallery</b></a></li>
			 <li><a href="#room"><b>Room</b></a></li>
			 <li><a href="#about"><b>About</b></a></li>
			 <li><a href="#contact"><b>Contact</b></a></li>
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
    
    </body>
</html>
