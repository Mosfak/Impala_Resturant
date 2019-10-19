<?php
include("include/db_config.php");
?>
<html>
<head>
<title>Hall Online Bookiing || Search</title>
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
<input type="text" class="srctxt" name="src" placeholder="Search Job...">
<input type="submit" value="Search" class="btn" name="btnsrc">
</form>
</div>

</div>

<table id="t01">
		<tr>
			<th>Hall Name</th>
			<th>Place</th>
		</tr>

			<?php
if(isset($_POST["btnsrc"]))
{

			$src=$_POST["src"];
			if($src=="")
			{
				echo "<script> alert('Enter Some name');</script>";
				return;
			}
				else
				{
							$start=1;
							$limit=8;
							$query_page=mysqli_query($con,"select * from hall order by h_id desc ");
							$total=mysqli_num_rows($query_page);
						   if(isset($_GET['h_id']))
						   {

								$start=($_GET['h_id']-1)*$limit;
						   }
							else
							{
								$start=0;

							}
							if(isset($_POST['btnsrc']))
							{
									$page=ceil($total/$limit);
									 $query1="select * from hall where h_name like '$src%'order by h_id desc limit $start,$limit";
									 $result1=mysqli_query($con,$query1);
									if (mysqli_num_rows($result1) > 0) 
									 { 
									while($rows=mysqli_fetch_array($result1))
										{
								?>
											<tr>
											<td><?php echo $rows['h_name']?></td>
											<td><?php echo $rows['h_place']?></td>
											</tr>
											<tr>
											<br>
												<br>
												<td colspan="2"><a href="booking.php?Serial_no=<?php echo $rows['h_id'];?>"><input type="submit" class="b_btn" value="BOOK"></a></td>
											</tr>
								<?php
										}
									 }
							
								 else
								 {
									 echo "<script> alert('Hall Not Listed, Contact Us to Enter the Hall you Know');</script>";
								 }
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
