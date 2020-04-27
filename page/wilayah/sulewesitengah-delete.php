<?php

if(isset($_GET['sulewesitengah-delete'])){
	$id = $_GET['sulewesitengah-delete'];
	mysqli_query($conn, "DELETE FROM datasulawesitengah WHERE id = '$id'");
	header("location: index.php?sulewesi_tengah");
}
?>