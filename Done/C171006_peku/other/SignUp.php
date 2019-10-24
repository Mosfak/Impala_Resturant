<html>
    <head>
        <link href="signup.css" type="text/css" rel="stylesheet" >
    </head>
    <body>
        
        <div class="wrapper">
            <div class="frm" >
                <form action="../php/signupaction.php" method="post">
                    <center><h1><u>SignUp</u></h1></center>
                    <lebel for="email">Email:</lebel><br>
                    <input type="text" name="email" /><br>
                    <lebel for="pass">Password:</lebel><br>
                    <input type="password" name="pass" /><br>
                    <lebel for="name">Name:</lebel><br>
                    <input type="text" name="name" /><br>
                    <lebel for="phone">Phone:</lebel><br>
                    <input type="text" name="phone" /><br>
                    
                    <input type="submit" name="submit" value="submitted"><br>
                    <a href="Login.php"> >>Login</a>
                </form>

            </div>
        </div>
        
    </body>
</html>