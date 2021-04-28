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
 background-color:lightgreen;
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
<body>
<h1> Customer </h1>
<img src = "images/pic3.jfif" width = "300px" height ="180px">
<p><b><u><h4><body>For the respective customers</h4></u></b>
Dear Customer,<br> This is a bookstore website. In this page a booklover customer finds everything. <br> 
Anyone can search books, order books, regestration his/her name.<br> 
We provide log in option given below.<br> 
If you want to get our service, then go to sign up option.<br>
After complete your registration, then you can go other links also and get our service.<br>
Thank you.</p>

<br><br><a href = "dashboard.php"><b>Go back</b></a>
<br><br><a href = "login.php?logout=true"><b>Log out</b></a>

</body>