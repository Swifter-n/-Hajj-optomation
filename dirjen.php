<?php 
ob_start();
include 'function/config.php';

if(isset($_SESSION['dirjen_username'])) header("location: login.php");
?>

<?php include 'include/head.php';?>
 <div id="wrapper">
        <div class="container">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dirjen.php?home">Dirjen</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li><a href="page/laporan/laporan.php" target="_blank"><i class="fa fa-dashboard fa-fw"></i>Laporan Optimasi Haji</a></li>
                <li>
                    <a href="dirjen.php?tbl_haji"><i class="fa fa-pencil-square-o fa-fw"></i> Laporan Haji Dari Semua Provinsi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
        <div id="page-wrapper">
            <?php
            if (isset($_GET["tbl_haji"])) include("page/laporan/tbl-haji.php");
            else include("page/home/indexx.php");
            ?>
        </div>
    </div>
    <?php include("include/footer.php") ?>
</body>
</html>
<?php mysqli_close($conn);?>
<?php ob_end_flush(); ?>