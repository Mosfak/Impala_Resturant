<?php
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
table{
color:#fff;
}
table{
color:#000;
border:none;
background-color:green;
}
th{
font-size:16px;
background-color:black;
color:#fff;
}
td
{
	background-color:#fff;
}
</style>
<title>Ki Khubor Lait Kam</title>
<link href="Assets/css/style.css" rel="stylesheet" />
</head>
<body>
<center>
 <table border="1" width="900" id="customers">
		<tr>
			<th>Hall Name</th>
			<th>Place</th>
			<th>Price</th>
			<th colspan="2">Action</th>
		</tr>

			<?php
		
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
	$page=ceil($total/$limit);
	 $query1="select * from hall order by h_id desc limit $start,$limit";
	 $result1=mysqli_query($con,$query1);
	if (mysqli_num_rows($result1) > 0) 
	 { 
	while($rows=mysqli_fetch_array($result1))
		{
?>
			<tr>
			<td><?php echo $rows['h_name']?></td>
			<td><?php echo $rows['h_place']?></td>
			<td><?php echo $rows['price']?></td>
			<td> <a href="update_hall.php?Serial_no=<?php echo $rows['h_id'];?>"><input type="submit" value="Update"></a></td>
			
			</tr>
<?php
		}
	 }
?>
  </table>
  </center>
  </div>
  </div>
</body>
</html>
<?php
			}
	?>