<html>
<head>
  <title>Search Reports</title>
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
<script>
function validate()
{
var myform=document.form1;
if(myform.search1.value=="")
{ alert("Enter UserID");
return false;
}
return true;
}
</script>
<?php
$userid = $_POST['userid'];
$password=$_POST['password'];
?>
</head>
<body>
<header class="container-fluid">
	<img src="images/logo.png" height="70" style="display:inline-block; float:left;" >
	<h1 align="center">Web Based Reporting Portal</h1>
</header>
<div class="container" style="width:60%;opacity: 0.85;background-color:#000000;color:#ffffff;">
<h2 align="center">Search Reports</h2><hr>
<form action="search1.php" method="POST" name="form1" onsubmit="return validate()">
<table border="0" align="center" width="70%">
<tr>
<td width="50%><label class="control-label" style="color:#fff;">Enter UserID</label></td>
<td><input type="text" class="form-control" name="search1" placeholder="Enter UserID"></td>
</tr>
</table>
<br><center><button type="submit" class="btn btn-success">Search</button></center>
<input type="hidden" name="userid" value="<?php echo $userid?>" >
<input type="hidden" name="password" value="<?php echo $password?>">
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
