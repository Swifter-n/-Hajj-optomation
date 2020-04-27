<?php 
if(isset($_GET['reset_kalimatanbarat'])){
	
	mysqli_query($conn, "DELETE FROM kuotakalimantanbarat");

	header("location: index.php?lapkalimatanbarat");
}

?>