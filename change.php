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
width:100px;
}
</style>
<?php
$userid = $_POST['userid'];
$password=$_POST['password'];
//echo $userid;
//echo $password;
?>
<script>
function validate()
{
var myform=document.form1;
var current = "<?php echo $password?>";
if(myform.current.value=="" || myform.current.value!=current)
{ alert("Enter Correct Current Password");
return false;
}
if(myform.change.value==""||myform.change1.value==""||myform.change.value != myform.change1.value)
{alert("Your Password Doesn't Macth");
return false;
}
return true;
}
</script>
</head>
<body>
<header class="container-fluid">
	<img src="images/logo.png" height="70" style="display:inline-block; float:left;" >
	<h1 align="center">Web Based Reporting Portal</h1>
</header>
<div class="container" style="width:60%;opacity: 0.85;background-color:#000000;color:#ffffff;">
<h2 align="center">Change Password</h2><hr>
<form  action="change1.php" name="form1" onsubmit="return validate()" method="POST">
<table border="0" align="center" width="80%">
<tr>
<td width="50%"><label class="control-label" style="color:#fff;">Enter Current Password:</label> </td>      
<td align="left"><input type="password" class="form-control" name="current" placeholder="Current Password"></td>
</tr>
<tr>
<td width="50%"><br><br><label class="control-label" style="color:#fff;">Enter New Password:</label></td>      
<td align="left"><br><br><input type="password" class="form-control" name="change" placeholder="New Password"></td>
</tr>
<tr>
<td width="50%"><br><br><label class="control-label" style="color:#fff;">Confirm Password:</label> </td>      
<td><br><br><input type="password" class="form-control" name="change1" placeholder="Confirm Password"></td>
</tr></table>
<br>
<center><button type="submit" class="btn btn-success">Submit</button></center>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>" >
</form>
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