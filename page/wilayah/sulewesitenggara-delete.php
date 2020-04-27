<?php

if(isset($_GET['sulewesitenggara-delete'])){
	$id = $_GET['sulewesitenggara-delete'];
	mysqli_query($conn, "DELETE FROM datasulawesitenggara WHERE id = '$id'");
	header("location: index.php?sulewesi_tenggara");
}
?>