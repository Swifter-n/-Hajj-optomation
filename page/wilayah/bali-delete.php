<?php

if(isset($_GET['bali-delete'])){
	$id = $_GET['bali-delete'];
	mysqli_query($conn, "DELETE FROM databali WHERE id = '$id'");
	header("location: index.php?bali");
}
?>