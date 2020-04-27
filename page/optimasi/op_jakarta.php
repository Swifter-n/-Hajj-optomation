<?php

 $query = mysqli_query($conn, "SELECT * FROM datadkijakarta ORDER BY rand() LIMIT 5668");
$count = mysqli_num_rows($query);

if(isset($_POST['btn_save'])){
    $input = $_POST['input'];
}
?>

<div class="container">
<div class="row">
<div class="col-lg-12">
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
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php if(mysqli_num_rows($query) > 1){

                        $no = 0; ?>
                        <?php foreach($query as $row){?>
                            <tr>
                                <td>
                                <img src="asset/no-image" width="88" class="img-responsive" />
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
                                <td class="center"><a href="index.php?jakarta-delete=<?=$row['id'];?>" class="btn btn-primary btn-xs" type="button">Delete</a></td>
                            </tr>
                            <tr>
                                <td>
                                <?php 
                                echo $no;
                                $data = array();
                                $data[$row['id']] = fuzzy($row['Umur'], 80) + record($row['Record_Haji'],$row['Record_Haji'],$row['Record_Haji'], 1) + Kesehatan($row['Riwayat_Penyakit'],$row['Riwayat_Penyakit'],$row['Riwayat_Penyakit'],$row['Riwayat_Penyakit'], 1) + fuzzy($row['Rentang_Waktu_Pendaftaran'], 730) + pekerjaan($row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'],$row['Pekerjaan'], 10);

                                
                                
                                print_r($data);
                                echo "<br/>";
                                $myid = implode(" ", array_keys($data) );

                                 $rand = array_rand($data);
                                 $cpos = $rand;
                        //$bestvalueawal = bestvalue($cpos, $data);
                        //echo "ini posisi awal ". $bestvalueawal ." current di posisi " .$bestvalueawal;
                        //echo "<br/>";

                        $i=1;
                        while($i<=100){
                            $bestvalue = bestvalue($cpos, $data);
                            if($data[$cpos] >= @$data[$bestvalue]){
                                $cpos = $cpos;
                                break;
                            }else{
                                $cpos = $bestvalue;
                            }
                            
                            $i++;
                        }

                        echo "Ini posisi ke-" . $myid;
                        echo "<br/>";
                        echo "Dengan Nilai = ". $data[$cpos];

                        $jumlah = 5328 - 41;
                        if($no < $jumlah) {
                        $a = mysqli_query($conn, "SELECT * FROM datadkijakarta where id = '$myid' ");
                        $b = mysqli_fetch_array($a);
                            mysqli_query($conn, "insert into kuotadkijakarta values ('$myid', '$b[Nama]', '$b[Umur]', '$b[Status_Menikah]', '$b[Pekerjaan]', '$b[Kota]', '$b[Provinsi]', '$b[Negara]', '$b[Record_Haji]', '$b[Riwayat_Penyakit]', '$b[Rentang_Waktu_Pendaftaran]', '$b[Status]')") or die(mysqli_error($conn));
                        }
                        header("location: index.php?lapjkt&success");

                    ?>


</td>
                            </tr>
                            </tr>
                            <?php $no++; }?>
                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
