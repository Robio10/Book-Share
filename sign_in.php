<?php

$con = mysql_connect("localhost","root","root");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
session_start();
$email = $_POST["username"];
$pass = $_POST["password"];
// Connect to the database

// Select the database to use
mysql_select_db("new_schema1",$con);
$result = mysql_query("SELECT * FROM new_table WHERE user_name='$email'");

$row = mysql_num_rows($result);
if($row != 0)
{
  while($rows=mysql_fetch_assoc($result))
  {
       $myusr= $rows['user_name'] ;
	   $mypass= $rows['password'] ;
     }
   if($myusr==$email && $mypass==$pass)
    {
    $_SESSION['loginuser'] = $email;
	 header("Location: index.php");
	 }   
	else 
     {
?>     
<script language="javascript">
    alert("Wrong Username or Password");
    location.href = "sign_in.html";
</script>
<?php
      //header("Location: sign_in.html");
	   }	
}
else
{
?>     
<script language="javascript">
    alert("Username or Password is incorrect.");
    location.href = "sign_in.html";
</script>
<?php
}


?>

