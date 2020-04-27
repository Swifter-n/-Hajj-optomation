<?php 
if(isset($_GET['reset_bali'])){
	
	mysqli_query($conn, "DELETE FROM kuotabali");

	header("location: index.php?lapbali");
}

?>