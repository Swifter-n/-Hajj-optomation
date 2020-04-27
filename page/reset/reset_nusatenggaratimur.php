<?php 
if(isset($_GET['reset_nusatenggaratimur'])){
	
	mysqli_query($conn, "DELETE FROM kuotanusatenggaratimur");

	header("location: index.php?lapnusatenggaratimur");
}

?>