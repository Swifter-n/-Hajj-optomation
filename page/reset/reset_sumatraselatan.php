<?php 
if(isset($_GET['reset_sumatraselatan'])){
	
	mysqli_query($conn, "DELETE FROM kuotasumateraselatan");

	header("location: index.php?lapsumatraselatan");
}

?>