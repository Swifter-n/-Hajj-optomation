<?php 
if(isset($_POST['btn_search'])){
  $_SESSION['session_search'] = $_POST['keyword'];
  $keyword = $_SESSION['session_search'];
}else{
  $keyword = $_SESSION['session_search'];
}

	$query = mysqli_query($conn, "SELECT * FROM kuotasulawesibarat WHERE Nama LIKE '%$keyword%'");
?>
<div class="row">
<div class="col-lg-4">
<h5>Hasil Pencarian Jamaah Haji</h5>
    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Status Menikah</th>
                                <th>Pekerjaan</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Negara</th>
                                <th>Record Haji</th>
                                <th>Riwayat Penyakit</th>
                                <th>Waktu Pendaftaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(mysqli_num_rows($query)){?>
                        <?php $row = mysqli_fetch_assoc($query);?>
                            <tr>
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
                            </tr>
                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            </div>