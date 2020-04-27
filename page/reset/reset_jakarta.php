<?php 
if(isset($_GET['reset_jakarta'])){
	
	mysqli_query($conn, "DELETE FROM kuotadkijakarta");

	header("location: index.php?lapjkt");
}

?>