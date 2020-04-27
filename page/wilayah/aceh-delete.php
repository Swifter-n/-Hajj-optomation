<?php

if(isset($_GET['aceh-delete'])){
	$id = $_GET['aceh-delete'];
	mysqli_query($conn, "DELETE FROM dataaceh WHERE id = '$id'");
	header("location: index.php?aceh");
}
?>