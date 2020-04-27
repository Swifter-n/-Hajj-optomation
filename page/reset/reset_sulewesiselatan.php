<?php 
if(isset($_GET['reset_sulewesiselatan'])){
	
	mysqli_query($conn, "DELETE FROM kuotasulawesiselatan");

	header("location: index.php?lapsulewesiselatan");
}

?>