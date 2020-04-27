<?php

if(isset($_GET['sumatrabarat-delete'])){
	$id = $_GET['sumatrabarat-delete'];
	mysqli_query($conn, "DELETE FROM datasumaterabarat WHERE id = '$id'");
	header("location: index.php?sumatra_barat");
}
?>