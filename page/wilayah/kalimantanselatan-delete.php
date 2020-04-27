<?php

if(isset($_GET['kalimatanselatan-delete'])){
	$id = $_GET['kalimatanselatandelete'];
	mysqli_query($conn, "DELETE FROM datakalimantanselatan WHERE id = '$id'");
	header("location: index.php?kalimatan_selatan");
}
?>kalimantanselatan-delete.php