<?php 
if(isset($_GET['reset_maluku'])){
	
	mysqli_query($conn, "DELETE FROM kuotamaluku");

	header("location: index.php?lapmaluku");
}

?>