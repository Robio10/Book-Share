<html>
<body>
<?php

$con = mysql_connect("localhost","root","root") or die("could not connect to database");
session_start();

$email = $_POST["usernamesignup"];
$pass = $_POST["passwordsignup"];
$pass_confirm = $_POST["passwordsignup_confirm"]; 
// Connect to the database

if($pass != $pass_confirm)
{
?>
<script language="javascript">
    alert(" Password doesn't match ");
    location.href = "index.html#toregister";
</script>
<?php
}

// Select the database to use
 mysql_select_db("new_schema1") or die("could not find the database");

$sql="INSERT INTO new_table (user_name, password)
VALUES
('$_POST[usernamesignup]','$_POST[passwordsignup]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
?>
<script language="javascript">
    alert(" Congrats!!!! You are registered, Now log in");
    location.href = "index.php";
</script>
 <?php
mysql_close($con);
?>
</body>
</html>

