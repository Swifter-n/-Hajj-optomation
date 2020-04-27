<?php

if(isset($_GET['jawatengah-delete'])){
	$id = $_GET['jawatengah-delete'];
	mysqli_query($conn, "DELETE FROM datajawatengah WHERE id = '$id'");
	header("location: index.php?jawa_tengah");
}
?>