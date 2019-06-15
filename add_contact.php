<?php 
include 'core/init.php';

if (isset($_POST['submit'])) {

	$success ="";
	$fail ="";
	
	$db = new Database;

	// Insert query
	$db->query("INSERT INTO contact(firstname,lastname,phone,email,category)
						VALUES(:firstname, :lastname, :phone, :email,:category)");
	$db->bind(':firstname',$_POST['firstname']);
	$db->bind(':lastname',$_POST['lastname']);
	$db->bind(':phone',$_POST['phone']);
	$db->bind(':email',$_POST['email']);
	$db->bind(':category',$_POST['category']);
	$result = $db->execute();
	if ($result) {
			$success = "Contact added successfully";
			header("Location:index.php");
		} else{

		$fail = "Could not add contacts";
	}

}

?>

<?php include 'includes/header.php';?>
<div class="row">
	<?php if (isset($success)):?>
		<div class="alert alert-success">
			<?php echo $success;?>
		</div>	
	<?php endif;?>
		<?php if (isset($success)):?>
		<div class="alert alert-danger">
			<?php echo $fail;?>
		</div>	
	   <?php endif;?>
	<div class="col-md-10 offset-2">
		<form action="add_contact.php" method="post">		
			<label for="firstname">Firstname</label>
			<input type="text" name="firstname" id="name" class="form-control" required="required">
			<label for="lastname">Lastname</label>
			<input type="text" name="lastname" id="lastname" class="form-control" required="required">
			<label for="number">Phone</label>
			<input type="text" name="phone" id="phone" class="form-control" required="required">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control" required="required">
			<label for="group">Group</label>
			<select name="category" class="form-control">
				<option value=""></option>
				<option value="family">Family</option>
				<option value="friends">Friends</option>
				<option value="work">Work</option>
				<option value="work">School</option>
			</select><br>
			<button name="submit" class="btn btn-primary">Submit</button>
			<a href="index.php" class="btn btn-primary">Back</a>
		</form>
	</div>

</div>

<?php include 'includes/footer.php';?>
