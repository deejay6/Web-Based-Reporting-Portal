<html>
<head>
  <title>Change Password</title>
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
width:90px;
}
</style>
<header class="container-fluid">
	<img src="images/logo.png" height="70" style="display:inline-block; float:left;" >
	<h1 align="center">Web Based Reporting Portal</h1>
</header>
<div class="container" style="width:60%;opacity: 0.85;background-color:#000000;color:#ffffff;">
<?php
include 'db.php';
$userid = $_POST['userid'];
$password=$_POST['password'];
$change = $_POST['change'];
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
 $sql2 = "update user set password='".$change."' where userid='".$userid."'";
 $query2=mysql_query($sql2);
 if(!$query)
{echo mysql_error();}
else
{
?>
<h2 align ="center"><?php echo"Your Password is Changed Successfully!!!"?></h2>
<form action ="login1.php" method="POST">
<br>
<center><button type="submit" class="btn btn-success">Back</button></center>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $change?>" >
</form>
<?php
}}
else if($result1[0])
{
 $sql3 = "update admin set a_password='".$change."' where a_id='".$userid."'";
 $query3=mysql_query($sql3);
 if(!$query)
{echo mysql_error();}
else
{
?>
<h3><?php echo"Your Password is Changed Successfully!!!"?></h3>
<form action ="login1.php" method="POST">
<br>
<center><button type="submit" class="btn btn-danger">Back</button></center>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $change?>" >
</form>
<?php
}}
?>
</div>
<footer class="container-fluid text-center">
<p style=" font-size:100%;">All rights reserved copyright &#169; 2017 &nbsp; &nbsp; &nbsp; &nbsp;Designed By: Dhananjay Gambhir</p>
</footer>
</body>
</html>