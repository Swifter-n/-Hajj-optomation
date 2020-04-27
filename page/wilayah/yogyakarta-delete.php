<?php

if(isset($_GET['jogya-delete'])){
	$id = $_GET['jogya-delete'];
	mysqli_query($conn, "DELETE FROM datadiyogyakarta WHERE id = '$id'");
	header("location: index.php?jogya");
}
?>