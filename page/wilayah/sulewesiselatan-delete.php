<?php

if(isset($_GET['sulewesiselatan-delete'])){
	$id = $_GET['sulewesiselatan-delete'];
	mysqli_query($conn, "DELETE FROM datasulawesiselatan WHERE id = '$id'");
	header("location: index.php?sulewesi_selatan");
}
?>