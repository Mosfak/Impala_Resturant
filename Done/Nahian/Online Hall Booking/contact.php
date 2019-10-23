<html>
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="Assets/css/style.css" rel="stylesheet" />
<link href="Assets/css/menu.css" rel="stylesheet" />
<style>
.im
{
	border:double;
	border-radius:200px;
}



</style>
</head>
<body>
<header>
  <?php include("include/header.php");?>
</header>
<?php include("include/menu.php");?>
<section> 
<div class="sec2">
<div class="container">
  <center>
 <div style="padding-left:100px; padding-right:50px;">
<br>
<form action="" method="post">
<input type="text" name="name" class="srctxt" placeholder="Name"><br>
<input type="text" name="email" class="srctxt" placeholder="Email" id="txtEmail"><br>
<textarea class="txtar" name="message" placeholder="Enter Your Message"></textarea><br>
<input type="submit" value="Send" class="btn" name="send">
</form>
</div>
  </center>
</div>
</div>
</section>
<?php include("include/footer.php");?>
</body>
</html>

 <script>

function checkEmail() 
{

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
	document.getElementById("txtEmail").value = "";
	document.getElementById('txtEmail').style.border ="1px solid red";
    email.focus;
    return false;
 }
}
</script>
<?php
if(isset($_POST["send"]))
	{
$myemail = 'sultanmahmud621@gmail.com';
if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message']))
{
    echo "<script>alert('All Field Required')</script>";
	return;
}
$name = @trim(stripslashes( $_POST["name"]));
$email_address =@trim(stripslashes($_POST["email"]));
$message = @trim(stripslashes($_POST["message"]));
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email_address))
{
   echo "<script>alert('Invalid email address')</script>";
   return;
}

	else
		{
			$to = $myemail;
			$email_subject = "Contact From Client: $name";
			$email_body = "You have received a new message. "." Details:\n Name: $name \n "."Email: $email_address\n Message \n $message";
			$headers = "From: $myemail\n";
			$headers .= "Reply-To: $email_address";
			mail($to,$email_subject,$email_body,$headers);
			echo "<script>alert('Email Send')</script>";
		}
}
?>

