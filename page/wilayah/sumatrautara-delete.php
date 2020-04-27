<?php

if(isset($_GET['sumatrautara-delete'])){
	$id = $_GET['sumatrautara-delete'];
	mysqli_query($conn, "DELETE FROM datasumaterautara WHERE id = '$id'");
	header("location: index.php?sumatra_utara");
}
?>