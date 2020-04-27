<?php 
if(isset($_GET['reset_nusatenggarabarat'])){
	
	mysqli_query($conn, "DELETE FROM kuotanusatenggarabarat");

	header("location: index.php?lapnusatenggarabarat");
}

?>