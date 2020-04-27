<?php

if(isset($_GET['kalimatantimur-delete'])){
	$id = $_GET['kalimatantimur-delete'];
	mysqli_query($conn, "DELETE FROM datakalimantantimur WHERE id = '$id'");
	header("location: index.php?kalimatan_timur");
}
?>