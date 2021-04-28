<?php
    require_once 'model/db_config.php';
    $username="";
    $err_username="";
    $bookname="";
    $err_bookname="";
    $mobile="";
    $err_mobile="";
    $email="";
    $err_email="";
    $address="";
    $err_address="";
    $hasError=false;

    function validateEmail($email){
      $pos_at = strpos($email,"@");
      $pos_dot = strpos($email,".",$pos_at+1);
      if($pos_at <$pos_dot){
        return true;
      }

      return false;
    }

    if(isset($_POST["add"])){
    if(empty($_POST["username"])){
      $err_username= "*Name is Required";
     }
         else if(strlen($_POST["username"])<3){
           $err_username="*Name should be at least 3 characters";
         }
         elseif (strpos($_POST["username"]," ")){
           $err_username="Name should not contain any space";
        
         }
         else{
           $username=$_POST["username"];
         }
         if(empty($_POST["bookname"])){
         $err_bookname= "*Book name is Required";
     
        }
         else{
          $bookname=$_POST["bookname"];
        }
        if(empty($_POST["mobile"])){
          $err_mobile="*Number is Required";
         
        }
          else if(strlen($_POST["mobile"])<11){
          $err_mobile="Number should be at least 11 characters";
         
        }
         elseif (strpos($_POST["mobile"]," ")){
         $err_mobile="Number should not contain any space";
       
        }
        else{
          $mobile=$_POST["mobile"];
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
        if(empty($_POST["address"])){
          $err_address= "*Address is Required";          
         }
         else{
           $address=$_POST["address"];
         }
         if(!$hasError){
            insertBook($username,$bookname,$mobile,$email,$address);
         }
    } 

        function insertBook($username,$bookname,$mobile,$email,$address){
            $query ="INSERT INTO addorder VALUES(NULL,'$username','$bookname','$mobile','$email','$address')";
            execute($query);
        }
?>