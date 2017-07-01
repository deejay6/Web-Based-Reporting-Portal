<html>
<head>
  <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
body{background-image:url("images/bg.jpg");}
html,body{height:100%;}
footer{
      background-color:#000000;
      color: white;
      padding: 10px;
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
$userid1 = $_POST['userid'];
$password1=$_POST['password'];
//echo $userid;
//echo $password;
?>
<script language=javascript>
function validate()
{
var myform=document.registrationform;
if(myform.name.value=="" ||myform.name.value.length>20)
{
alert("Name Cannot Be Blank and Should Not Exceeds The Word Limit of 20 words");
return false;}
if(myform.userid.value==""||(myform.userid.value.length>15))
{
alert("UserID cannot be blank/length should be between 5-15");
return false;}
if(myform.age.value=="")
{
alert("Age Cannot Be Blank");
return false;}
if(myform.address.value=="" ||myform.address.value.length>200)
{
alert("Address cannot be blank and should not exceeds the world limit of 200 words");
return false;}
if(myform.phone.value=="" || (myform.phone.value.length!=10) || (isNaN(myform.phone.value)))
{
alert("Enter Valid Contact Number");
return false;}
if(myform.email.value=="" || myform.email.value.indexOf("@")==-1 )
{
alert("Enter Valid Email ID");
return false;}
if(myform.password.value=="")
{alert("Password Cannot Be Blank");
return false;}
if((myform.gender[0].checked == false) && (myform.gender[1].checked==false))
{alert("Please Select The Gender");
return false;}


return true;}
</script>
</head>
<body>
<header class="container-fluid">
	<img src="images/logo.png" height="70" style="display:inline-block; float:left;" >
	<h1 align="center">Web Based Reporting Portal</h1>
</header>
<div class="container"style="width:60%;opacity: 0.92;filter: alpha(opacity=92);background-color:#000;">
<h2 text align = "center"style="color:#fff;">Enter User Details</h2><hr>
<form class="form-horizontal" action="add1.php" name="registrationform" onsubmit="return validate()"  method="POST">
    <div class="form-group"><br>
      <label class="control-label col-sm-2" style="color:#fff;">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="Enter Name"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">User ID</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="userid" placeholder="Enter User ID"><br>
      </div>
    </div>
	
     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Age</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="age" placeholder="Enter Age"><br>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Address</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="address" placeholder="Enter Address"><br>
      </div>
    </div>


     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Contact</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="phone" placeholder="Enter Contact Number"><br>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Email</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="email" placeholder="Enter Email Address"><br>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:#fff;">Password </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id ="pwd" name="password" placeholder="Enter Password"><br>
      </div>
    </div>

     <div class="form-group">
	<label class="control-label col-sm-2" style="color:#fff;">Gender </label>
	<div class=" col-sm-1">	     	
		<div class="radio">
     			<label style="color:#fff;"><input type="radio" name="gender" value="Male">Male</label>
     		</div>
	</div>
	<div class=" col-sm-1">	     	
		<div class="radio">
     			<label style="color:#fff;"><input type="radio" name="gender" value="Female">Female</label>
     		</div>
	</div>
     </div>	
   <div class="form-group">        
	<center><button type="submit" class="btn btn-success">Submit</button></center>
	<input type="hidden" name="userid1" value="<?php echo $userid1?>" >
    <input type="hidden" name="password1" value="<?php echo $password1?>" >
    </div>
  </form>
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