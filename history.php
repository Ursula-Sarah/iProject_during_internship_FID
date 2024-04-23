<?php

require_once('connect.php');
// Requête pour récupérer toutes les actions effectuées sur la table `activation`

?>
<!DOCTYPE html>
<html>
<head>
	<title>crud app php</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css" >

</head>
<body>

	<?php
		include 'navbar.php';
	 ?>

	<div class="container">
		<div class="row pt-4">
			<h2>Tableau historique</h2>
		</div>

		<table class="table table-striped mt-3">
			<thead>
				<tr>
					<th>ID</th>
					<th>Type action</th>
					<th>Date d'action</th>
					<th>Nom de la table</th>
					<th>details</th>
					<th>Actions</th>
				</tr>
			</thead>
            <tbody>
				<?php
				   
					$sql="SELECT * FROM historique WHERE action_type='insertion' AND (table_concernee='user' OR table_concernee='activation' OR  table_concernee='code_activation' OR table_concernee='machine') ";
					$res = mysqli_query($con, $sql);
					if($res){
					while($row=mysqli_fetch_assoc($res)){
					  echo'<tr>
					  <th scope="row">'.$row['id'].'</th>
					  <td>'.$row['action_type'].'</td>
					  <td>'.$row['date_action'].'</td>
					  <td>'.$row['table_concernee'].'</td>
					  <td>'.$row['info_add'].'</td>
					  <td>
					  <button class="btn btn-danger"><a href="delete_history.php?deleteid='.$row['id'].'" class="text-light">Supprimer</a></button>
					  </td>
					  </tr>'; 
				   }
					}
				
				
				 ?>
      
					</td>
				</tr>

			</tbody>
		</table>


	</div>