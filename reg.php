<?php 
  require_once "controllers/reg_controller.php";
  require_once "js/reg.js";
  require "js/ajax.js";
  //require_once "checkUserName.php";
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
 <form action="" method="POST" onsubmit="return validate()" >
 <fieldset>
 <legend><b><h3>Registration</h3></b></legend>
 <body>

 <table>

 <tr>
					<td><span>Full Name: </span></td>
					<td><span><input type="text" name="name" value="<?php echo $name;?>"placeholder="name" id="name"></span>
					<span id="err_name"><?php echo $err_name;?></span>
 </tr>
 <tr>
					<td><span>Username: </span></td>
					<td><span><input type="text" name="username" onfocusout="checkUserName(this)" value="<?php echo $username;?>"placeholder="name" id="username"></span>
					<span id="err_username"><?php echo $err_username;?></span>
 </tr>
 <tr>
      				<td><span>Password:</span></td>
      				<td><span><input type="Password" name="password" value="<?php echo $password;?>"placeholder="password" id="password"></span>
      				<span id="err_password"><?php echo $err_password;?></span>
 </tr>
 <tr>
					<td><span>Country: </span></td>
				  	<td><span><input type="text" name="country" value="<?php echo $country;?>"placeholder="country" id="country"></span>
					<span id="err_country"><?php echo $err_country;?></span>
 </tr>
 
 <tr>
					<td><span>Email: </span></td>
					<td><span><input type="text" name="email" value="<?php echo $email;?>"placeholder="email" id="email"></span>
					<span id="err_email"><?php echo $err_email;?></span>
 </tr>
 
 <tr>
					<td><span>Birth Date: </span></td>   
					<td><select id="day" name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select id="month" name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
					</select>
					<select id="year" name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
					</select><?php echo $err_dob;?></span>
					</td>
					</tr>

 <tr>
					<td><span>Phone: </span></td>
					<td><span><input type="text" name="phone" value="<?php echo $phone;?>"placeholder="number" id="phone"></span>
					<span id="err_phone"><?php echo $err_phone;?></span>
 </tr>

 <tr>
          			<td><span>Gender</span></td>
          			<td><span><input type="radio" value="Male" name="gender" id="male">Male</span>
					<span><input type="radio" value="Female" name="gender" id="female">Female</span>
          			<span id="err_gender" ><?php echo $err_gender; ?></span>
 </tr>   
 <tr>
					<td><span>NID: </span></td>
					<td><span><input type="text" name="nid" value="<?php echo $nid;?>"placeholder="number" id="nid"></span>
					<span id="err_nid"><?php echo $err_nid;?></span>
 </tr>         

 <tr>
					<td><br><input type="submit" name="register" value="Register"></td>
 </tr>
 </table>
 </fieldset>
 </form>
 <a href = "login.php"><b>Login page</b></a>
 </body>
 <!--<script>
	function checkUserName(username){
		//alert(username.value);
		var name = username.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200){
				var rs = this.responseText;
				if(rs == "true"){
					document.getElementById("err_username").innerHTML="Valid";
				}
				else{
					document.getElementById("err_username").innerHTML="Invalid username";
				}
			}
			
			};
			xhttp.open("GET","checkUserName.php?username="+name,true);
			xhttp.send();
	}
 </script> -->
 </html>