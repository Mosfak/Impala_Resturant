<?php
session_start();
include("include/db_config.php");
if(!(isset($_SESSION['log_user'])))
			{
				header("location:check.php");
			}
			else
			{	
$user_name=$_SESSION['log_user'];

					?>	
<html>
<head>
<title>Donz Hall Booking</title>
<link href="Assets/css/style.css" rel="stylesheet" />
<style>
p.double {border-style: double;}

.sr {
	background-image: linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -o-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(73,132,180) 0%, rgb(97,155,203) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, rgb(73,132,180)),
		color-stop(1, rgb(97,155,203))
	);

	color:#fff;
	background-repeat:repeat-x;
	border:1px solid #d1c7ac;
	width: auto;
	height:30px;
	border-radius:10px;
	padding:10px;
	margin-right:4px;
	margin-bottom:8px;
	font-family:Times news roman;
	font-size: 20px;
	box-shadow:2px 2px 2px #000;
	
}

</style>
</style>
</head>
<body>
<center>
	<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'add')" id="defaultOpen">New Hall</button>
		  <button class="tablinks" onclick="openCity(event, 'active')">Active/Deactive</button>
			<button class="tablinks" onclick="openCity(event, 'view')">View New Booking</button>
			  <button class="tablinks" onclick="openCity(event, 'edit')">Update</button>
			  <a href="logout.php"><button class="tablinks" onclick="openCity(event, 'edit')">Logout</button></a>
		</div>

<div id="add" class="tabcontent">

			<p class="double">
			<form action="" method="post">
			<input type="text" name="title" class="srctxt" placeholder="Hall Name" value="
<?php if(isset($_POST["btnreg"])){ echo $_POST["title"]; } ?>
"required><br>

			<textarea class="txtar" name="content" placeholder="Address" value="
<?php if(isset($_POST["btnreg"])){ echo $_POST["content"]; } ?>
"required></textarea><br>

			<input type="text" class="srctxt" name="price" placeholder="Price" value="
<?php if(isset($_POST["btnreg"])){ echo $_POST["price"]; } ?>
"required><br><br>
			<input type="submit" value="Add" class="btn" name="btnreg">	
			</form>
			<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
			<br>			
			</p>
			 <?php
if(isset($_POST["btnreg"]))
{
	function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
	$title =validate_input( $_POST["title"]);
	$content = $_POST["content"];
	$price = validate_input($_POST["price"]);
	if( $title=="" || $content=="" || $price=="")
	{
		echo "<script> alert('All field required');</script>";
		return;
	}
	else
	{	
			$sql = "INSERT INTO hall (h_name, h_place,price) VALUES ('$title','$content','$price')";
				if (mysqli_query($con, $sql))
					{
						echo "<script> alert('Successful');</script>";
					} 
				else 
					{
						//echo "<script> alert('Check if the field contain special charecter, or contact an administrator');</script>";
						echo mysqli_error($con);
						return;
					}
		
	}

		
}
?>		
</div>
<div id="active" class="tabcontent">

			<p class="double">
			<?php
			include("search.php");
			?>
		</p>
			</div>
			
			<div id="view" class="tabcontent">

			<p class="double">
			<?php
			include("newbk.php");
			?>
		</p>
			</div>
			
  <div id="edit" class="tabcontent">

			<p class="double">
			<?php
			include("update.php");
			?>
		</p>
			</div>
  </center>
</body>
</html>
<?php
}
?>
