
<?php

session_start();



if (isset($_POST['save'])) 
{
  include('connection.php');

    $nom = $_POST['nom'];
    $prenom = $_POST['prénom'];
    $CIN = $_POST['cin'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $Service = $_POST['service'];
    $grade = $_POST['grade'];
    $userType = $_POST['userType'];
    $password = $_POST['password'];

    $sql = " INSERT INTO  `users` (`id`, `nom`, `prenom`, `CIN`, `tel`, `email`, `Service`, `grade`, `user_type`, `password`) VALUES 
    ('$nom', '$prenom', '$CIN', '$tel', '$email', '$Service', '$grade', '$userType', '$password')";


    $new = mysqli_query($conn, $sql);
    if($new){
      echo 'inserted';
     
    }else{
      echo 'not inserted';
    }
    

    

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- CSS link -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<body>

<?php  include("base.php")?>
  <section class="contenu salarié admin">
    
    <div class="formaddsal">
      <h4 class="addh">Ajouter un employe</h4>
      <form  method="POST" >
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNom4">Nom</label>
            <input name="nom" type="firstname" class="form-control" id="inputname" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPrenom4">Prénom</label>
            <input name="prénom" type="lastname" class="form-control" id="inputprenom" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCin4">CIN</label>
            <input name="cin" type="" class="form-control" id="" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPhone4">Téléphone</label>
            <input name="tel" type="phone" class="form-control" id="" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputService">Service</label>
            <select name="service" id="inputState" class="form-control" required>
              <option selected>Info</option>
              <option>mainte</option>
              <option>Ressource humaine</option>
            </select>
          </div>
          
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputgrade">Grade</label>
            <select name="grade" id="inputState" class="form-control" required>
              <option selected>1er grade</option>
              <option>2eme grade</option>
              <option>3eme grade</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="inputusertype">User Type</label>
            <select name="userType" id="inputState" class="form-control" required>
              <option selected>admin</option>
              <option>employe</option>
              <option>president</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Mot de passe</label>
            <input name="password" type="password" class="form-control" id="inputPassword4" required>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="save">Ajouter</button>
      </form>

    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>

