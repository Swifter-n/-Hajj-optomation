<?php

if(isset($_GET['lampung-delete'])){
	$id = $_GET['lampung-delete'];
	mysqli_query($conn, "DELETE FROM datalampung WHERE id = '$id'");
	header("location: index.php?lampung");
}
?>