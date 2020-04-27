<?php

if(isset($_GET['banten-delete'])){
	$id = $_GET['banten-delete'];
	mysqli_query($conn, "DELETE FROM databanten WHERE id = '$id'");
	header("location: index.php?banten");
}
?>