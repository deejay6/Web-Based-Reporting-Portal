<html>
<head>
  <title>Delete User</title>
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
<header class="container-fluid">
	<img src="images/logo.png" height="70" style="display:inline-block; float:left;" >
	<h1 align="center">Web Based Reporting Portal</h1>
</header>
<div class="container" style="width:70%;opacity: 0.85;background-color:#000000;color:#ffffff;">
<?php
include 'db.php';
session_start();
$userid1 = $_POST['userid'];
$password1=$_POST['password'];
$sql="SELECT * FROM user ";
$query = mysql_query($sql);
if(!$query)
echo"Failed"."<br>".mysql_error();
else
{
	if(mysql_num_rows($query))
	{
	?>
	<h2 align="Center">User Details</h2><hr>
	<table align="center"  class="table table-bordered">
	<tr><th>Name</th><th>User ID</th><th>Age</th><th>Address</th><th>Phone</th><th>Email</th><th>Password</th><th>Gender</th><th>Delete</th></tr>
	<?php
    while($result=mysql_fetch_array($query))
	{
	?>
	<tr>
	<td><?php echo $result["name"] ?></td>
	<td><?php echo $result["userid"] ?></td>
	<td><?php echo $result["age"] ?></td>
	<td><?php echo $result["address"] ?></td>
	<td><?php echo $result["phone"] ?></td>
	<td><?php echo $result["email"] ?></td>
	<td><?php echo $result["password"] ?></td>
	<td><?php echo $result["gender"] ?></td>
	<td>
	<form action ="delete1.php" method="POST">
	<button type="submit" class="btn btn-danger">Delete<span class="glyphicon glyphicon-trash"></span></button>
	<input type="hidden" name="userid2" value="<?php echo $result["userid"]?>">
	<input type="hidden" name="userid" value="<?php echo $userid1?>" >
    <input type="hidden" name="password" value="<?php echo $password1?>" >
	</form>
	</td>	
	</tr>
    <?php
	}?>
	</table>
	<?php
	}
    else
	{
	?>
	<h3 align="center"><?php echo"No User Avaiable" ?></h3>
	<?php
	}
}
?>
<br>
<form action="login1.php" method="POST">
<center><button type="submit" class="btn btn-danger">Back</button></center>
<input type="hidden" name="userid" value="<?php echo $userid1?>" >
<input type="hidden" name="password" value="<?php echo $password1?>" >
</form>
</div>
<footer class="container-fluid text-center">
<p style=" font-size:100%;">All rights reserved copyright &#169; 2017 &nbsp; &nbsp; &nbsp; &nbsp;Designed By: Dhananjay Gambhir</p>
</footer>
</body>
</html>

