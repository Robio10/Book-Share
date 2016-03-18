<?php
    session_start();
    $var_value = $_SESSION['loginuser'];
    if(!isset($_SESSION['loginuser'])) 
    {
        header("Location: sign_in.html");  
    }
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
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
        <link rel="stylesheet" type="text/css" href="css/Button.css" />
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
                <li><a class="arrow">New release</a>
                </li>
                <li><a class="arrow" href="book-share.php">Share Book</a>
                </li>
            </ul>
            </li>
            <li><a href="index.php">Home</a></li>
    </ul>
        </body>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <span class="right">
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <br><br><br><br><br><br>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form class="form-wrapper cf" action="book_share_comp.php" autocomplete="on" method = "post">
	                            <input id="bookname" name="bookname" type="text" placeholder="Book name" required>
                                <input id="days" name="days" type="number" placeholder="Days Available(optional-default is 7)" required>
	                            <p "class="pos_left"> 
                                    <input type="submit" value="Reserve" /> 
								</p>
                            </form>
                        </div>
    </body>
</html>
