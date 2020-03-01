<!DOCTYPE html>
<html>
<head>
	<title> Web Project </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb";
    if(isset($_POST['search'])) 
        $info=$_POST['search'];



    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        echo "Connection Error!".$conn->connect_error;
        die();
    }

    $sql="SELECT hadith FROM hadith WHERE reference=? "; //edit sql command

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$info);               //this replaces ques mark in
    $stmt->execute();
    $result=$stmt->get_result();
    //$stmt->store_result();
    if(!session_start()) session_start();
    if($result->num_rows>0){
        while($data= $result->fetch_assoc()){
            $_SESSION['result']=$data['hadith'];
            
        }

    }
    else{
        $_SESSION['result']=" ";

    }


    ?>
    
</head>
<body>
<div class="container">
	<header>
		<h2><a href="index.php"> SUNNAH </a></h2>
		<nav>
			<ul>
				<li><a href="about.html"> About </a></li>
				<li><a href="news.html"> News </a></li>
				<li><a href="contact.html"> Contact </a></li>
				<li><a class="btn" href="login.html">Register/Log In</a></li>
			</ul>
		</nav>
	</header>

	<div class="cover">
		<h1>The Hadith of the Prophet Muhammaad ﷺ   at your fingertips</h1>
		<form action="index.php"class="flex_form" method="post">
			<input type="search" name="search" placeholder="which Hadith are you finding?">
			<input type="submit" name="" value="Search">
		</form>
        <br>
        <br>
        <br>
        <p>
            <?php 
            if(!session_id())session_start();
            if(isset($_SESSION['result']))
                echo $_SESSION['result'];
            
            
            ?>
        </p>
	</div>
    


</div>
</body>
</html>