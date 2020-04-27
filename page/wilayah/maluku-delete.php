<?php

if(isset($_GET['maluku-delete'])){
	$id = $_GET['maluku-delete'];
	mysqli_query($conn, "DELETE FROM datamaluku WHERE id = '$id'");
	header("location: index.php?maluku");
}
?>