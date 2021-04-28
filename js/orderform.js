<script>
    function get(id){
		return document.getElementById(id);
	}
	function validate(){
		refresh();
		var hasError=false;
		if(get("username").value == ""){
			get("err_username").innerHTML = "Username Required";
			get("err_username").style.color = "red";
			hasError = true;
		} else if(get("username").value.length<3){
            get("err_username").innerHTML = "Username must be at least 3 characters long";
            get("err_username").style.color = "red";
			hasError = true;
		}
		if(get("bookname").value == ""){
            get("err_bookname").innerHTML = "Bookname Required";
			get("err_bookname").style.color = "red";
			hasError = true;
		}
		if(get("mobile").value == ""){
            get("err_mobile").innerHTML = "Phone number Required";
			get("err_mobile").style.color = "red";
			hasError = true;
		}else if(get("mobile").value.length<11){
            get("err_mobile").innerHTML = "At least 11 numbers";
			get("err_mobile").style.color = "red";
			hasError=true;
		}
        if(get("email").value == ""){
            get("err_email").innerHTML = "E-mail Required";
			get("err_email").style.color = "red";
			hasError = true;
		}
		if(get("address").value == ""){
            get("err_address").innerHTML = "Address Required";
			get("err_address").style.color = "red";
			hasError = true;
		}
		
//isInteger
        return !hasError;		
	}

    function refresh(){
		get("err_username").innerHTML = "";
		get("err_bookname").innerHTML = "";
		get("err_mobile").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_address").innerHTML = "";
	}

</script>