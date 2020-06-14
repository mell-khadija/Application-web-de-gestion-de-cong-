<?php
include("connection.php");
 session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application web de gestion de congé</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-dark"> 
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 bg-light mt-5 px-0">
<h3 class="text-center text-light bg-danger p-3">AUTHENTIFICATION</h3>
<form action="login.php" method="post" class="p-4">
<div  class="form-group">
<input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
<br>
 <div  class="form-group">
 <input type="password" name="password" class="form-control form-control-lg" placeholder="password" required>
</div>
<div class="form-group">
<label for="userType">Status : </label>
<input type="radio" name="userType" value="employe"
class="custom-radio" required>&nbsp; employe |
<input type="radio" name="userType" value="admin"
class="custom-radio" required>&nbsp; admin |
<input type="radio" name="userType" value="rh"
class="custom-radio" required>&nbsp; president
</div>
<div class="form-group">
<input  type="submit" name="login" class="btn btn-danger btn-block" value="Se connecter"> 
</div>
<!-- <h5 class="text-danger text-center">?<= $msg; ?></h5> -->
</form>
</div>
</div>
</div>




<!-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

    
</body>
</html>