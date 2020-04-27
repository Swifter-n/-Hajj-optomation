<?php

if(isset($_GET['kepulauanriau-delete'])){
	$id = $_GET['kepulauanriau-delete'];
	mysqli_query($conn, "DELETE FROM datakepulauanriau WHERE id = '$id'");
	header("location: index.php?kepulauan_riau");
}
?>