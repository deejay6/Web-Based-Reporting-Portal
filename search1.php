 <html>
<head>
  <title>Search Report</title>
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
<div class="container" style="width:60%;opacity: 0.85;background-color:#000000;color:#ffffff;">
<?php
include 'db.php';
$search = $_POST["search1"];
$userid = $_POST['userid'];
$password=$_POST['password'];
$sql="SELECT * FROM mh_user_info WHERE(mh_user_id='".$search."')";
$query=mysql_query($sql);
if(!$query)
echo"Failed"."<br>".mysql_error();
else
{
	if(mysql_num_rows($query))
	{
    while($result=mysql_fetch_array($query))
	{
	?>
	<h2 align="center">User Details</h2>
	<table border="0" align="center" width="70%">
	<tr>
	<td width="50%" align="left"><label class="control-label" style="color:#fff;">Name</label></td>
	<td><input type="text" class="form-control" value="<?php echo $result["mh_user_id"]?>" readonly></td>
	</tr>
	<tr>
	<td width="50%" align="left"><br><label class="control-label" style="color:#fff;">Passport Number</label></td>
	<td><br><input type="text" class="form-control" value="<?php echo $result["mh_user_ic"]?>" readonly></td>
	</tr>
	<tr>
	<td width="50%" align="left"><br><label class="control-label" style="color:#fff;">Security Question 1</label></td>
	<td><br><input type="text" class="form-control" value="<?php echo $result["mh_quest_1"]?>" readonly></td>
	</tr>
	<tr>
	<td width="50%" align="left"><br><label class="control-label" style="color:#fff;">Answer</label></td>
	<td><br><input type="text" class="form-control" value="<?php echo $result["mh_ans_1"]?>" readonly></td>
	</tr>
	<tr>
	<td width="50%" align="left"><br><label class="control-label" style="color:#fff;">Security Question 2</label></td>
	<td><br><input type="text" class="form-control" value="<?php echo $result["mh_quest_2"]?>" readonly></td>
	</tr>
	<tr>
	<td width="50%" align="left"><br><label class="control-label" style="color:#fff;">Answer</label></td>
	<td><br><input type="text" class="form-control" value="<?php echo $result["mh_ans_2"]?>" readonly></td>
	</tr>
    <?php
	}?>
	</table>
	<?php
	}
    else
	{
	?>
	<h3 align="center"><?php echo"No UserID Exist" ?></h3>
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