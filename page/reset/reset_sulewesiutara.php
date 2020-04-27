<?php 
if(isset($_GET['reset_sulewesiutara'])){
	
	mysqli_query($conn, "DELETE FROM kuotasulawesiutara");

	header("location: index.php?lapsulewesiutara");
}

?>