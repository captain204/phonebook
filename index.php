<?php 
include 'core/init.php';

  $db = new Database;
  $db->query("SELECT * FROM contact");
  $d = $db->resultset();
 ?>
 <?php include 'includes/header.php';?>
<div class="row">
	<div class="col-md-12">
		<?php foreach ($d as $data):?>
		<table class="table table-striped">
			<th>Firstname</th>
			<th>Lastname</th>
			<th>phone</th>
			<th>email</th>
			<th>category</th>
			<th>Edit</th>
			<th>Delete</th>
			<tbody>
			<td><?=$data->firstname;?></td>
			<td><?=$data->lastname;?></td>
			<td><?=$data->phone;?></td>
			<td><?=$data->email;?></td>
			<td><?=$data->category;?></td>
			<td><a href="edit.php?id=<?=$data->id;?>" class="btn btn-primary">Edit</a></td>
			<td><a href="delete.php?id=<?=$data->id;?>" class="btn btn-primary">Delete</a></td>
			</tbody>
		</table>
		<?php endforeach;?>
	</div>

</div>

<?php include 'includes/footer.php';?>