<?php

session_start();




if (isset($_POST['save'])) 
{
  include('connection.php');

    $type_congé = $_POST['typecongé'];
    echo $type_congé;
    $date_sortie = $_POST['datesortie'];
    echo $date_sortie;
    $date_retour = $_POST['dateretour'];
    echo $date_retour;
    $nom = $_POST['nom'];
    echo  $nom;
    $prenom = $_POST['prénom'];
    echo  $prenom;
    $status = $_POST['status'];
    echo $status;
    $CIN = $_POST['cin'];
    echo $CIN;

      //  $sql = "INSERT INTO congé (type_congé, date_sortie, date_retour, status, CIN) 
      //  VALUES ('$type_congé','$date_sortie', '$date_retour' '$status', '$CIN')";
     $sql = "INSERT INTO `congé`(`type_congé`, `date_sortie`, `date_retour`, `status`, `CIN`) VALUES
      ('' ,'' ,'$type_congé','$date_sortie', '$date_retour' '$status', '$CIN')";

$res = mysqli_query($conn, $sql);
if($res){
  echo "inserted";
}else{
  echo "not inserted";
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
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>

  <body>

    <?php include('baseE.php'); ?>

    <section class="contenu salarié admin">
      
      <div class="formaddsal">
           <h4 class="addh">   Ajouter une Demande de congé</h4>
          <form  method="POST">
          <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Type de congé</label>
                <select name="typecongé" id="inputState" class="form-control">
                  <option selected> Congé annuel</option>
                  <option>Congé exceptionnel</option>
                  <option>Congé maladie</option>
                  <option>Congé maternité</option>
                </select>
              </div>
            </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Date de  sortie</label>
                <input name="datesortie" type="date" class="form-control" id="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Date de retour</label>
                <input name="dateretour" type="date" class="form-control" id="">
              </div>
            </div>
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
           
            <div class="form-row hide">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Status</label>
                <input name="status" type="text" class="form-control" id="inputEmail4" value="En attente">
              </div>

            </div>
            <div class="form-rows">
            <div class="form-group col-md-6">
            <label for="inputEmail4">CIN</label>
            <input name="cin" type="" class="form-control" id="" required>
          </div>
            </div>
            
            <button type="submit" class="btn btn-primary" name="save">Envoyer</button>
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
<?php include('footer.php') ?>