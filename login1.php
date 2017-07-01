<html>
<head>
  <title>Login Page</title>
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
width:200px;
}
</style>
</head>
<body>
<header class="container-fluid">
	<img src="images/logo.png"" height="70" style="display:inline-block; float:left;" >
	<h1 align="center">Web Based Reporting Portal</h1>
</header>
<div class="container" style="width:60%;opacity: 0.85;background-color:#000000;color:#ffffff;">
<?php
include 'db.php';
session_start();
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="SELECT * FROM user WHERE(userid='".$userid."' and password='".$password."')";
$sql1="SELECT count(*) FROM admin WHERE(a_id='".$userid."' and a_password='".$password."')";
$query=mysql_query($sql);
$query1=mysql_query($sql1);
if(!$query)
{echo mysql_error();}
else
{$result=mysql_fetch_array($query);}
if(!$query1)
{echo mysql_error();}
else
{$result1=mysql_fetch_array($query1);}
if($result[0])
{
	$_SESSION['user']=$result[0];
	// echo"Welcome  ".$_SESSION['user'];
?>
                           <!--User Login -->
<h1 align="center"><?php echo"Welcome  ".$_SESSION['user'];?></h1>
<br><br>
<table width="70%" align="center" border="0">
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Generate Reports</label> </td>
<td>
<form action="generate.php" method="POST">
<button type ="submit" class="btn btn-danger btn-md">Generate Reports</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Search Reports</label></td>
<td>
<form action="search.php" method="POST">
<button type ="submit" class="btn btn-warning btn-md">Search Reports</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Change Password</label> </td>
<td>
<form action="change.php" method="POST">
<button type ="submit" class="btn btn-success btn-md">Change Password</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
</table>
<form action ="logout.php" method="POST">
<center><button type="submit" class="btn btn-danger" style="width:100px;">Logout</button></center>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
</form>
<?php
}
else if($result1[0])
{
?>
                            <!--Admin Login -->
<h1 align="center">Welcome Admin</h1>
<br><br>
<table width="70%" align="center" border="0">
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Generate Reports</label></td>
<td>
<form action="generate.php" method="POST">
<button type ="submit" class="btn btn-danger btn-md">Generate Reports</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Search Reports</label></td>
<td>
<form action="search.php" method="POST">
<button type ="submit" class="btn btn-primary btn-md">Search Reports</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Change Password</label></td>
<td>
<form action="change.php" method="POST">
<button type ="submit" class="btn btn-success btn-md">Change Password</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Add Users</label></td>
<td>
<form action="add.php" method="POST">
<button type ="submit" class="btn btn-info btn-md">Add Users</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Delete Users</label></td>
<td>
<form action="delete.php" method="POST">
<button type ="submit" class="btn btn-warning btn-md">Delete Users</button>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
</td></tr>
</table><br>
<form action ="logout.php" method="POST">
<center><button type="submit" class="btn btn-danger" style="width:100px;">Logout</button></center>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
</form>
<?php
}
else
{	
?>
<h1 align="center"><?php echo"Invalid Login Credentials";?> </h1>
<br><br><br>
<form action="index.html" method="POST">
<div align="center">
<button type ="submit" class="btn btn-danger" style="width:90px;">Back</button>
</form>
</div>
<?php
}
?>
</div>
<footer class="container-fluid text-center">
<p style=" font-size:100%;">All rights reserved copyright &#169; 2017 &nbsp; &nbsp; &nbsp; &nbsp;Designed By: Dhananjay Gambhir</p>
</footer>
</body>
</html>
