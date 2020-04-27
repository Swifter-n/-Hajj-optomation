<?php 
if(isset($_GET['reset_sumatrautara'])){
	
	mysqli_query($conn, "DELETE FROM kuotasumaterautara");

	header("location: index.php?lapsumatrautara");
}

?>