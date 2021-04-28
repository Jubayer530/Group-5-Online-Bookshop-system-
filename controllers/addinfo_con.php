<?php 
require_once 'model/db_config.php';
$username="";
$err_username="";
$password="";
$err_password="";
$type="";
$err_type="";
$email='';
$err_email="";
$phone="";
$err_phone="";
$card="";
$err_card="";
$hasError="false";

function validateEmail($email){
  $pos_at = strpos($email,"@");
  $pos_dot = strpos($email,".",$pos_at+1);
  if($pos_at <$pos_dot){
    return true;
  }

  return false;
}

if($_SERVER['REQUEST_METHOD']=='POST'){

if(empty($_POST["username"])){
    $err_username="*Name is required";
}
elseif(strlen($_POST["username"])<3){
    $err_username="Name must contain 3 characters.";
}
elseif(strpos($_POST["username"]," ")){
    $err_username="Name should not contain any space.";
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
    $err_phone="Number should be at least 11 characters";
  }
  elseif (strpos($_POST["phone"]," ")){
   $err_phone="Number should not contain any space";
  }
  else{
    $phone=$_POST["phone"];
  }
  if (!$hasError) {
    updateUser($username, $password, $email, $phone);
    echo "Profile Updated";
  //  header("Location: ../../views/Receiver/user_profile.php");
}
}
function updateUser($username, $password, $email, $phone)
{

    $query = "UPDATE users set username='$username',password='$password' email='$email' phone='$phone'  where username='$username'";

    execute($query);
}
?>