<?php 
if(isset($_GET['reset_riau'])){
	
	mysqli_query($conn, "DELETE FROM kuotariau");

	header("location: index.php?lapriau");
}

?>