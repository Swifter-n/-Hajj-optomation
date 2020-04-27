<?php

if(isset($_GET['nusatenggarabarat-delete'])){
	$id = $_GET['nusatenggarabarat-delete'];
	mysqli_query($conn, "DELETE FROM datanusatenggarabarat WHERE id = '$id'");
	header("location: index.php?nusatenggara_barat");
}
?>