<?php

if(isset($_GET['sulewesiutara-delete'])){
	$id = $_GET['sulewesiutara-delete'];
	mysqli_query($conn, "DELETE FROM datasulawesiutara WHERE id = '$id'");
	header("location: index.php?sulewesi_utara");
}
?>