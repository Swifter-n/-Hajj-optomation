<?php 
if(isset($_GET['reset_bangka'])){
	
	mysqli_query($conn, "DELETE FROM kuotakepulauanbangkabelitung");

	header("location: index.php?lapbangka");
}

?>