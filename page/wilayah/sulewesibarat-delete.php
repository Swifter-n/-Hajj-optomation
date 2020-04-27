<?php

if(isset($_GET['sulewesibarat-delete'])){
	$id = $_GET['sulewesibarat-delete'];
	mysqli_query($conn, "DELETE FROM datasulawesibarat WHERE id = '$id'");
	header("location: index.php?sulewesi_barat");
}
?>