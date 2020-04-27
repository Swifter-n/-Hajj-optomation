<?php 
if(isset($_GET['reset_bengkulu'])){
	
	mysqli_query($conn, "DELETE FROM kuotabengkulu");

	header("location: index.php?lapbengkulu");
}

?>