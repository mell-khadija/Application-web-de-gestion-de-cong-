<?php


session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'gestion');

	
	if (isset($_GET['refuse'])) {
        $CIN = $_GET['refuse'];
        mysqli_query($conn, "UPDATE congé SET status='Refusé' WHERE CIN=$CIN");
        $_SESSION['message'] = "Demande refusée"; 
      
    }

    if (isset($_GET['confirm'])) {
        $CIN = $_GET['confirm'];
        mysqli_query($conn, "UPDATE congé SET status='Approuvé' WHERE CIN=$CIN");
        $_SESSION['message'] = "Demande approuvée"; 
     
    }



?>

<?php  include("base.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Géstion des Congés</h6>
    <!-- view Page  -->
  </div>
  <div class="card-body">

    <div class="table-responsive">
    

      <?php $result = mysqli_query($conn, "SELECT congé.CIN, congé.datedemande, congé.typeconge, congé.status, nom, prénom 
       FROM users RIGHT JOIN congé ON users.CIN = congé.CIN WHERE status = 'En attente'"); 
       ?>

        
    
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th width="4%"> CIN </th>
              <th width="5%"> Nom</th>
              <th width="5%"> prenom</th>
              
              <th width="8%">typecongé </th>
              <th width="5%">datedemande</th>
              <th width="5%">Status</th>
              <th width="6%">Confirmer</th>
              <th width="6%">Refuser</th>
          </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php  echo $row['CIN']; ?></td>
            <td><?php  echo $row['nom']; ?></td>
            <td><?php  echo $row['prenom']; ?></td>
            <td><?php  echo $row['typecongé']; ?></td>
            <td><?php  echo $row['datedemande']; ?></td>
            <td><?php  echo $row['Statust']; ?></td>
            <td>
                <form action="admincongé.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> Confirmer</button>
                </form>
            </td>
            <td>
                <form action="admincongé.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> Refuser</button>
                </form>
            </td>
          </tr>
          <?php
          

          }
        
        ?>
        </tbody>
      </table>
   
    </div>
  </div>
</div>

</div>
<?php  include("footer.php") ?>
<!-- /.container-fluid -->


</body>
</html>
