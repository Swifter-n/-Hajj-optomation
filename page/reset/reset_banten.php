<?php 
if(isset($_GET['reset_banten'])){
	
	mysqli_query($conn, "DELETE FROM kuotabanten");

	header("location: index.php?lapbanten");
}

?>