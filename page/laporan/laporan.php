<?php
include "../../function/config.php";



$acehQ = mysqli_query($conn, "SELECT * FROM kuotaaceh");
$acehQR = mysqli_query($conn, "SELECT kuotaaceh.*, datapaceh.pnama, datapaceh.pnama
                            FROM kuotaaceh, datapaceh
                            WHERE kuotaaceh.id = datapaceh.pid");
$acehQRY = mysqli_query($conn, "SELECT * FROM dataaceh WHERE Status = 1");

$aceh = mysqli_num_rows($acehQ);
$acehP = mysqli_num_rows($acehQR);
$acehPet = mysqli_num_rows($acehQRY);

//echo $bali;
//echo "<br/>";
//echo $baliP;
//echo "<br/>";
//echo $baliPet;

//Bali
$baliQ = mysqli_query($conn, "SELECT * FROM kuotabali");
$baliQR = mysqli_query($conn, "SELECT kuotabali.*, datapbali.pnama, datapbali.pnama
                            FROM kuotabali, datapbali
                            WHERE kuotabali.id = datapbali.pid");
$baliQRY = mysqli_query($conn, "SELECT * FROM databali WHERE Status = 1");

$bali = mysqli_num_rows($baliQ);
$baliP = mysqli_num_rows($baliQR);
$baliPet = mysqli_num_rows($baliQRY);

//Banten
$bantenQ = mysqli_query($conn, "SELECT * FROM kuotabanten");
$bantenQR = mysqli_query($conn, "SELECT kuotabanten.*, datapbanten.pnama, datapbanten.pumur
                            FROM kuotabanten, datapbanten
                            WHERE kuotabanten.id = datapbanten.pid");
$bantenQRY = mysqli_query($conn, "SELECT * FROM databanten WHERE Status = 1");

$banten = mysqli_num_rows($bantenQ);
$bantenP = mysqli_num_rows($bantenQR);
$bantenPet = mysqli_num_rows($bantenQRY);

//Bengkulu
$bengkuluQ = mysqli_query($conn, "SELECT * FROM kuotabengkulu");
$bengkuluQR = mysqli_query($conn, "SELECT kuotabengkulu.*, datapbengkulu.pnama, datapbengkulu.pumur
                            FROM kuotabengkulu, datapbengkulu
                            WHERE kuotabengkulu.id = datapbengkulu.pid");
$bengkuluQRY = mysqli_query($conn, "SELECT * FROM databengkulu WHERE Status = 1");

$bengkulu = mysqli_num_rows($bengkuluQ);
$bengkuluP = mysqli_num_rows($bengkuluQR);
$bengkuluPet = mysqli_num_rows($bengkuluQRY);

//Jambi
$jambiQ = mysqli_query($conn, "SELECT * FROM kuotajambi");
$jambiQR = mysqli_query($conn, "SELECT kuotajambi.*, datapjambi.pnama, datapjambi.pumur
                            FROM kuotajambi, datapjambi
                            WHERE kuotajambi.id = datapjambi.pid");
$jambiQRY = mysqli_query($conn, "SELECT * FROM datajambi WHERE Status = 1");

$jambi = mysqli_num_rows($jambiQ);
$jambiP = mysqli_num_rows($jambiQR);
$jambiPet = mysqli_num_rows($jambiQRY);

//Gorontalo
$gorontaloQ = mysqli_query($conn, "SELECT * FROM kuotagorontalo");
$gorontaloQR = mysqli_query($conn, "SELECT kuotagorontalo.*, datapgorontalo.pnama, datapgorontalo.pumur
                            FROM kuotagorontalo, datapgorontalo
                            WHERE kuotagorontalo.id = datapgorontalo.pid");
$gorontaloQRY = mysqli_query($conn, "SELECT * FROM datagorontalo WHERE Status = 1");

$goron = mysqli_num_rows($gorontaloQ);
$goronP = mysqli_num_rows($gorontaloQR);
$goronPet = mysqli_num_rows($gorontaloQRY);

// Lampung
$lampungQ = mysqli_query($conn, "SELECT * FROM kuotalampung");
$lampungQR = mysqli_query($conn, "SELECT kuotalampung.*, dataplampung.pnama, dataplampung.pumur
                            FROM kuotalampung, dataplampung
                            WHERE kuotalampung.id = dataplampung.pid");
$lampungQRY = mysqli_query($conn, "SELECT * FROM datalampung WHERE Status = 1");

$lampung = mysqli_num_rows($lampungQ);
$lampungP = mysqli_num_rows($lampungQR);
$lampungPet = mysqli_num_rows($lampungQRY);

// Riau
$riauQ = mysqli_query($conn, "SELECT * FROM kuotariau");
$riauQR = mysqli_query($conn, "SELECT kuotariau.*, datapriau.pnama, datapriau.pumur
                            FROM kuotariau, datapriau
                            WHERE kuotariau.id = datapriau.pid");
$riauQRY = mysqli_query($conn, "SELECT * FROM datariau WHERE Status = 1");

$riau = mysqli_num_rows($riauQ);
$riauP = mysqli_num_rows($riauQR);
$riauPet = mysqli_num_rows($riauQRY);

// Jakarta
$jakartaQ = mysqli_query($conn, "SELECT * FROM kuotadkijakarta");
$jakartaQR = mysqli_query($conn, "SELECT kuotadkijakarta.*, datapjakarta.pnama, datapjakarta.pumur
                            FROM kuotadkijakarta, datapjakarta
                            WHERE kuotadkijakarta.id = datapjakarta.pid");
$jakartaQRY = mysqli_query($conn, "SELECT * FROM datadkijakarta WHERE Status = 1");

$jakarta = mysqli_num_rows($jakartaQ);
$jakartaP = mysqli_num_rows($jakartaQR);
$jakartaPet = mysqli_num_rows($jakartaQRY);

// Bangka 
$bangkaQ = mysqli_query($conn, "SELECT * FROM kuotakepulauanbangkabelitung");
$bangkaQR = mysqli_query($conn, "SELECT kuotakepulauanbangkabelitung.*, datapbangka.pnama, datapbangka.pumur
                            FROM kuotakepulauanbangkabelitung, datapbangka
                            WHERE kuotakepulauanbangkabelitung.id = datapbangka.pid");
$bangkaQRY = mysqli_query($conn, "SELECT * FROM datakepulauanbangkabelitung WHERE Status = 1");

$bangka = mysqli_num_rows($bangkaQ);
$bangkaP = mysqli_num_rows($bangkaQR);
$bangkaPet = mysqli_num_rows($bangkaQRY);

// Jogya
$jogyaQ = mysqli_query($conn, "SELECT * FROM kuotayogyakarta");
$jogyaQR = mysqli_query($conn, "SELECT kuotayogyakarta.*, datapyogya.pnama, datapyogya.pumur
                            FROM kuotayogyakarta, datapyogya
                            WHERE kuotayogyakarta.id = datapyogya.pid");
$jogyaQRY = mysqli_query($conn, "SELECT * FROM datadiyogyakarta WHERE Status = 1");

$jogya = mysqli_num_rows($jogyaQ);
$jogyaP = mysqli_num_rows($jogyaQR);
$jogyaPet = mysqli_num_rows($jogyaQRY);

// Kepulauan Riau
$kepulauanriauQ = mysqli_query($conn, "SELECT * FROM kuotakepulauanriau");
$kepulauanriauQR = mysqli_query($conn, "SELECT kuotakepulauanriau
  .*, datapkepriau.pnama, datapkepriau.pumur
                            FROM kuotakepulauanriau, datapkepriau
                            WHERE kuotakepulauanriau.id = datapkepriau.pid");
$kepulauanriauQRY = mysqli_query($conn, "SELECT * FROM datakepulauanriau WHERE Status = 1");

$kepulauanriau = mysqli_num_rows($kepulauanriauQ);
$kepulauanriauP = mysqli_num_rows($kepulauanriauQR);
$kepulauanriauPet = mysqli_num_rows($kepulauanriauQRY);

// Maluku
$malukuQ = mysqli_query($conn, "SELECT * FROM kuotamaluku");
$malukuQR = mysqli_query($conn, "SELECT kuotamaluku.*, datapmaluku.pnama, datapmaluku.pumur
                            FROM kuotamaluku, datapmaluku
                            WHERE kuotamaluku.id = datapmaluku.pid");
$malukuQRY = mysqli_query($conn, "SELECT * FROM datamaluku WHERE Status = 1");

$maluku = mysqli_num_rows($malukuQ);
$malukuP = mysqli_num_rows($malukuQR);
$malukuPet = mysqli_num_rows($malukuQRY);

// Maluku Utara
$malukuutaraQ = mysqli_query($conn, "SELECT * FROM kuotamalukuutara");
$malukuutaraQR = mysqli_query($conn, "SELECT kuotamalukuutara.*, datapmalukuutara.pnama, datapmalukuutara.pumur
                            FROM kuotamalukuutara, datapmalukuutara
                            WHERE kuotamalukuutara.id = datapmalukuutara.pid");
$malukuutaraQRY = mysqli_query($conn, "SELECT * FROM datamalukuutara WHERE Status = 1");

$malukuutara = mysqli_num_rows($malukuutaraQ);
$malukuutaraP = mysqli_num_rows($malukuutaraQR);
$malukuutaraPet = mysqli_num_rows($malukuutaraQRY);

// Papua
$papuaQ = mysqli_query($conn, "SELECT * FROM kuotapapua");
$papuaQR = mysqli_query($conn, "SELECT kuotapapua.*, datappapua.pnama, datappapua.pumur
                            FROM kuotapapua, datappapua
                            WHERE kuotapapua.id = datappapua.pid");
$papuaQRY = mysqli_query($conn, "SELECT * FROM datapapua WHERE Status = 1");

$papua = mysqli_num_rows($papuaQ);
$papuaP = mysqli_num_rows($papuaQR);
$papuaPet = mysqli_num_rows($papuaQRY);

// Papua Barat
$papuabaratQ = mysqli_query($conn, "SELECT * FROM kuotapapuabarat");
$papuabaratQR = mysqli_query($conn, "SELECT kuotapapuabarat.*, datappapuabarat.pnama, datappapuabarat.pumur
                            FROM kuotapapuabarat, datappapuabarat
                            WHERE kuotapapuabarat.id = datappapuabarat.pid");
$papuabaratQRY = mysqli_query($conn, "SELECT * FROM datapapuabarat WHERE Status = 1");

$papuabarat = mysqli_num_rows($papuabaratQ);
$papuabaratP = mysqli_num_rows($papuabaratQR);
$papuabaratPet = mysqli_num_rows($papuabaratQRY);

// Nusatenggara Barat
$ntbQ = mysqli_query($conn, "SELECT * FROM kuotanusatenggarabarat");
$ntbQR = mysqli_query($conn, "SELECT kuotanusatenggarabarat.*, datapntb.pnama, datapntb.pumur
                            FROM kuotanusatenggarabarat, datapntb
                            WHERE kuotanusatenggarabarat.id = datapntb.pid");
$ntbQRY = mysqli_query($conn, "SELECT * FROM datanusatenggarabarat WHERE Status = 1");

$ntb = mysqli_num_rows($ntbQ);
$ntbP = mysqli_num_rows($ntbQR);
$ntbPet = mysqli_num_rows($ntbQRY);

// Nusatenggara Timur
$nttQ = mysqli_query($conn, "SELECT * FROM kuotanusatenggaratimur");
$nttQR = mysqli_query($conn, "SELECT kuotanusatenggaratimur.*, datapntt.pnama, datapntt.pumur
                            FROM kuotanusatenggaratimur, datapntt
                            WHERE kuotanusatenggaratimur.id = datapntt.pid");
$nttQRY = mysqli_query($conn, "SELECT * FROM datanusatenggaratimur WHERE Status = 1");

$ntt = mysqli_num_rows($nttQ);
$nttP = mysqli_num_rows($nttQR);
$nttPet = mysqli_num_rows($nttQRY);

// Jawa Barat
$jabarQ = mysqli_query($conn, "SELECT * FROM kuotajawabarat");
$jabarQR = mysqli_query($conn, "SELECT kuotajawabarat.*, datapjabar.pnama, datapjabar.pumur
                            FROM kuotajawabarat, datapjabar
                            WHERE kuotajawabarat.id = datapjabar.pid");
$jabarQRY = mysqli_query($conn, "SELECT * FROM datajawabarat WHERE Status = 1");

$jabar = mysqli_num_rows($jabarQ);
$jabarP = mysqli_num_rows($jabarQR);
$jabarPet = mysqli_num_rows($jabarQRY);

// Jawa Tengah
$jatengQ = mysqli_query($conn, "SELECT * FROM kuotajawatengah");
$jatengQR = mysqli_query($conn, "SELECT kuotajawatengah.*, datapjateng.pnama, datapjateng.pumur
                            FROM kuotajawatengah, datapjateng
                            WHERE kuotajawatengah.id = datapjateng.pid");
$jatengQRY = mysqli_query($conn, "SELECT * FROM datajawatengah WHERE Status = 1");

$jateng = mysqli_num_rows($jatengQ);
$jatengP = mysqli_num_rows($jatengQR);
$jatengPet = mysqli_num_rows($jatengQRY);

// Jawa Timur
$jatimQ = mysqli_query($conn, "SELECT * FROM kuotajawatimur");
$jatimQR = mysqli_query($conn, "SELECT kuotajawatimur.*, datapjatim.pnama, datapjatim.pumur
                            FROM kuotajawatimur, datapjatim
                            WHERE kuotajawatimur.id = datapjatim.pid");
$jatimQRY = mysqli_query($conn, "SELECT * FROM datajawatimur WHERE Status = 1");

$jatim = mysqli_num_rows($jatimQ);
$jatimP = mysqli_num_rows($jatimQR);
$jatimPet = mysqli_num_rows($jatimQRY);

// Sumatra Barat
$sumbarQ = mysqli_query($conn, "SELECT * FROM kuotasumaterabarat");
$sumbarQR = mysqli_query($conn, "SELECT kuotasumaterabarat.*, datapsumaterabarat.pnama, datapsumaterabarat.pumur
                            FROM kuotasumaterabarat, datapsumaterabarat
                            WHERE kuotasumaterabarat.id = datapsumaterabarat.pid");
$sumbarQRY = mysqli_query($conn, "SELECT * FROM datasumaterabarat WHERE Status = 1");

$sumbar = mysqli_num_rows($sumbarQ);
$sumbarP = mysqli_num_rows($sumbarQR);
$sumbarPet = mysqli_num_rows($sumbarQRY);

// Sumatra Selatan
$sumselQ = mysqli_query($conn, "SELECT * FROM kuotasumateraselatan");
$sumselQR = mysqli_query($conn, "SELECT kuotasumateraselatan.*, datapsumateraselatan.pnama, datapsumateraselatan.pumur
                            FROM kuotasumateraselatan, datapsumateraselatan
                            WHERE kuotasumateraselatan.id = datapsumateraselatan.pid");
$sumselQRY = mysqli_query($conn, "SELECT * FROM datasumateraselatan WHERE Status = 1");

$sumsel = mysqli_num_rows($sumselQ);
$sumselP = mysqli_num_rows($sumselQR);
$sumselPet = mysqli_num_rows($sumselQRY);

// Sumatra Utara
$sumutQ = mysqli_query($conn, "SELECT * FROM kuotasumaterautara");
$sumutQR = mysqli_query($conn, "SELECT kuotasumaterautara.*, datapsumaterautara.pnama, datapsumaterautara.pumur
                            FROM kuotasumaterautara, datapsumaterautara
                            WHERE kuotasumaterautara.id = datapsumaterautara.pid");
$sumutQRY = mysqli_query($conn, "SELECT * FROM datasumaterautara WHERE Status = 1");

$sumut = mysqli_num_rows($sumutQ);
$sumutP = mysqli_num_rows($sumutQR);
$sumutPet = mysqli_num_rows($sumutQRY);

// Kalimantan Barat
$kalbarQ = mysqli_query($conn, "SELECT * FROM kuotakalimantanbarat");
$kalbarQR = mysqli_query($conn, "SELECT kuotakalimantanbarat.*, datapkalbar.pnama, datapkalbar.pumur
                            FROM kuotakalimantanbarat, datapkalbar
                            WHERE kuotakalimantanbarat.id = datapkalbar.pid");
$kalbarQRY = mysqli_query($conn, "SELECT * FROM datakalimantanbarat WHERE Status = 1");

$kalbar = mysqli_num_rows($kalbarQ);
$kalbarP = mysqli_num_rows($kalbarQR);
$kalbarPet = mysqli_num_rows($kalbarQRY);

// Kalimantan Tengah
$kaltengQ = mysqli_query($conn, "SELECT * FROM kuotakalimantantengah");
$kaltengQR = mysqli_query($conn, "SELECT kuotakalimantantengah.*, datapkalteng.pnama, datapkalteng.pumur
                            FROM kuotakalimantantengah, datapkalteng
                            WHERE kuotakalimantantengah.id = datapkalteng.pid");
$kaltengQRY = mysqli_query($conn, "SELECT * FROM datakalimantantengah WHERE Status = 1");

$kalteng = mysqli_num_rows($kaltengQ);
$kaltengP = mysqli_num_rows($kaltengQR);
$kaltengPet = mysqli_num_rows($kaltengQRY);

// Kalimantan Selatan
$kalselQ = mysqli_query($conn, "SELECT * FROM kuotakalimantanselatan");
$kalselQR = mysqli_query($conn, "SELECT kuotakalimantanselatan.*, datapkalsel.pnama, datapkalsel.pumur
                            FROM kuotakalimantanselatan, datapkalsel
                            WHERE kuotakalimantanselatan.id = datapkalsel.pid");
$kalselQRY = mysqli_query($conn, "SELECT * FROM datakalimantanselatan WHERE Status = 1");

$kalsel = mysqli_num_rows($kalselQ);
$kalselP = mysqli_num_rows($kalselQR);
$kalselPet = mysqli_num_rows($kalselQRY);

// Kalimantan Timur
$kaltimQ = mysqli_query($conn, "SELECT * FROM kuotakalimantantimur");
$kaltimQR = mysqli_query($conn, "SELECT kuotakalimantantimur.*, datapkaltim.pnama, datapkaltim.pumur
                            FROM kuotakalimantantimur, datapkaltim
                            WHERE kuotakalimantantimur.id = datapkaltim.pid");
$kaltimQRY = mysqli_query($conn, "SELECT * FROM datakalimantantimur WHERE Status = 1");

$kaltim = mysqli_num_rows($kaltimQ);
$kaltimP = mysqli_num_rows($kaltimQR);
$kaltimPet = mysqli_num_rows($kaltimQRY);

// Sulawesi Tenggara
$sultenggaraQ = mysqli_query($conn, "SELECT * FROM kuotasulawesitenggara");
$sultenggaraQR = mysqli_query($conn, "SELECT kuotasulawesitenggara.*, datapsultenggara.pnama, datapsultenggara.pumur
                            FROM kuotasulawesitenggara, datapsultenggara
                            WHERE kuotasulawesitenggara.id = datapsultenggara.pid");
$sultenggaraQRY = mysqli_query($conn, "SELECT * FROM datasulawesitenggara WHERE Status = 1");

$sultenggara = mysqli_num_rows($sultenggaraQ);
$sultenggaraP = mysqli_num_rows($sultenggaraQR);
$sultenggaraPet = mysqli_num_rows($sultenggaraQRY);

// Sulawesi Barat
$sulbarQ = mysqli_query($conn, "SELECT * FROM kuotasulawesibarat");
$sulbarQR = mysqli_query($conn, "SELECT kuotasulawesibarat.*, datapsulbar.pnama, datapsulbar.pumur
                            FROM kuotasulawesibarat, datapsulbar
                            WHERE kuotasulawesibarat.id = datapsulbar.pid");
$sulbarQRY = mysqli_query($conn, "SELECT * FROM datasulawesibarat WHERE Status = 1");

$sulbar = mysqli_num_rows($papuaQ);
$sulbarP = mysqli_num_rows($papuaQR);
$sulbarPet = mysqli_num_rows($papuaQRY);

// Sulawesi Selatan
$sulselQ = mysqli_query($conn, "SELECT * FROM kuotasulawesiselatan");
$sulselQR = mysqli_query($conn, "SELECT kuotasulawesiselatan.*, datapsulsel.pnama, datapsulsel.pumur
                            FROM kuotasulawesiselatan, datapsulsel
                            WHERE kuotasulawesiselatan.id = datapsulsel.pid");
$sulselQRY = mysqli_query($conn, "SELECT * FROM datasulawesiselatan WHERE Status = 1");

$sulsel = mysqli_num_rows($sulselQ);
$sulselP = mysqli_num_rows($sulselQR);
$sulselPet = mysqli_num_rows($sulselQRY);

// Sulawesi Utara
$sulutQ = mysqli_query($conn, "SELECT * FROM kuotasulawesiutara");
$sulutQR = mysqli_query($conn, "SELECT kuotasulawesiutara.*, datapsulut.pnama, datapsulut.pumur
                            FROM kuotasulawesiutara, datapsulut
                            WHERE kuotasulawesiutara.id = datapsulut.pid");
$sulutQRY = mysqli_query($conn, "SELECT * FROM datasulawesiutara WHERE Status = 1");

$sulut = mysqli_num_rows($sulutQ);
$sulutP = mysqli_num_rows($sulutQR);
$sulutPet = mysqli_num_rows($sulutQRY);

// Sulawesi Tengah
$sultengQ = mysqli_query($conn, "SELECT * FROM kuotasulawesitengah");
$sultengQR = mysqli_query($conn, "SELECT kuotasulawesitengah.*, datapsulteng.pnama, datapsulteng.pumur
                            FROM kuotasulawesitengah, datapsulteng
                            WHERE kuotasulawesitengah.id = datapsulteng.pid");
$sultengQRY = mysqli_query($conn, "SELECT * FROM datasulawesitengah WHERE Status = 1");

$sulteng = mysqli_num_rows($sultengQ);
$sultengP = mysqli_num_rows($sultengQR);
$sultengPet = mysqli_num_rows($sultengQRY);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Provinsi', 'Jamaah', 'Pendamping', 'Petugas'],
          ['Aceh', <?php echo $aceh;?>, <?php echo $acehP;?>, <?php echo $acehPet;?>],
          ['Bali', <?php echo $bali;?>, <?php echo $baliP;?>, <?php echo $baliPet;?>],
          ['Banten', <?php echo $banten;?>, <?php echo $bantenP;?>, <?php echo $bantenPet;?>],
          ['Bengkulu', <?php echo $bengkulu;?>, <?php echo $bengkuluP;?>, <?php echo $bengkuluPet;?>],
          ['Jambi', <?php echo $jambi;?>, <?php echo $jambiP;?>, <?php echo $jambiPet;?>],
          ['Gorontalo', <?php echo $goron;?>, <?php echo $goronP;?>, <?php echo $goronPet;?>],
          ['Lampung', <?php echo $lampung;?>, <?php echo $lampungP;?>, <?php echo $lampungPet;?>],
          ['Riau', <?php echo $riau;?>, <?php echo $riauP;?>, <?php echo $riauPet;?>],
          ['Bangka Belitung', <?php echo $bangka;?>, <?php echo $bangkaP;?>, <?php echo $bangkaPet;?>],
          ['D.K.I Jakarta', <?php echo $jakarta;?>, <?php echo $jakartaP;?>, <?php echo $jakartaPet;?>],
          ['D.I Yogyakarta', <?php echo $jogya;?>, <?php echo $jogyaP;?>, <?php echo $jogyaPet;?>],
          ['kepulauan Riau', <?php echo $kepulauanriau;?>, <?php echo $kepulauanriauP;?>, <?php echo $kepulauanriauPet;?>],
          ['Maluku', <?php echo $maluku;?>, <?php echo $malukuP;?>, <?php echo $malukuPet;?>],
          ['Maluku Utara', <?php echo $malukuutara;?>, <?php echo $malukuutaraP;?>, <?php echo $malukuutaraPet;?>],
          ['Papua', <?php echo $papua;?>, <?php echo $papuaP;?>, <?php echo $papuaPet;?>],
          ['Papua Barat', <?php echo $papuabarat;?>, <?php echo $papuabaratP;?>, <?php echo $papuabaratPet;?>],
          ['Nusatenggara Barat', <?php echo $ntb;?>, <?php echo $ntbP;?>, <?php echo $ntbPet;?>],
          ['Nusatenggara Timur', <?php echo $ntt;?>, <?php echo $nttP;?>, <?php echo $nttPet;?>],
          ['Jawa Barat', <?php echo $jabar;?>, <?php echo $jabarP;?>, <?php echo $jabarPet;?>],
          ['Jawa Tengah', <?php echo $jateng;?>, <?php echo $jatengP;?>, <?php echo $jatengPet;?>],
          ['Jawa Timur', <?php echo $jatim;?>, <?php echo $jatimP;?>, <?php echo $jatimPet;?>],
          ['Sumatra Utara', <?php echo $sumut;?>, <?php echo $sumutP;?>, <?php echo $sumutPet;?>],
          ['Sumatra Barat', <?php echo $sumbar;?>, <?php echo $sumbarP;?>, <?php echo $sumbarPet;?>],
          ['Sumatra Selatan', <?php echo $sumsel;?>, <?php echo $sumselP;?>, <?php echo $sumselPet;?>],
          ['Kalimantan Barat', <?php echo $kalbar;?>, <?php echo $kalbarP;?>, <?php echo $kalbarPet;?>],
          ['Kalimantan Timur', <?php echo $kaltim;?>, <?php echo $kaltimP;?>, <?php echo $kaltimPet;?>],
          ['Kalimantan Selatan', <?php echo $kalsel;?>, <?php echo $kalselP;?>, <?php echo $kalselPet;?>],
          ['Kalimantan Tengah', <?php echo $kalteng;?>, <?php echo $kaltengP;?>, <?php echo $kaltengPet;?>],
          ['Sulawesi Selatan', <?php echo $sulsel;?>, <?php echo $sulselP;?>, <?php echo $sulselPet;?>],
          ['Sulawesi Barat', <?php echo $sulbar;?>, <?php echo $sulbarP;?>, <?php echo $sulbarPet;?>],
          ['Sulawesi Tenggara', <?php echo $sultenggara;?>, <?php echo $sultenggaraP;?>, <?php echo $sultenggaraPet;?>],
          ['Sulawesi Utara', <?php echo $sulut;?>, <?php echo $sulutP;?>, <?php echo $sulutPet;?>],
          ['Sulawesi Tengah', <?php echo $sulteng;?>, <?php echo $sultengP;?>, <?php echo $sultengPet;?>]
        ]);

        var options = {
          chart: {
            title: 'Hasil Optimasi Kuota Haji',
            subtitle: 'Jamaah, Pendamping, and Petugas: 2016/2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 1300px; height: 500px;"></div>
  </body>
</html>