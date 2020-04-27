<?php

if(isset($_GET['malukuutara-delete'])){
	$id = $_GET['malukuutara-delete'];
	mysqli_query($conn, "DELETE FROM datamalukuutara WHERE id = '$id'");
	header("location: index.php?maluku_utara");
}
?>