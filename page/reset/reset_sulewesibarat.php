<?php 
if(isset($_GET['reset_sulewesibarat'])){
	
	mysqli_query($conn, "DELETE FROM kuotasulawesibarat");

	header("location: index.php?lapsulewesibarat");
}

?>