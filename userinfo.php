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

<h1>Profile Page</h1>
<img src = "images/pic1.jfif" width = "286px" height = "140px">
<img src = "images/pic2.jfif" width = "286px" height = "140px">

<h3><p><br>Hello! Customer!</p></h3>
<h3>Your Profile Information are: </h3>
<table>

<th>First Name</th>
<th><th>Email</th>
<th><th>Address</th>
<th><th>Phone No</th>
<th><th>NID</th>
<th><th>Type</th>
<th><th>DOB</th>

<tr><td>1. Jubayer</td>
<td><td>jubayer22@gmail.com</td>
<td><td>Gopalganj</td>
<td><td>123456896</td>
<td><td>213654799</td>
<td><td>Customer</td>
<td><td>22-08-1997</td>

<tr><td>2. Ragib</td>
<td><td>abrar@gmail.com</td>
<td><td>Chattogram</td>
<td><td>123456789</td>
<td><td>213654799</td>
<td><td>Customer</td>
<td><td>17-06-1998</td>

<tr><td>3. Tasnim</td>
<td><td>tasnim@gmail.com</td>
<td><td>Chattogram</td>
<td><td>123456666</td>
<td><td>201203044</td>
<td><td>Customer</td>
<td><td>20-08-1999</td>

<tr><td>4. Ishtique</td>
<td><td>ishtique@gmail.com</td>
<td><td>Chattogram</td>
<td><td>123456336</td>
<td><td>201202244</td>
<td><td>Customer</td>
<td><td>12-06-1997</td>
</table><br>

<a href = "addinfo.php"><b>Add information</b></a><br><br>
<a href = "dashboard.php"><b>Options</b></a><br><br>
<a href = "login.php"><b>Log out</b></a>

</body>
</html>