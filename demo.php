<html>
<head>
</head>
<body>
<form action="" method="POST" onsubmit="return validate()">
<fieldset>
<legend><b>Buy Book</b></legend><br>
<table>
<tr>
					<td><span><b>User Name:</b></span></td>
					<td><span><input type="text" name="" id="username"></span><span id="err_username"></span><br>
</tr>
<tr>
					<td><span><b>Book Name:</b></span></td>
					<td><span><input type="text" name="" id="bookname"></span><span id="err_bookname"></span><br>
</tr>
<tr>
					<td><span><b>Customer Mobile:</b></span></td>
					<td><span><input type="text" name="" id="mobile"></span><span id="err_mobile"></span><br>
</tr>
<tr>
					<td><b><span>Email:</b></span></td>
					<td><span><input type="text" name="" id="email"></span><span id="err_username"></span><br>
</tr>
<tr>
					<td><b><span>Address:</b></span></td>
					<td><span><input type="text" name="" id="address"></span><span id="err_address"></span>
</tr>

<tr>
					<td><br><input type="submit" name="add" value="Confirm"></td>
 </tr>
</table>
</fieldset>
</form>
</body>
<script>
function get(id){
return document.getElementById(id);}
function validate(){
		refresh();
		var hasError=false;
		var uname=get("username");
		if(uname.value==""){
			get("err_username").innerHTML="*Username required";
			hasError=true;
		}
		if(get("bookname").value==""){
			get("err_bookname").innerHTML="*Bookname required";
			hasError=true;
		}
		if(get("mobile").value==""){
			get("err_mobile").innerHTML="*Number required";
			hasError=true;
		}
		if(get("email").value==""){
			get("err_email").innerHTML="*Mail id required";
			hasError=true;
		}
		if(get("address").value==""){
			get("err_address").innerHTML="*Address required";
			hasError=true;
		}
		return !hasError;
	}
	function refresh(){
		get("err_username").innerHTML="";
		get("err_bookname").innerHTML="";
		get("err_mobile").innerHTML="";
		get("err_email").innerHTML="";
		get("err_address").innerHTML="";
	}
</script>
</html>