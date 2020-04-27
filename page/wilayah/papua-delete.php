<?php

if(isset($_GET['papua-delete'])){
	$id = $_GET['papua-delete'];
	mysqli_query($conn, "DELETE FROM datapapua WHERE id = '$id'");
	header("location: index.php?papua");
}
?>