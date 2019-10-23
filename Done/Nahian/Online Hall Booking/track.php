<?php
include("include/db_config.php");
?>
<html>
<head>
<title>Search</title>
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
p.double {border-style: double;}

table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</style>


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
<div style="padding-left:50px; padding-right:50px;">
<form action="" method="post">
<input type="text" class="srctxt" name="src" placeholder="Enter Your Tracking Id Or Telephone/Mobile Number">
<input type="submit" value="Search" class="btn" name="btnsrc">
</form>
</div>

</div>

<table id="t01">
		<tr>
			<th>Hall Name</th>
			<th>Status</th>
		</tr>

			<?php
if(isset($_POST["btnsrc"]))
{

			$src=$_POST["src"];
			if($src=="")
			{
				echo "<script> alert('Enter Your Tracking ID');</script>";
				return;
			}
			else
			{
					$query1="select * from user_booking where ran_id='$src' or u_mobile='$src'";
					$result1=mysqli_query($con,$query1);
					if (mysqli_num_rows($result1) > 0) 
					 { 
						$rows=mysqli_fetch_array($result1);
					
								?>
											<tr>
											<td><?php echo $rows['u_name']?></td>
											<td><?php echo $rows['h_active']?></td>
											</tr>
								<?php
					}
							
					else
					{
					 echo "<script> alert('Hall Not Listed, Contact Us to Enter the Hall you Know');</script>";
					}
				}			
}
					?>
  </table>

  </center>
</div>
</div>
</section>
<?php include("include/footer.php");?>
</body>
</html>
