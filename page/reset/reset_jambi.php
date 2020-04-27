<?php 
if(isset($_GET['reset_jambi'])){
	
	mysqli_query($conn, "DELETE FROM kuotajambi");

	header("location: index.php?lapjambi");
}

?>