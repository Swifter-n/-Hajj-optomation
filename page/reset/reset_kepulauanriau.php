<?php 
if(isset($_GET['reset_kepulauanriau'])){
	
	mysqli_query($conn, "DELETE FROM kuotakepulauanriau");

	header("location: index.php?lapkepulauanriau");
}

?>