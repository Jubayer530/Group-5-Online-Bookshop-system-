<?php 
  require_once "controllers/addinfo_con.php";
  require_once "js/add_info.js";
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
background-color:lightblue;
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
<!--<form action="info change.php" onsubmit="return validate()" method="POST"> -->
<form action="" onsubmit="return validate()" method="POST">
<fieldset>
<legend><b>Change Info</b></legend><br>
<table>
     <tr>
     <td><span><b>Change Username:</b></span></td>
     <td><span><input type="text" name="username" value="<?php echo $username;?>"placeholder="name" id="uname"></span>
     <span id="err_uname"><?php echo $err_username;?></span>
     </tr>
     
     <tr>
   	 <td><span><b>Password:</b></span></td>
     <td><span><input type="Password" name="password" value="<?php echo $password;?>"placeholder="password" id="password"></span>
     <span id="err_password"><?php echo $err_password;?></span><br>
     </tr>
     
     <tr>
     <td><span><b>Change Email:</b></span></td>
	   <td><span><input type="text" name="email" value="<?php echo $email;?>"placeholder="email" id="email"></span>
	   <span id="err_email"><?php echo $err_email;?></span><br>
     </tr>
     
     <tr>
     <td><span><b>Change Phone: </b></span></td>
	 <td><span><input type="text" name="phone" value="<?php echo $phone;?>"placeholder="number" id="phone"></span>
	 <span id="err_phone"><?php echo $err_phone;?></span><br>
     </tr>

     <tr>
     <td><span><b>Add Credit card:</b></span>
     <td><input type="text" name="card" value="<?php echo $card;?>"placeholder="number">   [Optional]
     </tr>

     <tr>
     <td><br><input type="Submit" name="Update" value="Update"></td>
     </tr>

</table>
</fieldset>
</form>
<br><b><u><a href ="http://localhost/j/final/userinfo.php">UserInfo</a></b></u>
</body>
</html>