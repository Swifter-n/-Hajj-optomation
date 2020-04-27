<?php

if(isset($_GET['gorontalo-delete'])){
	$id = $_GET['gorontalo-delete'];
	mysqli_query($conn, "DELETE FROM datagorontalo WHERE id = '$id'");
	header("location: index.php?gorontalo");
}
?>