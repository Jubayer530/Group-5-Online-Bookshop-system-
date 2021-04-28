<?php
    require_once 'controllers/order_controller.php';
	require_once 'js/orderform.js';
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
 background-color:cyan;
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
<form action="" method="POST"  onsubmit="return validate()">
<!--<form action="order details.php" method="POST"  onsubmit="return validate()"> -->
<fieldset>
<legend><b>Buy Book</b></legend><br>
<table>
<tr>
					<td><span><b>User Name:</b></span></td>
					<td><span><input type="text" name="username" value="<?php echo $username;?>" placeholder="Name" id="username"></span>
					<span id="err_username"><?php echo $err_username;?></span>
</tr>
<tr>
					<td><span><b>Book Name:</b></span></td>
					<td><span><input type="text" name="bookname" value="<?php echo $bookname;?>" placeholder="Book" id="bookname"></span>
					<span id="err_bookname"><?php echo $err_bookname;?></span>
          </tr>
<tr>
					<td><span><b>Customer Mobile:</b></span></td>
					<td><span><input type="text" placeholder="Number" value="<?php echo $mobile;?>" name="mobile" id="mobile"></span>
					<span id="err_mobile"><?php echo $err_mobile;?></span>
</tr>
<tr>
					<td><b><span>Email:</b></span></td>
					<td><span><input type="text" name="email" value="<?php echo $email;?>" placeholder="email" id="email"></span>
					<span id="err_email"><?php echo $err_email;?></span>
</tr>
<tr>
					<td><b><span>Address:</b></span></td>
					<td><span><input type="text" name="address" placeholder="address" value="<?php echo $address;?>" placeholder="address" id="address"></span>
					<span id="err_address"><?php echo $err_address;?></span>
</tr>

<tr>
					<td><br><input type="submit" name="add" value="Confirm"></td>
 </tr>
</table>
</fieldset>
</form>
<br><b><u><a href = "booklist.php">BookList</a></b></u>
</body>
</html>