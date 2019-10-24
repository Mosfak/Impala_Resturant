<html>
    <head>
        <title>Impala Restaurant</title>
        <link rel="stylesheet" href="style_order.css" type="text/css">
        <script >
            

            var food=[
                
                ["Chicken Burger",0],  
                ["Beef Burger",0],  
                ["Chicken biriyani",0],  
                ["Chicken Tanduri",0],  
                ["Item1",0],  
                ["Item2",0]  
                
            ];
            
            var price=[ 120,150,120,300,20,70 ];
            var sum=0;
            
            
            function Click(name){
                for(var i=0;i<food.length;i++){
                    if(name==food[i][0]){
                        food[i][1]++;
                        sum=sum+price[i];
                    }
                }
                

                
                
            }
            
            
            
            
            
            function print(){
                for(var i=0;i<food.length;i++){
                    console.log(food[i][0]+"----"+food[i][1]+"---"+price[i]);
                    console.log("\n"+sum);
                }
                
            }
  
  
        
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
                        <li id="Chicken_Burger">Chicken Burger<g>0</g></li>
                        <li id="Beef_Burger">  Beef Burger<g>0</g></li>
                        <li id="Chicken_Biriyani">Chicken Biriyani<g>0</g></li>
                        <li id="Chicken_Tanduri">Chicken Tanduri<g>0</g></li>
                        <li id="Item1">Special Item1<g>0</g></li>
                        <li id="Item2">Special Item2<g>0</g></li>
                        <hr color="rgb(255, 174, 0)">
                        <li >Total: <g><script>document.write(sum)</script></g><br></li>
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