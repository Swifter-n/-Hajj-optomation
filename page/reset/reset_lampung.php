<?php 
if(isset($_GET['reset_lampung'])){
	
	mysqli_query($conn, "DELETE FROM kuotalampung");

	header("location: index.php?laplampung");
}

?>