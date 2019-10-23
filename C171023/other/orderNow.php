<html>
    <head>
        <title>Impala Restaurant</title>
        <link rel="stylesheet" href="style_order.css" type="text/css">
        <script  src="script.js">
            
        
        </script>
    </head>
    <body>
        
        
        <div class="fix main">
            
            <div class="fix header">
                <div class="fix logo"><h1><span style="color:yellow;font-size:50;text-decoration:;">Im<span style="color:blue;">pala</span></span><br>Restaurant</h1></div>
                <div class="fix menu">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Special Offer</a></li>
                        <li><a href="">Sign in</a></li>
                    </ul>
                </div>
            </div>
            
            <hr color="red" height="5px;" style="margin-bottom:20px;">
            
            
            <div class="fix order">
                <h1>Menu:</h1>
                <div class="fix order_menu">
                    <ul>
                        <li onClick="Click('Chicken Burger')">Chicken Burger</li>
                        <li onClick="Click('Beef Burger')">Beef Burger</li>
                        <li onClick="Click('Chicken biriyani')">Chicken Biriyani</li>
                        <li onClick="Click('Chicken Tanduri')">Chicken Tanduri</li>
                        <li onClick="Click('Item1')">Special Item 1</li>
                        <li onClick="Click('Item2')">Special Item 1</li>
                        
                    </ul>
                </div>
            
                <div class="fix order_check">
                    <h2>Your Order:</h2>
                    <ul id="update">
                        <li id="Chicken_Burger">---------</li>
                        <li id="Beef_Burger">  ----------</li>
                        <li id="Chicken_Biriyani">-------</li>
                        <li id="Chicken_Tanduri">--------</li>
                        <li id="Item1">Special Item1----------</li>
                        <li id="Item2">Special Item2----------</li>
                        
                        <li>Total: <script>document.write(sum)</script><br></li>
                    </ul>
                    
                </div>
            
            
            </div>
             

            
            <div class="fix footer" >
                <div class="fix contacts">
                    <h1>Contacts</h1>
                    <hr width="300px"  color="red" style="margin-left: 600px;">
                    <p >Email:mosfak2400@gmail.com</p>
                    <p>Phone:01590127784</p>
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
                        <input type="submit"><br>
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
				&copy;Developed by Mosfak Motin Rimon
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