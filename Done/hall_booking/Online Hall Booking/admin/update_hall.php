<?php
session_start();
include("include/db_config.php");
if(!(isset($_SESSION['log_user'])))
			{
				header("location:check.php");
			}
			else
			{	
				?>
<html>
<head>
<title>
Ki Khubor Lait Kam
</title>
<link href="Assets/css/style.css" rel="stylesheet" />
<style>

#txt
{
	width:250px;
	border-style:groove;
	height:40px;
	border-radius:4px;
}
#fl
{
	width:250px;
	height:40px;
	border-radius:4px;
}
#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
.loginpad
{
padding-left:40px;
}
</style>
</head>
<body>

<center>
<?php
$slno=$_GET["Serial_no"];
$query="select * from hall where h_id=$slno";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_array($result);
		$ti=$rows['h_name'];
		$cn=$rows['h_place'];
		$pr=$rows['price'];
		?>
		<label>ID Number: <?php echo $slno;?></label><br>
<form action="" method="post">

<input type="text" name="ti" class="srctxt" value="
<?php 
echo $ti;
?>
"required>
		<br>
		<br>
		<input type="text" name="content" class="srctxt" value="
<?php 
echo $cn;
?>
"required>
		
		<input type="text" name="price" class="srctxt" value="
<?php 
echo $pr;
?>
"required>
<br>
<input type="submit" name="btn_update" value="Update" id="btn"/>
</form>
<a href="home.php"><input type="submit" id="btn" value="Back"/></a>
</div></div>
</body>
</html>
<?php
if(isset($_POST['btn_update']))
{
	$title=$_POST["ti"];
	$content=$_POST["content"];
	$pr=$_POST["price"];
	
	if( $title=="" || $content=="" || $pr=="")
	{
		echo "<script> alert('All field required');</script>";
		return;
	}
	
	else
	{
		$query="update hall set h_name='$title', h_place='$content', price='$pr' where h_id=$slno";
		if(mysqli_query($con,$query))
		{
		echo "<script> alert('Successful');</script>";
		}
		else
		{
			echo "<script> alert('Check if the field conatin special charecter or contact administrator');</script>";
		}
		}
	}
}
	?>
