<?php 
if(isset($_GET['reset_gorontalo'])){
	
	mysqli_query($conn, "DELETE FROM kuotagorontalo");

	header("location: index.php?lapgorontalo");
}

?>