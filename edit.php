<?php 
include 'core/init.php';

$db = new Database;

if (isset($_GET['id'])) {

$id = $_GET['id'];
$db->query("SELECT * FROM contact WHERE id=".$id);
$d = $db->single();
}

?>
<?php include 'includes/header.php';?>	
<form  method="post" action="post_edit.php">	 
			<label for="firstname">Firstname</label>
			<input type="text" name="firstname" id="name" class="form-control" value="<?=$d->firstname;?>" required="required">
			<label for="lastname">Lastname</label>
			<input type="text" name="lastname" value="<?=$d->lastname;?>" id="lastname" class="form-control" required="required">
			<label for="number">Phone</label>
			<input type="text" name="phone" value="<?=$d->phone;?>" id="phone" class="form-control" required="required">
			<label for="email">Email</label>
			<input type="email" name="email" value="<?=$d->email?>" id="email" class="form-control" required="required">
			<input type="hidden" name="id" value="<?=$d->id?>" id="id" class="form-control" required="required">
			<label for="category">Category</label>
			<select name="category" class="form-control">
				<option value="<?=$d->category?>"><?=$d->category?></option>
				<option value="family">Family</option>
				<option value="friends">Friends</option>
				<option value="work">Work</option>
				<option value="school">School</option>
			</select><br>
			<button name="submit" class="btn btn-primary"><span class="glyphicon">Submit</span></button>
			<a href="index.php" class="btn btn-primary">Cancel</a>
		</form>
	</div>
</div>
<?php include 'includes/footer.php';?>