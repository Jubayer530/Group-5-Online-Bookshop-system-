<?php 
    session_start();
    if(!isset($_SESSION["users"]))   // Destroying All Sessions
    { 
        header("Location: login.php"); // Redirecting To Home Page
    }
?>
<html>
<head>
<style>
body{
    background-color: lightblue;
    }
    a:link, a:visited {
              background-color: green;
              color: white;
              padding: 8px 16px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
            }            
</style>
</head>
<body bgcolor = "">

<h3>Welcome  <?php echo $_SESSION["users"];?></h3>
<h3><b><u>Options:</u></b></h3>

<img src = "images/pic5.jfif" width = "240px" height = "140px">
<td><img src="images/pic7.jfif" width="240px" height="140px"></td>
<img src = "images/pic8.jpg" width = "240px" height = "140px">
<br><br><br><a href = "userinfo.php"><b>User Information</b></a>
<br><br><a href ="booklist.php"><b>Book List</b></a>
<br><br><a href ="mainpage.php"><b>About us</b></a>
<br><br><a href ="admin_login.php"><b>Admin Panel Login</b></a>
<br><br><a href = "login.php?logout=true"><b>Log out</b></a>

</body>
</html>