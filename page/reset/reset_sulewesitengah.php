<?php 
if(isset($_GET['reset_sulewesitengah'])){
	
	mysqli_query($conn, "DELETE FROM kuotasulawesitengah");

	header("location: index.php?lapsulewesitengah");
}

?>