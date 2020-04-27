<?php 
if(isset($_GET['reset_papua'])){
	
	mysqli_query($conn, "DELETE FROM kuotapapua");

	header("location: index.php?lappapua");
}

?>