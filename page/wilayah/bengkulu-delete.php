<?php

if(isset($_GET['bengkulu-delete'])){
	$id = $_GET['bengkulu-delete'];
	mysqli_query($conn, "DELETE FROM databengkulu WHERE id = '$id'");
	header("location: index.php?bengkulu");
}
?>