<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jquery.1.4.2.js"></script>
<script type="text/javascript" src="jsDatePick.jquery.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
	});
	};
</script>
</head>
<style>
body {
    background-image: url("image11.jpg");
}
input[type=radio] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
	display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4747d1;
    color: white;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:20px;
}
input[type=password]{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=email] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=tel] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]:hover {
    background-color: red;
}
div {
    border-radius: 5px;
    padding: 10px;
    font-size:25px;;
}
</style>

<!--<h1  text align = "center">ENTER USER DETAILS</h1>-->
<form action = "user.php" method = "POST">
<p text align = "center">
Username
<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="username"  pattern=".{2,10}." oninvalid="alert('Username must require atleast three characters')" title ="Username rquired" required><br>
<!--Name
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="name" maxlength="32" title ="Enter your Full Name" required><br>
-->DOB(yyyy-mm-dd)
:<input type = "text" name ="dob" size = "12" id="inputField" oninvalid="alert('Please enter the date in mentioned format')" required><br>
<!--Address
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="address" title = "Enter your permanent address" required><br>
Contact No.
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="tel" name="nu" pattern = ".{9,9}."  oninvalid="alert('Enter the valid 10 Digit mobile number')" title = "Contact No. Required" required><br>
Email address
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="email" name="eaddress"  oninvalid="alert('Please enter the valid email address')" title="Email Address required" required><br>
Password
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="password" name="pass"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,12}." title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="12"  oninvalid="alert('Password Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters')" required title="3-12 characters required" ><br>
Gender
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="radio" name="sex" value="male" required>Male
<input type="radio" name="sex" value="female" required>Female<br>
<input type="submit" id = "Sign Up" value="Sign Up">
-->
</p>
</form>
</html>

