<?php

if(isset($_GET['kalimatan-delete'])){
    $id = $_GET['kalimatan-delete'];
    mysqli_query($conn, "DELETE FROM datakalimantan WHERE id = '$id'");
    header("location: index.php?kalimatan_barat");
}
?>