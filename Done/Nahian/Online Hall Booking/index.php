<?php
include("include/db_config.php");

?>
<html>
<head>
<title>Hall Booking System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="Assets/css/style.css" rel="stylesheet" />
<link href="Assets/css/menu.css" rel="stylesheet" />
<style>
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
    background-color: #ccc;
    color: #000;
}
</style>
</head>
<body>
<header>
  <?php include("include/header.php");?>
</header>
<?php include("include/menu.php");?>
<div style="padding-left:50px; padding-right:50px;">
<form action="search.php" method="post">
<input type="submit" value="Search Hall" class="btn">
</form>
</div>
<section>
    <article>
    <h1>Hall Section</h1>
<table id="t01">
<?php
		$start=1;
		$limit=5;
		$query_page=mysqli_query($con,"select * from hall order by h_id desc");
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
 $query="select * from hall order by h_id desc limit $start,$limit";
	 $result=mysqli_query($con,$query);
	if (mysqli_num_rows($result) > 0) 
	 { 
while($rows=mysqli_fetch_array($result))
		{
?>
  <tr>
    <th><?php echo $rows['h_name'];?></th>
	<th>Price</th>
	<th>Action</th>
  </tr>
  <tr>
    <td><?php echo $rows['h_place'];?></td>
	<td><?php echo $rows['price'];?></td>
	<td><a href="booking.php?Serial_no=<?php echo $rows['h_id'];?>"><input type="submit" class="b_btn" value="BOOK"></a></td>
			
  </tr>
		<?php
		}
		?>
 
  	 <?php
	 }
	 ?>
</table>
<?php
 for($i=1;$i<= $page;$i++)
 {
 ?>
 <br>
    <a href="?id=<?php echo $i;?>"><input type="submit" value="<?php echo $i;?>"></a>
  <?php
 }
  ?>
</p>
			   
</div>
  
  </article>
</section>
<?php include("include/footer.php");?>
</body>
</html>
