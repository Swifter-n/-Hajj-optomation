<?php

if(isset($_GET['jambi-delete'])){
	$id = $_GET['jambi-delete'];
	mysqli_query($conn, "DELETE FROM datajambi WHERE id = '$id'");
	header("location: index.php?jambi");
}
?>