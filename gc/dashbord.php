
<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include('base.php') ?>
     



<div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">id</th>
                                       <th width="10%">nom</th>
                                       <th width="10%">prenom</th>
								       <th width="10%">CIN</th>
									   <th width="10%">tel</th>
                                       <th width="15%">email</th>
                                       <th width="10%">Service</th>
                                       <th width="10%">grade</th>
                                       <th width="10%">user_Type</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
									   <td><?php echo $row['id']?></td>
                                       <td><?php echo $row['nom']?></td>
									   <td><?php echo $row['prenom']?></td>
									   <td><?php echo $row['CIN']?></td>
                                       <td><?php echo $row['tel']?></td>
                                       <td><?php echo $row['email']?></td>
                                       <td><?php echo $row['service']?></td>
                                       <td><?php echo $row['grade']?></td>
                                       <td><?php echo $row['user_Type']?></td>
                                       <td><?php echo $row['password']?></td>
									   <td><a href="add_employee.php?id=<?php echo $row['id']?>">Edit</a> <a href="employee.php?id=<?php echo $row['id']?>&type=delete">Delete</a></td>
                                    </tr>
									<?php 
									$i++;
									} ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
    
</body>
</html>