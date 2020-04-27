<?php 
if(isset($_GET['reset_kalimatanselatan'])){
	
	mysqli_query($conn, "DELETE FROM kuotakalimantanselatan");

	header("location: index.php?lapkalimatanselatan");
}

?>