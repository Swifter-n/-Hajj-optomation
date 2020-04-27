<?php 
if(isset($_GET['reset_jawatimur'])){
	
	mysqli_query($conn, "DELETE FROM kuotajawatimur");

	header("location: index.php?lapjawatimur");
}

?>