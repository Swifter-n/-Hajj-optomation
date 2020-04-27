<?php 
if(isset($_GET['reset_kalimatantimur'])){
	
	mysqli_query($conn, "DELETE FROM kuotakalimantantimur");

	header("location: index.php?lapkalimatantimur");
}

?>