<?php

if(isset($_GET['kalimatantengah-delete'])){
	$id = $_GET['kalimatantengah-delete'];
	mysqli_query($conn, "DELETE FROM datakalimantantengah WHERE id = '$id'");
	header("location: index.php?kalimatan_tengah");
}
?>