<?php

if(isset($_GET['jawabarat-delete'])){
	$id = $_GET['jawabarat-delete'];
	mysqli_query($conn, "DELETE FROM datajawabarat WHERE id = '$id'");
	header("location: index.php?jawa_barat");
}
?>