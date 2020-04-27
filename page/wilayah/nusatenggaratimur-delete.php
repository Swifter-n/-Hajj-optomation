<?php

if(isset($_GET['nusatenggaratimur-delete'])){
	$id = $_GET['nusatenggaratimur-delete'];
	mysqli_query($conn, "DELETE FROM datanusatenggaratimur WHERE id = '$id'");
	header("location: index.php?nusatenggara_timur");
}
?>