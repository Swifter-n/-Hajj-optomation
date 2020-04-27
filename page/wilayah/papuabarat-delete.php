<?php

if(isset($_GET['papuabarat-delete'])){
	$id = $_GET['papuabarat-delete'];
	mysqli_query($conn, "DELETE FROM datapapuabarat WHERE id = '$id'");
	header("location: index.php?papua_barat");
}
?>