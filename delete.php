<?php
include 'core/init.php';

$db = new Database;

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$db->query("DELETE FROM contact WHERE id =".$id);
	$result = $db->execute();
	if ($result) {
		header('Location:index.php');
	}else{

		echo "Unable to delete";
	}

}

?>