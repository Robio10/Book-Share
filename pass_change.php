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
 $result = mysql_query("SELECT * FROM new_table WHERE user_name='$email'");

$row = mysql_num_rows($result);
if($row != 0)
{
  while($rows=mysql_fetch_assoc($result))
  {
       $myusr= $rows['user_name'] ;
     }
   if($myusr==$email)
    {
    $sql = "UPDATE new_table SET password = '$pass' WHERE User_Name='$email' " or die ("this stuffed up");
	 header("Location: sign_in.html");
	 }   
	else 
     {
?>     
<script language="javascript">
    alert("Wrong Username");
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
    alert("Username incorrect.");
    location.href = "sign_in.html";
</script>
<?php
}


?>

</body>
</html>

