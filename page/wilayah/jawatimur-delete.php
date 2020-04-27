<?php

if(isset($_GET['jawatimur-delete'])){
	$id = $_GET['jawatimur-delete'];
	mysqli_query($conn, "DELETE FROM datajawatimur WHERE id = '$id'");
	header("location: index.php?jawa_timur");
}
?>