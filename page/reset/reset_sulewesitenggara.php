<?php 
if(isset($_GET['reset_sulewesitenggara'])){
	
	mysqli_query($conn, "DELETE FROM kuotasulawesitenggara");

	header("location: index.php?lapsulewesitenggara");
}

?>