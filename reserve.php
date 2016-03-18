						<?php
								session_start();
        						$con = mysql_connect("localhost","root","root") or die("could not connect to database");;
                                if(! $con)
                                {
                                    die('Connection Failed'.mysql_error());
                                }
        
                                session_start();
                                $User_name = $_GET['user_name'];
                                $Book_name = $_GET['book_name'];
                                 mysql_select_db("new_schema1") or die("could not find the database");
                                //echo "hii ",$User_name," ",$Book_name;
                             /*   $sql="INSERT INTO new_table1 (User_Name, Book_name , Phone_Number)
VALUES
('Kishor','Ramesh','7896363663')";*/
$sql = "UPDATE new_table1 SET Sharing_Status = 'NOT' WHERE User_Name='$User_name' " or die ("this stuffed up");
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

                            
        						mysql_close($con);
        						
							?>
								<script language="javascript">
    							alert("Book registered!!!");
    							location.href = "index.php";
								</script>
	
