<?php
    require_once 'model/db_config.php';

    $name="";
    $err_name="";
    $username="";
    $err_username="";
    $password="";
    $err_password="";
    //$pass="";
    $country="";
    $err_country="";
    $email="";
    $err_email="";
    $address="";
    $err_address="";
    $dob="";
    $err_dob=""; 
    $gender="";
    $err_gender="";
    $phone="";
    $err_phone="";
    $nid="";
    $err_nid="";
    $hasError=false;
    //$result="";

    function validateEmail($email){
      $pos_at = strpos($email,"@");
      $pos_dot = strpos($email,".",$pos_at+1);
      if($pos_at <$pos_dot){
        return true;
      }

      return false;
    }

    if(isset($_POST["register"])){
    
		    if(empty($_POST["name"])){
					$err_name= "*Name is Required";
				}
        else if(strlen($_POST["name"])<5){
          $err_name="Name should be at least 5 characters";
        }
				else{
					$name=$_POST["name"];
        }
        if(empty($_POST["username"])){
					$err_username= "*Username is Required";
				}
        else if(strlen($_POST["username"])<3){
          $err_username="Userame should be at least 3 characters";
        }
        elseif (strpos($_POST["username"]," ")){
          $err_username="Username should not contain any space";
        }
				else{
					$username=$_POST["username"];
        }
       if(empty($_POST["password"])){
        $err_password="*Password is Required";
        }		
        elseif (strlen($_POST["password"])<6){
        $err_password="Password must be 6 characters long";
        }
        elseif(!strpos($_POST["password"],"#"))
        {
        $err_password="Password should contain a special character(Example: #)";
        }
        elseif(strpos($_POST["password"]," "))
        {
        $err_password="Password should not contain white space";
        } 
        else
        {
        $password=$_POST["password"];
        }		
        if(empty($_POST["country"])){
          $err_country="*Country name should be required.";
        }
        else{
          $country=$_POST["country"];
        }
        if(empty($_POST["email"])){
            $err_email= "*Email is Required";
           }
           elseif(!validateEmail($_POST["email"])){
             $err_email = "Not a valid email";
           }
           else{
             $email=htmlspecialchars($_POST["email"]);
           }
           if(empty($_POST["phone"])){
            $err_phone="*Number is Required";
          }
          else if(strlen($_POST["phone"])<11){
            $err_phone="*At least 11 numbers";
          }
          elseif (strpos($_POST["phone"]," ")){
           $err_phone="Number should not contain any space";
          }
          else{
            $phone=$_POST["phone"];
          }
          if(empty($_POST["gender"])){
            $err_gender= "*gender is Required";
           }
           else{
             $gender=$_POST["gender"];
           }
          if(empty($_POST["nid"])){
            $err_nid="*NID is Required";
          }
          else if(strlen($_POST["nid"])<15){
            $err_nid="*At least 15 numbers";
          }
          elseif (strpos($_POST["nid"]," ")){
           $err_nid="Number should not contain any space";
          }
          else{
            $nid=$_POST["nid"];
          }
          if(!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"])){
            $err_dob="*Date is required";
          }
          else{
            $dob=$_POST["day"]."-".$_POST["month"]."-".$_POST["year"];
          }
          if(!$hasError){
            insertUser($name,$username,$password,$country,$email,$dob,$phone,$gender,$nid);
         }
          /*if(!$hasError){
            checkUserName($username);
          } */
         }
       
          function insertUser($name,$username,$password,$country,$email,$dob,$phone,$gender,$nid){
            $query ="INSERT INTO users VALUES(NULL,'$name','$username','$password','$country','$email','$dob','$phone','$gender','$nid')";
            execute($query);
        }
        function checkUserName($username){
          $query="select * from users where username='$username'";
          $result= get($query);
          if(count($result)>0){
              return false;
          }
          return true;
      }
?>