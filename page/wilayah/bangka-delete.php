<?php

if(isset($_GET['bangka-delete'])){
	$id = $_GET['bangka-delete'];
	mysqli_query($conn, "DELETE FROM datakepulauanbangkabelitung WHERE id = '$id'");
	header("location: index.php?bangka");
}
?>