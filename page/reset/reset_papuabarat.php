<?php 
if(isset($_GET['reset_papuabarat'])){
	
	mysqli_query($conn, "DELETE FROM kuotapapuabarat");

	header("location: index.php?lappapuabarat");
}

?>