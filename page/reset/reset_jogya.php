<?php 
if(isset($_GET['reset_jawajogya'])){
	
	mysqli_query($conn, "DELETE FROM kuotayogyakarta");

	header("location: index.php?lapjogya");
}

?>