<?php
/** Pagination **/

$per_page = 25;
$cur_page = 1;

if(isset($_GET['page4'])){
    $cur_page = $_GET['page4'];
    $cur_page = ($cur_page > 1) ? $cur_page : 1; 
}
$total_data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM databanten"));
$total_page = ceil($total_data / $per_page);
$offset = ($cur_page - 1) * $per_page;

/** End Of Pagination **/

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $status = $_POST['status'];
    $pekerjaan =$_POST['pekerjaan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $negara = $_POST['negara'];
    $record = $_POST['record'];
    $penyakit = $_POST['penyakit'];
    $waktu_pendaftar = $_POST['waktu_pendaftar'];

    mysqli_query($conn, "INSERT INTO databanten VALUES('', '$nama', '$umur', '$status', '$pekerjaan', '$kota', '$provinsi', '$negara', '$record', '$penyakit', '$waktu_pendaftar')");
    header("location: index.php?banten");
}

    
    $query = mysqli_query($conn, "SELECT * FROM databanten ORDER BY id ASC LIMIT $per_page OFFSET $offset");


?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Wilayah &raquo; Banten</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Data
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="" method="post">
                         <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" />
                            </div>
                             <div class="form-group">
                                <label>Umur</label>
                                <input class="form-control" type="text" name="umur" placeholder="Umur" />
                            </div>
                             <div class="form-group">
                                <label>Status Menikah</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="menikah" name="status" />Menikah
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="tidak menikah" name="status" />Tidak Menikah 
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Perkerjaan</label>
                                <select class="form-control" name="pekerjaan">
                                    <option value=""> - choose - </option>
                                    <option value="TNI"> TNI </option>
                                    <option value="Polisi"> Polisi </option>
                                    <option value="PNS"> PNS </option>
                                    <option value="Guru"> Guru </option>
                                    <option value="Pengacara"> Pengacara</option>
                                    <option value="Hakim"> Hakim</option>
                                    <option value="Mentri">Menteri </option>
                                    <option value="Jaksa"> Jaksa</option>
                                    <option value="Pegawai"> Pegawai </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Wiraswasta"> Wiraswasta </option>
                                    <option value="Pedagang"> Pedagang </option>
                                    <option value="Buruh"> Buruh </option>
                                    <option value="Nelayan"> Nelayan </option>
                                    <option value="Petani"> Petani </option>
                                    <option value="Dokter"> Dokter</option>
                                    <option value="Bidan"> Bidan</option>
                                    <option value="Perawat"> Perawat</option>
                                    <option value="Apoteker"> Apoteker</option>
                                    <option value="Masinis"> Masinis</option>
                                    <option value="Pilot"> Pilot</option>
                                    <option value="Astronot"> Astronot</option>
                                    <option value="Nahkoda"> Nahkoda</option>
                                    <option value="Supir"> Supir</option>
                                    <option value="Ojek"> Ojek</option>
                                    <option value="Entertainer"> Entertainer</option>
                                    <option value="Aktor"> Aktor</option>
                                    <option value="Ibu Rumah Tangga"> Ibu Rumah Tangga </option>
                                    <option value="Asisten Rumah Tangga"> Asisten Rumah Tangga</option>
                                    <option value="Tunakarya"> Tunakarya </option>
                                    <option value="Lain-lain"> Lain-Lain</option>

                                </select>
                            </div>
                            <div class="form-group">
                               <label>Kota</label>
                                <input class="form-control" type="text" name="kota" placeholder="Kota" />
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input class="form-control" type="text" name="provinsi" placeholder="Provinsi" />
                            </div>
                            <div class="form-group">
                                <label>Negara</label>
                                <input class="form-control" type="text" name="negara" placeholder="Negara" />
                            </div>
                            <div class="form-group">
                                <label>Record Haji</label>
                                <input class="form-control" type="text" name="record" placeholder="Record Haji" />
                            </div>
                            <div class="form-group">
                                <label>Riwayat Kesehatan</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="-" name="penyakit" /> Tidak ada Penyakit 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="penyakit ringan" name="penyakit" />Penyakit Ringan 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="penyakit sedang" name="penyakit" />Penyakit Sedang
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="penyakit berat" name="penyakit" />Penyakit Berat
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Rentang Waktu Pendaftaran</label>
                                <input class="form-control" type="text" name="waktu_pendaftar" placeholder="Rentang Waktu Pendaftaran" />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="file" />
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Save</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Notifications
            </div>
            <div class="panel-body">
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                    Approve yang naik haji sesuai dengan standar yang ada.
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <!--<form method="POST" action="index.php?optimasibanten">
                <input type="text" name="input" placeholder="Insert data yang ingin dimasukan">
                <input type="submit" name="btn_save" value="Optimasi" onclick="sweet()">
            </form>-->
             <a class="btn btn-primary" href="index.php?optimasibanten" onclick="sweet()">Optimasi</a>
            <script type="text/javascript">
                function sweet (){
                swal("Good job!", "Mohon Menunggu Data Sedang di Proses", "success");}
            </script>
            </div>
        </div>
        <br/>
        <div class="panel panel-default">
            <div class="panel-heading">
                List Data
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Status Menikah</th>
                                <th>Pekerjaan</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Negara</th>
                                <th>Record Haji</th>
                                <th>Riwayar Penyakit</th>
                                <th>Rentang Waktu Pendaftaran</th>
                                <th>Petugas</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(mysqli_num_rows($query) > 1){?>
                        <?php foreach($query as $row){?>
                            <tr>
                               <td>
                                <img src="asset/no-image.png" width="88" class="img-responsive" />
                                </td>
                                <td><?=$row['Nama'];?></td>
                                <td><?=$row['Umur'];?></td>
                                <td><?=$row['Status_Menikah'];?></td>
                                <td><?=$row['Pekerjaan'];?></td>
                                <td><?=$row['Kota'];?></td>
                                <td><?=$row['Provinsi'];?></td>
                                <td><?=$row['Negara'];?></td>
                                <td><?=$row['Record_Haji'];?></td>
                                <td><?=$row['Riwayat_Penyakit'];?></td>
                                <td><?=$row['Rentang_Waktu_Pendaftaran'];?></td>
                                <td><?=$row['Status'];?></td>
                                <td class="center"><a href="index.php?jakarta-delete=<?=$row['id'];?>" class="btn btn-primary btn-xs" type="button">Delete</a></td>
                            </tr>
                             <?php }?>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php if(isset($total_page)){ ?>
  <?php if($total_page > 1){?>

<nav class="text-center">
  <ul class="pagination">
  <?php if($cur_page > 1){?>
    <li>
        <a href="index.php?page4=<?php echo $cur_page - 1;?>" aria-label="Previous">
            <span aria-hidden="true">Prev</span>
        </a>
    </li>
    <?php }else{ ?>
      <li class = "disabled"><span aria-hidden="true">Prev</span></li>
    <?php } ?>
    <?php if($cur_page < $total_page){?>
    <li>
      <a href="index.php?page4=<?php echo $cur_page + 1;?>" aria-label="Next">
        <span aria-hidden="true">Next</span>
      </a>
    </li>
    <?php }else{ ?>
       <li class = "disabled"><span aria-hidden="true">Next</span></li>
       <?php } ?>
  </ul>
</nav>

<?php } ?>
<?php } ?>
    </div>
</div>