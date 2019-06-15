<?php 
include 'core/init.php';
if (isset($_POST['submit'])) {
	
		$db = new Database;
		$id = $_POST['id'];

		//echo $id;
		// Insert query
		$db->query("UPDATE contact SET firstname =:firstname, lastname=:lastname, phone =:phone, email =:email, category=:category WHERE id=".$id);

		$db->bind(':firstname',$_POST['firstname']);
		$db->bind(':lastname',$_POST['lastname']);
		$db->bind(':phone',$_POST['phone']);
		$db->bind(':email',$_POST['email']);
		$db->bind(':category',$_POST['category']);
		$result = $db->execute();
		if ($result) {
				$success = "Update successfull";
				header('Location:index.php');
			} else{

				$fail = "Could not add contacts";
		}

}

?>