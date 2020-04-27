<?php 
if(isset($_GET['reset_jawabarat'])){
	
	mysqli_query($conn, "DELETE FROM kuotajawabarat");

	header("location: index.php?lapjawabarat");
}

?>