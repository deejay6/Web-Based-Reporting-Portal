<html>
<body>
<?php
include 'db.php';
session_start();
$userid=$_POST['userid'];
if(($userid))
{session_destroy();
header("location:index.html");
}
else
echo"error occured";
?>
</body>
</html>