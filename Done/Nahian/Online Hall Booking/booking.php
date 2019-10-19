<?php
include("include/db_config.php");	
?>
<html>
<head>
<title>
Donz Hall Booking
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
$status="Inactive";
$py="Not Complete";
$query="select * from hall where h_id=$slno";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_array($result);
		$hll=$rows['h_name'];
		$pr=$rows['price'];
		$rn=rand(1000,100000000000);
		?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<label><font color="#fff">Hall Name: <?php echo $hll." Price:".$pr;?></font></label><br><br><br>
		<form action="" method="post">
		<input type="text" name="name" placeholder="Individual/Organization Name" class="srctxt" required>
		<br>
		<input type="text" name="u_mo" placeholder="Telephone/Mobile Number" class="srctxt" required>
		<br>
		<input type="text" name="dt" Placeholder="mm/dd/yyyy" class="srctxt" required>
		<br>
		
<br>
<input type="submit" name="book" value="Book" id="btn"/>
</form>
<a href="index.php"><input type="submit" id="btn" value="Back"/></a>
</div></div>
</body>
</html>
<?php
if(isset($_POST['book']))
{
	$title=$_POST["name"];
	$mo=$_POST["u_mo"];
	$dt=$_POST["dt"];
	
	if( $title=="" || $mo=="" || $dt=="")
	{
		echo "<script> alert('All field required');</script>";
		return;
	}
	
	else
	{
		$query="insert into user_booking (u_name,u_mobile,h_id,b_date,amnt,h_active,ran_id,payment) values ('$title','$mo','$slno','$dt','$pr','$status','$rn','$py')";
		if(mysqli_query($con,$query))
		{
		echo "<script> alert('Successful Keep This Tracking Id ( $rn ) To Track Your Booking');</script>";
		}
		else
		{
			echo "<script> alert('Check if the field conatin special charecter or contact administrator');</script>";
		}
		}
	}
	?>
