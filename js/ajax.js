<script>
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
 </script>