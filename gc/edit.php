<?php
     include('connection.php');
?>
<?php include("base.php") ?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="update.php" method="POST">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> nom </label>
                  <input type="text" name="edit_nom" value="<?php echo $row['nom'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label> prenom </label>
                  <input type="text" name="edit_prenom" value="<?php echo $row['prenom'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>CIN</label>
                  <input type="" name="edit_cin" value="<?php echo $row['CIN'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>tel</label>
                  <input type="phone" name="edit_tel" value="<?php echo $row['tel'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>email</label>
                  <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>Service</label>
                  <input type="" name="edit_service" value="<?php echo $row['Service'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>grade</label>
                  <input type="" name="edit_grade" value="<?php echo $row['grade'] ?>" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                  <label>user_type</label>
                  <input type="" name="edit_type" value="<?php echo $row['user_type'] ?>" class="form-control" placeholder="">
              </div>

              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="">
              </div>

              <a href="registre.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>

</div>
<?php include("footer.php") ?>
<!-- /.container-fluid -->