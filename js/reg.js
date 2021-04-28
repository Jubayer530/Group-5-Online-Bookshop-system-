<script>
    function get(id){
		return document.getElementById(id);
	}
	function validate(){
		refresh();
		var hasError=false;
		if(get("name").value == ""){
			get("err_name").innerHTML = "Name Required";
			get("err_name").style.color = "red";
			hasError = true;
		}
		if(get("username").value == ""){
            get("err_username").innerHTML = "Username Required";
			get("err_username").style.color = "red";
			hasError = true;
		}else if(get("username").value.length<3){
            get("err_username").innerHTML = "Username must be at least 3 characters long";
            get("err_username").style.color = "red";
			hasError = true;
		}
        if(get("password").value == ""){
            get("err_password").innerHTML = "Password Required";
			get("err_password").style.color = "red";
			hasError = true;
		}
		else if(get("password").value.length < 6){
            get("err_password").innerHTML = "Passwordd must be atleast 8 character long.";
            get("err_password").style.color = "red";
			hasError = true;
		}
		if(get("country").value == ""){
            get("err_country").innerHTML = "Country name Required";
			get("err_country").style.color = "red";
			hasError = true;
		}
        if(get("email").value == ""){
            get("err_email").innerHTML = "E-mail Required";
			get("err_email").style.color = "red";
			hasError = true;
		}
		if(get("phone").value == ""){
            get("err_phone").innerHTML = "Number Required";
			get("err_phone").style.color = "red";
			hasError = true;
		}else if(get("phone").value.length<11){
            get("err_phone").innerHTML = "At least 11 numbers";
			get("err_phone").style.color = "red";
		}
        if(!get("male").checked && !get("female").checked){
			get("err_gender").innerHTML = "Select a gender";
			get("err_gender").style.color = "red";
			hasError = true;
		}
		if(get("day").selectedIndex==0){
			//alert("prblm in day");
		}
        /*if(!get("day").checked && !get("month").checked && !get("year").checked){
			get("err_date").innerHTML = "Select a date";
			get("err_date").style.color = "red";
			hasError = true;
		} */
        if(get("nid").value == ""){
            get("err_nid").innerHTML = "Number Required";
			get("err_nid").style.color = "red";
			hasError = true;
		}
		else if(get("nid").value.length < 15){
            get("err_nid").innerHTML = "Nid must be atleast 8 character long.";
            get("err_nid").style.color = "red";
			hasError = true;
		}
        return !hasError;		
	}

    function refresh(){
		get("err_name").innerHTML = "";
		get("err_username").innerHTML = "";
		get("err_password").innerHTML = "";
		get("err_country").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_phone").innerHTML = "";
		get("err_gender").innerHTML = "";
       // get("err_date").innerHTML = "";
		get("err_nid").innerHTML = "";
	}

</script>