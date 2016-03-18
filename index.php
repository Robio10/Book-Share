<?php
    session_start();
    $var_value = $_SESSION['loginuser'];
    if(!isset($_SESSION['loginuser'])) 
    {
        header("Location: sign_in.html");  
    }
?>
<!DOCTYPE>
<html>
<head>
	<link href="css/dropdown.css" rel="stylesheet">
    <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Book Sharing Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Book Sharing Portal" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link href="css/Book_Table.css" rel="stylesheet">
		
</head>
<body>
            <ul class="menuH decor1">
            <li><a class="arrow">Welcome</a>
            <ul>
                <li><a class="arrow"> <?php session_start();$var_value = $_SESSION['loginuser']; echo $_SESSION['loginuser']; ?></a>
                </li>
                <li><a class="arrow">Account</a>
                </li>
                <li><a class="arrow" href="logout.php">Logout</a>
                </li>
            </ul>
            </li>
            <li><a class="arrow">About Us</a></li>
            <li><a class="arrow">Books Query</a>
            <ul>
                <li><a class="arrow" href="search_Box.php">Search</a>
                </li>
                
                <li><a class="arrow" href="book-share.php">Share Book</a>
                </li>
            </ul>
            </li>
            <li><a href="index.php">Home</a></li>
    </ul>
</body>
<body>
<br>
<table class="bordered" align="center" margin-top = "100px">
    <thead>

    <tr>
        <th>Serial No.</th>        
        <th>User Name</th>
        <th>Book Name</th>
        <th>ISBN Number</th>
        <th>Phone Number</th>
        <th>Days Available</th>
        <th>Reserve Book</th>
    </tr>
    </thead>
     <?php
        $con = mysql_connect("localhost","root","root");
                                if(! $con)
                                {
                                    die('Connection Failed'.mysql_error());
                                }
                                session_start();
                                $key = $_POST["bookname"];
                                $_SESSION['books'] = $key;
                                mysql_select_db("new_schema1",$con);
                                $sql = "SELECT User_Name, Book_Name, Sharing_Status, Days_Available, ISBN_Number, Phone_Number FROM new_table1";
                                $retval = mysql_query( $sql, $con);
                                if(! $retval )
                                {
                                  die('Could not get data: ' . mysql_error());
                                }
                                $count = 1;$link_address="reserve.php";
                                while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                                {
                                	if($row['Sharing_Status']=='Available' && $row['User_Name']!=$_SESSION['loginuser'])
                                    {
                                        echo "<tr>";
                                        echo "<td>".$count."</td>"; 
                                        echo "<td>".$row['User_Name']."</td>";
                                        echo "<td>".$row['Book_Name']."</td>";
                                        echo "<td>".$row['ISBN_Number']."</td>";
                                        echo "<td>".$row['Phone_Number']."</td>";
                                        echo "<td>".$row['Days_Available']."</td>";
                                        echo "<td>"."<a href='reserve.php?user_name=".$row['User_Name']."&book_name=".$row['Book_Name']."'>Reserve</a>"."</td>";
                                        echo "<tr>";
                                        $count++;
                                     }
                                    
                                } 
                                ?>
</table>

<br>
    
</body>
</html>
