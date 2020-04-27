<?php 
if(isset($_GET['reset_sumatrabarat'])){
	
	mysqli_query($conn, "DELETE FROM kuotasumaterabarat");

	header("location: index.php?lapsumatrabarat");
}

?>