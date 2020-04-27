<?php 
if(isset($_GET['reset_kalimatantengah'])){
	
	mysqli_query($conn, "DELETE FROM kuotakalimantantengah");

	header("location: index.php?lapkalimatantengah");
}

?>