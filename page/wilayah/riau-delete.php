<?php

if(isset($_GET['riau-delete'])){
	$id = $_GET['riau-delete'];
	mysqli_query($conn, "DELETE FROM datariau WHERE id = '$id'");
	header("location: index.php?riau");
}
?>