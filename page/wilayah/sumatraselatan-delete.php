<?php

if(isset($_GET['sumatraselatan-delete'])){
	$id = $_GET['sumatraselatan-delete'];
	mysqli_query($conn, "DELETE FROM datasumateraselatan WHERE id = '$id'");
	header("location: index.php?sumatra_selatan");
}
?>