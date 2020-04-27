<?php

if(isset($_GET['submit'])){
    $cari = $_GET['cari'];
    $hasil = pencarian($cari);
}
$queryy = mysqli_query($conn, "SELECT * FROM kuotasulawesitengah ORDER BY id ASC");

$query = mysqli_query($conn, "SELECT kuotasulawesitengah.*, datapsulteng.pnama, datapsulteng.pumur
                            FROM kuotasulawesitengah, datapsulteng
                            WHERE kuotasulawesitengah.id = datapsulteng.pid
                            ORDER BY id ASC");
$pet = mysqli_query($conn, "SELECT * FROM datasulawesitengah WHERE Status = 1 ORDER BY id ASC");

$count2 = mysqli_num_rows($queryy);
$count1 = mysqli_num_rows($query); 
$count = mysqli_num_rows($pet);

$total = $count2 - $count1; 
?>
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Kuota &raquo; Sulawesi Tengah</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <a id="reset" href="index.php?reset_sulawesitengah">Reset</a>
    </div>
    <div class="col-lg-6">
        <form class="navbar-form navbar-left" role="search" method="post" action="index.php?search_sulawesitengah">
        <div class="form-group">
        <input type="text" name="keyword" class="form-control" placeholder="Search Jamaah...">
        </div>
        <button type="submit" name="btn_search" class="btn btn-default">Search</button>
      </form>
    </div>

</div>
<div class="row">
<div class="col-lg-4">
<h5>List Jamaah Haji</h5>
    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <?php if(mysqli_num_rows($query) > 1){
                            $no = 1;?>
                        <tr><th colspan="3">Total : <?=$total;?></th></tr>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Umur</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($queryy as $row){?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$row['Nama'];?></td>
                                <td><?=$row['Umur'];?></td>
                            </tr>
                            <?php $no++;}?>
                            <?php }?>    
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
            <h5>List Pendamping dan yang mendampingi Haji</h5>
                 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <?php if(mysqli_num_rows($query) > 1){
                            $no = 1;?>
                        <tr><th colspan="5">Total : <?=$count1;?></th></tr>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Nama</th>
                                <th>Umur</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($query as $row){?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$row['Nama'];?></td>
                                <td><?=$row['Umur'];?></td>
                                <td><?=$row['pnama'];?></td>
                                <td><?=$row['pumur'];?></td>
                            </tr>
                            <?php $no++;}?>
                            <?php }?>    
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
            <h5>List Petugas Haji</h5>
                 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <?php if(mysqli_num_rows($query) > 1){
                            $no = 1;?>
                        <tr><th colspan="3">Total Petugas : <?=$count;?></th></tr>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Umur</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($pet as $roww){?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$roww['Nama'];?></td>
                                <td><?=$roww['Umur'];?></td>
                            </tr>
                            <?php $no++;}?>
                            <?php }?>   
                        </tbody>
                    </table>
                </div>
            </div>

            </div>
            </div>