<html>
<head>
  <title>Generate Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
body{background-image:url("images/1.jpg");}
html,body{height:100%;}
.container{height:100%;}
footer{
      background-color:#000000;
      color: white;
      padding: 10px;
	  position:fixed;
	  bottom:0;
	  left:0;
	  right:0;
    }
header{
background-color:#000000;
color:#ffffff;
height:80px;
}
table{
color:#ffffff;
}
button{
width:100px;
}
</style>
</head>
<body>
<header class="container-fluid">
	<img src="images/logo.png" height="70" style="display:inline-block; float:left;" >
	<h1 align="center">Web Based Reporting Portal</h1>
</header>
<div class="container" style="width:60%;opacity: 0.85;background-color:#000000;color:#ffffff;">
<?php
include 'db.php';
$userid = $_POST['userid'];
$password=$_POST['password'];
$start = strtotime($_POST['start']);
$end = strtotime($_POST['end']);
$day1=date('j',$start);
$month1=date('n',$start);
$year1=date('Y',$start);
$day2=date('j',$end);
$month2=date('n',$end);
$year2=date('Y',$end);
$sql="select * from selfhelpdata where((u_date between '".$day1."' and '".$day2."')AND(u_month between '".$month1."' and '".$month2."')AND(u_year between '".$year1."' and '".$year2."'))";
$query=mysql_query($sql);
if(!$query)
echo"Failed"."<br>".mysql_error();
else
{
	if(mysql_num_rows($query))
	{
?>
<h2 align="Center">User Details</h2><hr>
	<table align="center" border ="3" width="90%" class="table table-bordered">
	<tr><th>Date</th><th>User ID</th><th>Department</th><th>Action</th></tr>
<?php
    while($result=mysql_fetch_array($query))
	{
 ?>
    <tr>
	<td><?php echo $result["d_Date"] ?></td>
	<td><?php echo $result["u_UserID"] ?></td>
	<td><?php echo $result["u_Department"] ?></td>
	<td><?php echo $result["u_Action"] ?></td>
	</tr>
    <?php
	}?>
	</table>
	<?php
	}
    else
	{
	?>
	<h3 align="center"><?php echo"No Data Avaiable" ?></h3>
	<?php
	}
}
?>
<form action ="login1.php" method="POST">
<br>
<center><button type="submit" class="btn btn-danger">Back</button></center>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</div>
<footer class="container-fluid text-center">
<p style=" font-size:100%;">All rights reserved copyright &#169; 2017 &nbsp; &nbsp; &nbsp; &nbsp;Designed By: Dhananjay Gambhir</p>
</footer>
</body>
</html>

