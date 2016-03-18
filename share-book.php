<?php
//echo "hii \r\n";
$con = mysql_connect("localhost","root","root") or die("could not connect to database");
session_start();
$user = $_SESSION['varname'];
//echo $user;
$email = $_POST["name"];
//echo " ",$email;
$phone = $_POST["tel"];
//echo " ",$phone;
//echo "  hii1 ";
if(!empty($_POST["password"]))
{$isbn = $_POST["password"];}
else $isbn = NULL;


if(!empty($_POST["days"]))
$days = $_POST["days"];
else $days = NULL; 
 //echo "hii2 \r\n";
// Connect to the database

/*if($pass != $pass_confirm)
{
?>
<script language="javascript">
    alert(" Password doesn't match ");
    location.href = "index3.html#toregister";
</script>
<?php
}*/

// Select the database to use
 mysql_select_db("new_schema1") or die("could not find the database");

$sql="INSERT INTO new_table1 (User_Name,Book_Name,Sharing_Status,ISBN_Number,Days_Available,Phone_Number)
VALUES
('$user','$email','Available','$isb','$days','$phone' )";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
?>
<script language="javascript">
    alert(" Congrats!!!! book registered");
    location.href = "index.php";
</script>
 <?php
mysql_close($con)
?>

