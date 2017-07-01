<html>
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
body{background-color: #f3f3f3;}
</style>
</head>
<body>
<div class="container" style="width:80%;">
<table style="width:80%;align:center;border:0">
<tr>
<td width="50%">
<h3>Generate Reports</h3>
</td>
<br>
<td>
<form action="generate.php" method="POST">
<button type ="submit" class="btn btn-primary btn-block">Generate Reports</button>
</form>
</td></tr>
<tr>
<td width="50%">
<h3>Search Reports</h3>
</td>
<td>
<form action="search.php" method="POST">
<button type ="submit" class="btn btn-primary btn-block">Search Reports</button>
</form>
</td></tr>
<tr>
<td width="50%">
<h3>Change Password</h3>
</td>
<td>
<form action="change.php" method="POST">
<button type ="submit" class="btn btn-primary btn-block">Change Password</button>
</form>
</td></tr>
</table>
</div>
</body>
</html>
