<?php
include("connection.php");
 session_start();

 $_msg="";

 if(isset($_POST['login'])){
     $email = $_POST['email'];
     $password = $_POST['password'];
    //  $password = sha1[$password];
     $userType = $_POST['userType'];
     $sql = "SELECT * FROM users WHERE email=? AND password=? AND user_type=?";
     $stmt=$conn->prepare($sql);
     $stmt->bind_param("sss", $email,$password,$userType);
     $stmt->execute();
     $result = $stmt->get_result();
     $row = $result->fetch_assoc();

     session_regenerate_id();
     $_SESSION['email'] = $row['email'];
     $_SESSION['role'] = $row['user_type'];
     session_write_close();

     if($result->num_rows==1 && $_SESSION['role']=="employe"){
         header("location:employe.php");

     }
     else if($result->num_rows==1 && $_SESSION['role']=="admin"){
        header("location:admin.php");
        
    }
    if($result->num_rows==1 && $_SESSION['role']=="president"){
        header("location:president.php");
   
    }
    else{
        $msg = "email or password is incorrect!";
    }


 }


?>