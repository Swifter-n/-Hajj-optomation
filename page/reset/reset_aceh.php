<?php 
if(isset($_GET['reset_aceh'])){
	
	mysqli_query($conn, "DELETE FROM kuotaaceh");

	header("location: index.php?lapaceh");
}

?>