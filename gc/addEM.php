
<?php

session_start();




if (isset($_POST['save'])) 
{
  include('connection.php');

  // $nom=mysqli_real_escape_string($conn,$_POST['nom']);
  // $prenom=mysqli_real_escape_string($conn,$_POST['prenom']);
  // $CIN=mysqli_real_escape_string($conn,$_POST['cin']);
  // $tel=mysqli_real_escape_string($conn,$_POST['tel']);
	// $email=mysqli_real_escape_string($conn,$_POST['email']);
  // $Service=mysqli_real_escape_string($conn,$_POST['service']);
  // $grade=mysqli_real_escape_string($conn,$_POST['grade']);
  // $userType=mysqli_real_escape_string($conn,$_POST['userType']);
	// $password=mysqli_real_escape_string($conn,$_POST['password']);
	
    $nom = $_POST['nom'];
    echo  $nom;
    $prenom = $_POST['prénom'];
    echo  $prenom;
    $CIN = $_POST['cin'];
    echo  $CIN;
    $tel = $_POST['tel'];
    echo  $tel;
    $email = $_POST['email'];
    echo  $email;
    $Service = $_POST['service'];
    echo  $Service;
    $grade = $_POST['grade'];
    echo  $grade;
    $userType = $_POST['userType'];
    echo  $userType;
    $password = $_POST['password'];
    echo  $password;

    $sql = " INSERT INTO  `users` (`id`, `nom`, `prenom`, `CIN`, `tel`, `email`, `Service`, `grade`, `user_type`, `password`) VALUES 
    ('','$nom', '$prenom', '$CIN', '$tel', '$email', '$Service', '$grade', '$userType', '$password') ";

    // $sql = " INSERT INTO  users (id, nom, prenom, CIN, tel, email, Service, grade, user_type, password) VALUES 
    // ('', $nom, $prenom, $CIN, $tel, $email, $Service, $grade, $userType, $password)";
    


// $sql = " INSERT INTO  users (id, nom, prenom, CIN, tel, email, Service, grade, user_type, password) VALUES 
//     (199, 'abcd', 'abcd', 'W34334', '676767676', 'he@gmai.com', 'RH', 'admmd', 'admin', '123456')";


// $sql = " INSERT INTO  users (nom, prenom, CIN, tel, email, Service, grade, user_type, password) VALUES 
// ($nom, $prenom, $CIN, $tel, $email, $Service, $grade, $userType, $password)"; 


    $new = mysqli_query($conn, $sql);
    if($new){
      echo ' data inserted';
     
    }else{
      echo ' data not inserted';
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
            <label for="inputEmail4">Nom</label>
            <input name="nom" type="firstname" class="form-control" id="inputname" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Prénom</label>
            <input name="prénom" type="lastname" class="form-control" id="inputname" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">CIN</label>
            <input name="cin" type="" class="form-control" id="" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Téléphone</label>
            <input name="tel" type="phone" class="form-control" id="" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Service</label>
            <select name="service" id="inputState" class="form-control" required>
              <option selected>Info</option>
              <option>mainte</option>
              <option>Ressource humaine</option>
            </select>
          </div>
          
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Grade</label>
            <select name="grade" id="inputState" class="form-control" required>
              <option selected>1er grade</option>
              <option>2eme grade</option>
              <option>3eme grade</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="inputState">User Type</label>
            <select name="userType" id="inputState" class="form-control" required>
              <option selected>admin</option>
              <option>employe</option>
              <option>president</option>
            </select>
          </div>
          </div>
          
          <div class="form-row">
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
<?php include('footer.php');?>

</html>

