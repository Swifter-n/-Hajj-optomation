<?php 
if(isset($_GET['reset_jawatengah'])){
	
	mysqli_query($conn, "DELETE FROM kuotajawatengah");

	header("location: index.php?lapjawatengah");
}

?>