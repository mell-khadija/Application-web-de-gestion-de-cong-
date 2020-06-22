
<?php
include('connection.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $nom = $_POST['edit_nom'];
    $prenom = $_POST['edit_prenom'];
    $CIN = $_POST['edit_cin'];
    $tel = $_POST['edit_tel'];
    $email = $_POST['edit_email'];
    $Service = $_POST['edit_service'];
    $grade = $_POST['edit_grade'];
    $userType = $_POST['edit_type'];
    $password = $_POST['edit_password'];

    $query = "UPDATE users SET id ='$id', nom ='$nom', prenom ='$prenom', CIN ='$CIN', tel ='$tel', email ='$email', Service ='$Service', grade ='$grade', user_type ='$userType', password ='$password' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        echo 'Your Data is Updated';
        header('Location: registre.php'); 
    }
    else
    {
      echo 'Your Data is NOT Updated';
       
        header('Location: registre.php'); 
    }
}

?>
