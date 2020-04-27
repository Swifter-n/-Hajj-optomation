<?php

if(isset($_GET['jakarta-delete'])){
	$id = $_GET['jakarta-delete'];
	mysqli_query($conn, "DELETE FROM datadkijakarta WHERE id = '$id'");
	header("location: index.php?jakarta");
}
?>