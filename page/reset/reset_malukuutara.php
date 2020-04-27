<?php 
if(isset($_GET['reset_malukuutara'])){
	
	mysqli_query($conn, "DELETE FROM kuotamalukuutara");

	header("location: index.php?lapmalukuutara");
}

?>