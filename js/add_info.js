<script>
    function get(id){
		return document.getElementById(id);
	}
	function validate(){
		refresh();
		var hasError=false;
		if(get("uname").value == ""){
			get("err_uname").innerHTML = "Username Required";
			get("err_uname").style.color = "red";
			hasError = true;
		}else if(get("uname").value.length<3){
            get("err_uname").innerHTML = "Username must be at least 3 characters long";
            get("err_uname").style.color = "red";
			hasError = true;
		}

        if(get("password").value == ""){
			get("err_password").innerHTML = "Password Required";
			get("err_password").style.color = "red";
			hasError = true;
		}else if(get("password").value.length < 6){
            get("err_password").innerHTML = "Passwordd must be atleast 6 characters long.";
            get("err_password").style.color = "red";
			hasError = true;
		}
      if(get("email").value == ""){
      get("err_email").innerHTML = "Email Required";
			get("err_email").style.color = "red";
			hasError = true;
		}
        if(get("phone").value == ""){
            get("err_phone").innerHTML = "Phone Required";
			get("err_phone").style.color = "red";
			hasError = true;
		}else if(get("phone").value.length<11){
            get("err_phone").innerHTML = "At least 11 numbers";
			get("err_phone").style.color = "red";
			hasError = true;
		}
        return !hasError;		
	}

    function refresh(){
		get("err_uname").innerHTML = "";
		get("err_password").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_phone").innerHTML = "";
	}

</script>