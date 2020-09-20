<html>
    <head>
        <title>Impala Restaurant</title>
        <link rel="stylesheet" href="style_order.css" type="text/css">
        <script src="../js/script.js">
        
        </script>
    </head>
    <body>
        
        
        <div class="fix main">
            
            <div class="fix header">
                <div class="fix logo"><h1><span style="color:yellow;font-size:50;text-decoration:;">Im<span style="color:blue;">pala</span></span><br>Restaurant</h1></div>
                <div class="fix menu">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../index.php#ftr">About Us</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="../index.php#spofr">Special Offer</a></li>
                        <li><a href="login.php">Sign in</a></li>
                    </ul>
                </div>
            </div>
            
            <hr color="red" height="5px;" style="margin-bottom:20px;">
            
            
            <div class="fix order">
                <h1>Menu:</h1>
                <div class="fix order_menu">
                    <ul>
                        <li onClick="Click('Chicken Burger')">Chicken Burger<g>120/=</g></li>
                        <li onClick="Click('Beef Burger')">Beef Burger<g>150/=</g></li>
                        <li onClick="Click('Chicken Biriyani')">Chicken Biriyani<g>120/=</g></li>
                        <li onClick="Click('Chicken Tanduri')">Chicken Tanduri<g>300/=</g></li>
                        <li onClick="Click('Item1')">Cold Drinks<g>20/=</g></li>
                        <li onClick="Click('Item2')">Special Item<g>70/=</g></li>
                        
                    </ul>
                </div>
            
                <div class="fix order_check">
                    <h2>Your Order:</h2>
                    <ul id="update">
                        <li >Chicken Burger<g id="Chicken Burger">0</g></li>
                        <li >  Beef Burger<g id="Beef Burger">0</g></li>
                        <li >Chicken Biriyani<g id="Chicken Biriyani">0</g></li>
                        <li >Chicken Tanduri<g id="Chicken Tanduri">0</g></li>
                        <li >Cold Drinks<g id="Item1">0</g></li>
                        <li >Special Item<g id="Item2">0</g></li>
                        <hr color="rgb(255, 174, 0)">
                        <li >Total: <g id="ttl"><script>document.write(sum)</script></g><br></li>
                    </ul>
                </div>
                <center><button class="button button1" onclick="alert('Your Order has been placed');location.reload(true);">Order Now!!! </button></center>
            
            </div>
             

            
            <div class="fix footer" >
                <div class="fix contacts">
                    <h1>Contacts</h1>
                    <hr width="300px"  color="red" style="margin-left: 600px;">
                    <p >Email:mdrobin2647@gmail.com</p>
                    <p>Phone:0188428704</p>
                </div>
                <div class="fix seat">
                    <form>
                        <h2>Reserve a Seat!</h2>
                        Enter date:<br>
                        <input type="date"><br>
                        Enter Time:<br>
                        <input type="time"><br>
                        Enter party size:<br>
                        <input type="number"><br>
                        <input type="text" placeholder="Enter Your Email"><br>
                        <input type="submit" onclick="alert('Your Reservarion is being processed \nWe will inform you through a mail')"><br>
                    </form>
                </div>
                <div class="fix social">
                    <h2>We are Open<br>7.00AM-9.00PM</h2>
                </div>
                <div class="fix map">
                    <h3>We are Here:</h3>
                    <img src="../img/map.png" width="400" height="200">
                </div>
            </div>
			<div class="fix cpyright">
				<hr color="white">
				&copy;Developed by Abdur Rahman Robin
			</div>
			
			
			
            
        
        
        </div>
        <!-- Java Script Starts -->
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script> 
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script> 
        
        
    </body>
</html>