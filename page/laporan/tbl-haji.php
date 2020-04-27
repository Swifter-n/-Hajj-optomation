<?php
$acehQ = mysqli_query($conn, "SELECT * FROM kuotaaceh");
$acehQR = mysqli_query($conn, "SELECT kuotaaceh.*, datapaceh.pnama, datapaceh.pnama
                            FROM kuotaaceh, datapaceh
                            WHERE kuotaaceh.id = datapaceh.pid");
$acehQRY = mysqli_query($conn, "SELECT * FROM dataaceh WHERE Status = 1");

$aceh = mysqli_num_rows($acehQ);
$acehP = mysqli_num_rows($acehQR);
$acehPet = mysqli_num_rows($acehQRY);

$sumaceh = $aceh + $acehP + $acehPet;
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

$sumbali = $bali + $baliP + $baliPet;

//Banten
$bantenQ = mysqli_query($conn, "SELECT * FROM kuotabanten");
$bantenQR = mysqli_query($conn, "SELECT kuotabanten.*, datapbanten.pnama, datapbanten.pumur
                            FROM kuotabanten, datapbanten
                            WHERE kuotabanten.id = datapbanten.pid");
$bantenQRY = mysqli_query($conn, "SELECT * FROM databanten WHERE Status = 1");

$banten = mysqli_num_rows($bantenQ);
$bantenP = mysqli_num_rows($bantenQR);
$bantenPet = mysqli_num_rows($bantenQRY);
$sumbanten = $banten + $bantenP + $bantenPet;

//Bengkulu
$bengkuluQ = mysqli_query($conn, "SELECT * FROM kuotabengkulu");
$bengkuluQR = mysqli_query($conn, "SELECT kuotabengkulu.*, datapbengkulu.pnama, datapbengkulu.pumur
                            FROM kuotabengkulu, datapbengkulu
                            WHERE kuotabengkulu.id = datapbengkulu.pid");
$bengkuluQRY = mysqli_query($conn, "SELECT * FROM databengkulu WHERE Status = 1");

$bengkulu = mysqli_num_rows($bengkuluQ);
$bengkuluP = mysqli_num_rows($bengkuluQR);
$bengkuluPet = mysqli_num_rows($bengkuluQRY);
$sumbengkulu = $bengkulu + $bengkuluP + $bengkuluPet;


//Jambi
$jambiQ = mysqli_query($conn, "SELECT * FROM kuotajambi");
$jambiQR = mysqli_query($conn, "SELECT kuotajambi.*, datapjambi.pnama, datapjambi.pumur
                            FROM kuotajambi, datapjambi
                            WHERE kuotajambi.id = datapjambi.pid");
$jambiQRY = mysqli_query($conn, "SELECT * FROM datajambi WHERE Status = 1");

$jambi = mysqli_num_rows($jambiQ);
$jambiP = mysqli_num_rows($jambiQR);
$jambiPet = mysqli_num_rows($jambiQRY);

$sumjambi = $jambi + $jambiP + $jambiPet;

//Gorontalo
$gorontaloQ = mysqli_query($conn, "SELECT * FROM kuotagorontalo");
$gorontaloQR = mysqli_query($conn, "SELECT kuotagorontalo.*, datapgorontalo.pnama, datapgorontalo.pumur
                            FROM kuotagorontalo, datapgorontalo
                            WHERE kuotagorontalo.id = datapgorontalo.pid");
$gorontaloQRY = mysqli_query($conn, "SELECT * FROM datagorontalo WHERE Status = 1");

$goron = mysqli_num_rows($gorontaloQ);
$goronP = mysqli_num_rows($gorontaloQR);
$goronPet = mysqli_num_rows($gorontaloQRY);

$sumgoron = $goron + $goronP + $goronPet;

// Lampung
$lampungQ = mysqli_query($conn, "SELECT * FROM kuotalampung");
$lampungQR = mysqli_query($conn, "SELECT kuotalampung.*, dataplampung.pnama, dataplampung.pumur
                            FROM kuotalampung, dataplampung
                            WHERE kuotalampung.id = dataplampung.pid");
$lampungQRY = mysqli_query($conn, "SELECT * FROM datalampung WHERE Status = 1");

$lampung = mysqli_num_rows($lampungQ);
$lampungP = mysqli_num_rows($lampungQR);
$lampungPet = mysqli_num_rows($lampungQRY);

$sumlampung = $lampung + $lampungP + $lampungPet;

// Riau
$riauQ = mysqli_query($conn, "SELECT * FROM kuotariau");
$riauQR = mysqli_query($conn, "SELECT kuotariau.*, datapriau.pnama, datapriau.pumur
                            FROM kuotariau, datapriau
                            WHERE kuotariau.id = datapriau.pid");
$riauQRY = mysqli_query($conn, "SELECT * FROM datariau WHERE Status = 1");

$riau = mysqli_num_rows($riauQ);
$riauP = mysqli_num_rows($riauQR);
$riauPet = mysqli_num_rows($riauQRY);

$sumriau = $riau + $riauP + $riauPet;

// Jakarta
$jakartaQ = mysqli_query($conn, "SELECT * FROM kuotadkijakarta");
$jakartaQR = mysqli_query($conn, "SELECT kuotadkijakarta.*, datapjakarta.pnama, datapjakarta.pumur
                            FROM kuotadkijakarta, datapjakarta
                            WHERE kuotadkijakarta.id = datapjakarta.pid");
$jakartaQRY = mysqli_query($conn, "SELECT * FROM datadkijakarta WHERE Status = 1");

$jakarta = mysqli_num_rows($jakartaQ);
$jakartaP = mysqli_num_rows($jakartaQR);
$jakartaPet = mysqli_num_rows($jakartaQRY);

$sumjakarta = $jakarta + $jakartaP + $jakartaPet;

// Bangka 
$bangkaQ = mysqli_query($conn, "SELECT * FROM kuotakepulauanbangkabelitung");
$bangkaQR = mysqli_query($conn, "SELECT kuotakepulauanbangkabelitung.*, datapbangka.pnama, datapbangka.pumur
                            FROM kuotakepulauanbangkabelitung, datapbangka
                            WHERE kuotakepulauanbangkabelitung.id = datapbangka.pid");
$bangkaQRY = mysqli_query($conn, "SELECT * FROM datakepulauanbangkabelitung WHERE Status = 1");

$bangka = mysqli_num_rows($bangkaQ);
$bangkaP = mysqli_num_rows($bangkaQR);
$bangkaPet = mysqli_num_rows($bangkaQRY);

$sumbangka = $bangka + $bangkaP + $bangkaPet;

// Jogya
$jogyaQ = mysqli_query($conn, "SELECT * FROM kuotayogyakarta");
$jogyaQR = mysqli_query($conn, "SELECT kuotayogyakarta.*, datapyogya.pnama, datapyogya.pumur
                            FROM kuotayogyakarta, datapyogya
                            WHERE kuotayogyakarta.id = datapyogya.pid");
$jogyaQRY = mysqli_query($conn, "SELECT * FROM datadiyogyakarta WHERE Status = 1");

$jogya = mysqli_num_rows($jogyaQ);
$jogyaP = mysqli_num_rows($jogyaQR);
$jogyaPet = mysqli_num_rows($jogyaQRY);

$sumjogya = $jogya + $jogyaP + $jogyaPet;

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

$sumkepriau = $kepulauanriau + $kepulauanriauP + $kepulauanriauPet;

// Maluku
$malukuQ = mysqli_query($conn, "SELECT * FROM kuotamaluku");
$malukuQR = mysqli_query($conn, "SELECT kuotamaluku.*, datapmaluku.pnama, datapmaluku.pumur
                            FROM kuotamaluku, datapmaluku
                            WHERE kuotamaluku.id = datapmaluku.pid");
$malukuQRY = mysqli_query($conn, "SELECT * FROM datamaluku WHERE Status = 1");

$maluku = mysqli_num_rows($malukuQ);
$malukuP = mysqli_num_rows($malukuQR);
$malukuPet = mysqli_num_rows($malukuQRY);

$summaluku = $maluku + $malukuP + $malukuPet;

// Maluku Utara
$malukuutaraQ = mysqli_query($conn, "SELECT * FROM kuotamalukuutara");
$malukuutaraQR = mysqli_query($conn, "SELECT kuotamalukuutara.*, datapmalukuutara.pnama, datapmalukuutara.pumur
                            FROM kuotamalukuutara, datapmalukuutara
                            WHERE kuotamalukuutara.id = datapmalukuutara.pid");
$malukuutaraQRY = mysqli_query($conn, "SELECT * FROM datamalukuutara WHERE Status = 1");

$malukuutara = mysqli_num_rows($malukuutaraQ);
$malukuutaraP = mysqli_num_rows($malukuutaraQR);
$malukuutaraPet = mysqli_num_rows($malukuutaraQRY);

$summalukuutara = $malukuutara + $malukuutaraP + $malukuutaraPet;

// Papua
$papuaQ = mysqli_query($conn, "SELECT * FROM kuotapapua");
$papuaQR = mysqli_query($conn, "SELECT kuotapapua.*, datappapua.pnama, datappapua.pumur
                            FROM kuotapapua, datappapua
                            WHERE kuotapapua.id = datappapua.pid");
$papuaQRY = mysqli_query($conn, "SELECT * FROM datapapua WHERE Status = 1");

$papua = mysqli_num_rows($papuaQ);
$papuaP = mysqli_num_rows($papuaQR);
$papuaPet = mysqli_num_rows($papuaQRY);

$sumpapua = $papua + $papuaP + $papuaPet;

// Papua Barat
$papuabaratQ = mysqli_query($conn, "SELECT * FROM kuotapapuabarat");
$papuabaratQR = mysqli_query($conn, "SELECT kuotapapuabarat.*, datappapuabarat.pnama, datappapuabarat.pumur
                            FROM kuotapapuabarat, datappapuabarat
                            WHERE kuotapapuabarat.id = datappapuabarat.pid");
$papuabaratQRY = mysqli_query($conn, "SELECT * FROM datapapuabarat WHERE Status = 1");

$papuabarat = mysqli_num_rows($papuabaratQ);
$papuabaratP = mysqli_num_rows($papuabaratQR);
$papuabaratPet = mysqli_num_rows($papuabaratQRY);

$sumpapuabarat = $papuabarat + $papuabaratP + $papuabaratPet;

// Nusatenggara Barat
$ntbQ = mysqli_query($conn, "SELECT * FROM kuotanusatenggarabarat");
$ntbQR = mysqli_query($conn, "SELECT kuotanusatenggarabarat.*, datapntb.pnama, datapntb.pumur
                            FROM kuotanusatenggarabarat, datapntb
                            WHERE kuotanusatenggarabarat.id = datapntb.pid");
$ntbQRY = mysqli_query($conn, "SELECT * FROM datanusatenggarabarat WHERE Status = 1");

$ntb = mysqli_num_rows($ntbQ);
$ntbP = mysqli_num_rows($ntbQR);
$ntbPet = mysqli_num_rows($ntbQRY);

$sumntb = $ntb + $ntbP + $ntbPet;

// Nusatenggara Timur
$nttQ = mysqli_query($conn, "SELECT * FROM kuotanusatenggaratimur");
$nttQR = mysqli_query($conn, "SELECT kuotanusatenggaratimur.*, datapntt.pnama, datapntt.pumur
                            FROM kuotanusatenggaratimur, datapntt
                            WHERE kuotanusatenggaratimur.id = datapntt.pid");
$nttQRY = mysqli_query($conn, "SELECT * FROM datanusatenggaratimur WHERE Status = 1");

$ntt = mysqli_num_rows($nttQ);
$nttP = mysqli_num_rows($nttQR);
$nttPet = mysqli_num_rows($nttQRY);

$sumntt = $ntt + $nttP + $nttPet;

// Jawa Barat
$jabarQ = mysqli_query($conn, "SELECT * FROM kuotajawabarat");
$jabarQR = mysqli_query($conn, "SELECT kuotajawabarat.*, datapjabar.pnama, datapjabar.pumur
                            FROM kuotajawabarat, datapjabar
                            WHERE kuotajawabarat.id = datapjabar.pid");
$jabarQRY = mysqli_query($conn, "SELECT * FROM datajawabarat WHERE Status = 1");

$jabar = mysqli_num_rows($jabarQ);
$jabarP = mysqli_num_rows($jabarQR);
$jabarPet = mysqli_num_rows($jabarQRY);

$sumjabar = $jabar + $jabarP + $jabarPet;

// Jawa Tengah
$jatengQ = mysqli_query($conn, "SELECT * FROM kuotajawatengah");
$jatengQR = mysqli_query($conn, "SELECT kuotajawatengah.*, datapjateng.pnama, datapjateng.pumur
                            FROM kuotajawatengah, datapjateng
                            WHERE kuotajawatengah.id = datapjateng.pid");
$jatengQRY = mysqli_query($conn, "SELECT * FROM datajawatengah WHERE Status = 1");

$jateng = mysqli_num_rows($jatengQ);
$jatengP = mysqli_num_rows($jatengQR);
$jatengPet = mysqli_num_rows($jatengQRY);

$sumjateng = $jateng + $jatengP + $jatengPet;


// Jawa Timur
$jatimQ = mysqli_query($conn, "SELECT * FROM kuotajawatimur");
$jatimQR = mysqli_query($conn, "SELECT kuotajawatimur.*, datapjatim.pnama, datapjatim.pumur
                            FROM kuotajawatimur, datapjatim
                            WHERE kuotajawatimur.id = datapjatim.pid");
$jatimQRY = mysqli_query($conn, "SELECT * FROM datajawatimur WHERE Status = 1");

$jatim = mysqli_num_rows($jatimQ);
$jatimP = mysqli_num_rows($jatimQR);
$jatimPet = mysqli_num_rows($jatimQRY);

$sumjatim = $jatim + $jatimP + $jatimPet;

// Sumatra Barat
$sumbarQ = mysqli_query($conn, "SELECT * FROM kuotasumaterabarat");
$sumbarQR = mysqli_query($conn, "SELECT kuotasumaterabarat.*, datapsumaterabarat.pnama, datapsumaterabarat.pumur
                            FROM kuotasumaterabarat, datapsumaterabarat
                            WHERE kuotasumaterabarat.id = datapsumaterabarat.pid");
$sumbarQRY = mysqli_query($conn, "SELECT * FROM datasumaterabarat WHERE Status = 1");

$sumbar = mysqli_num_rows($sumbarQ);
$sumbarP = mysqli_num_rows($sumbarQR);
$sumbarPet = mysqli_num_rows($sumbarQRY);

$sumsumbar = $sumbar + $sumbarP + $sumbarPet;

// Sumatra Selatan
$sumselQ = mysqli_query($conn, "SELECT * FROM kuotasumateraselatan");
$sumselQR = mysqli_query($conn, "SELECT kuotasumateraselatan.*, datapsumateraselatan.pnama, datapsumateraselatan.pumur
                            FROM kuotasumateraselatan, datapsumateraselatan
                            WHERE kuotasumateraselatan.id = datapsumateraselatan.pid");
$sumselQRY = mysqli_query($conn, "SELECT * FROM datasumateraselatan WHERE Status = 1");

$sumsel = mysqli_num_rows($sumselQ);
$sumselP = mysqli_num_rows($sumselQR);
$sumselPet = mysqli_num_rows($sumselQRY);

$sumsumsel = $sumsel + $sumselP + $sumselPet;

// Sumatra Utara
$sumutQ = mysqli_query($conn, "SELECT * FROM kuotasumaterautara");
$sumutQR = mysqli_query($conn, "SELECT kuotasumaterautara.*, datapsumaterautara.pnama, datapsumaterautara.pumur
                            FROM kuotasumaterautara, datapsumaterautara
                            WHERE kuotasumaterautara.id = datapsumaterautara.pid");
$sumutQRY = mysqli_query($conn, "SELECT * FROM datasumaterautara WHERE Status = 1");

$sumut = mysqli_num_rows($sumutQ);
$sumutP = mysqli_num_rows($sumutQR);
$sumutPet = mysqli_num_rows($sumutQRY);
$sumsumut = $sumut + $sumutP + $sumutPet;

// Kalimantan Barat
$kalbarQ = mysqli_query($conn, "SELECT * FROM kuotakalimantanbarat");
$kalbarQR = mysqli_query($conn, "SELECT kuotakalimantanbarat.*, datapkalbar.pnama, datapkalbar.pumur
                            FROM kuotakalimantanbarat, datapkalbar
                            WHERE kuotakalimantanbarat.id = datapkalbar.pid");
$kalbarQRY = mysqli_query($conn, "SELECT * FROM datakalimantanbarat WHERE Status = 1");

$kalbar = mysqli_num_rows($kalbarQ);
$kalbarP = mysqli_num_rows($kalbarQR);
$kalbarPet = mysqli_num_rows($kalbarQRY);

$sumkalbar = $kalbar + $kalbarP + $kalbarPet;

// Kalimantan Tengah
$kaltengQ = mysqli_query($conn, "SELECT * FROM kuotakalimantantengah");
$kaltengQR = mysqli_query($conn, "SELECT kuotakalimantantengah.*, datapkalteng.pnama, datapkalteng.pumur
                            FROM kuotakalimantantengah, datapkalteng
                            WHERE kuotakalimantantengah.id = datapkalteng.pid");
$kaltengQRY = mysqli_query($conn, "SELECT * FROM datakalimantantengah WHERE Status = 1");

$kalteng = mysqli_num_rows($kaltengQ);
$kaltengP = mysqli_num_rows($kaltengQR);
$kaltengPet = mysqli_num_rows($kaltengQRY);

$sumkalteng = $kalteng + $kaltengP + $kaltengPet;

// Kalimantan Selatan
$kalselQ = mysqli_query($conn, "SELECT * FROM kuotakalimantanselatan");
$kalselQR = mysqli_query($conn, "SELECT kuotakalimantanselatan.*, datapkalsel.pnama, datapkalsel.pumur
                            FROM kuotakalimantanselatan, datapkalsel
                            WHERE kuotakalimantanselatan.id = datapkalsel.pid");
$kalselQRY = mysqli_query($conn, "SELECT * FROM datakalimantanselatan WHERE Status = 1");

$kalsel = mysqli_num_rows($kalselQ);
$kalselP = mysqli_num_rows($kalselQR);
$kalselPet = mysqli_num_rows($kalselQRY);

$sumkalsel = $kalsel + $kalselP + $kalselPet;

// Kalimantan Timur
$kaltimQ = mysqli_query($conn, "SELECT * FROM kuotakalimantantimur");
$kaltimQR = mysqli_query($conn, "SELECT kuotakalimantantimur.*, datapkaltim.pnama, datapkaltim.pumur
                            FROM kuotakalimantantimur, datapkaltim
                            WHERE kuotakalimantantimur.id = datapkaltim.pid");
$kaltimQRY = mysqli_query($conn, "SELECT * FROM datakalimantantimur WHERE Status = 1");

$kaltim = mysqli_num_rows($kaltimQ);
$kaltimP = mysqli_num_rows($kaltimQR);
$kaltimPet = mysqli_num_rows($kaltimQRY);
$sumkaltim = $kaltim + $kaltimP + $kaltimPet;


// Sulawesi Tenggara
$sultenggaraQ = mysqli_query($conn, "SELECT * FROM kuotasulawesitenggara");
$sultenggaraQR = mysqli_query($conn, "SELECT kuotasulawesitenggara.*, datapsultenggara.pnama, datapsultenggara.pumur
                            FROM kuotasulawesitenggara, datapsultenggara
                            WHERE kuotasulawesitenggara.id = datapsultenggara.pid");
$sultenggaraQRY = mysqli_query($conn, "SELECT * FROM datasulawesitenggara WHERE Status = 1");

$sultenggara = mysqli_num_rows($sultenggaraQ);
$sultenggaraP = mysqli_num_rows($sultenggaraQR);
$sultenggaraPet = mysqli_num_rows($sultenggaraQRY);

$sumsultenggara = $sultenggara + $sultenggaraP + $sultenggaraPet;

// Sulawesi Barat
$sulbarQ = mysqli_query($conn, "SELECT * FROM kuotasulawesibarat");
$sulbarQR = mysqli_query($conn, "SELECT kuotasulawesibarat.*, datapsulbar.pnama, datapsulbar.pumur
                            FROM kuotasulawesibarat, datapsulbar
                            WHERE kuotasulawesibarat.id = datapsulbar.pid");
$sulbarQRY = mysqli_query($conn, "SELECT * FROM datasulawesibarat WHERE Status = 1");

$sulbar = mysqli_num_rows($papuaQ);
$sulbarP = mysqli_num_rows($papuaQR);
$sulbarPet = mysqli_num_rows($papuaQRY);

$sumsulbar = $sulbar + $sulbarP + $sulbarPet;

// Sulawesi Selatan
$sulselQ = mysqli_query($conn, "SELECT * FROM kuotasulawesiselatan");
$sulselQR = mysqli_query($conn, "SELECT kuotasulawesiselatan.*, datapsulsel.pnama, datapsulsel.pumur
                            FROM kuotasulawesiselatan, datapsulsel
                            WHERE kuotasulawesiselatan.id = datapsulsel.pid");
$sulselQRY = mysqli_query($conn, "SELECT * FROM datasulawesiselatan WHERE Status = 1");

$sulsel = mysqli_num_rows($sulselQ);
$sulselP = mysqli_num_rows($sulselQR);
$sulselPet = mysqli_num_rows($sulselQRY);

$sumsulsel = $sulsel + $sulselP + $sulselPet;

// Sulawesi Utara
$sulutQ = mysqli_query($conn, "SELECT * FROM kuotasulawesiutara");
$sulutQR = mysqli_query($conn, "SELECT kuotasulawesiutara.*, datapsulut.pnama, datapsulut.pumur
                            FROM kuotasulawesiutara, datapsulut
                            WHERE kuotasulawesiutara.id = datapsulut.pid");
$sulutQRY = mysqli_query($conn, "SELECT * FROM datasulawesiutara WHERE Status = 1");

$sulut = mysqli_num_rows($sulutQ);
$sulutP = mysqli_num_rows($sulutQR);
$sulutPet = mysqli_num_rows($sulutQRY);

$sumsulut = $sulut + $sulutP + $sulutPet;

// Sulawesi Tengah
$sultengQ = mysqli_query($conn, "SELECT * FROM kuotasulawesitengah");
$sultengQR = mysqli_query($conn, "SELECT kuotasulawesitengah.*, datapsulteng.pnama, datapsulteng.pumur
                            FROM kuotasulawesitengah, datapsulteng
                            WHERE kuotasulawesitengah.id = datapsulteng.pid");
$sultengQRY = mysqli_query($conn, "SELECT * FROM datasulawesitengah WHERE Status = 1");

$sulteng = mysqli_num_rows($sultengQ);
$sultengP = mysqli_num_rows($sultengQR);
$sultengPet = mysqli_num_rows($sultengQRY);

$sumsulteng = $sulteng + $sultengP + $sultengPet;

//total
$jumjemah = $aceh + $bali + $bengkulu + $jogya + $jakarta + $bangka + $jambi + $lampung + $riau + $goron + $kepulauanriau + $banten + $maluku + $malukuutara + $papua + $papuabarat + $jabar + $jatim + $jateng + $sultenggara + $sulteng + $sulut + $sulsel + $sulbar + $sumbar + $sumsel + $sumut + $kaltim + $kalbar + $kalsel + $kalteng + $ntt + $ntb;

$jumpen = $acehP + $baliP + $bengkuluP +$jogyaP + $jakartaP + $bangkaP +$jambiP + $lampungP + $riauP + $goronP + $kepulauanriauP + $bantenP + $malukuP + $malukuutaraP + $papuaP + $papuabaratP + $jabarP + $jatimP + $jatengP + $sultenggaraP + $sultengP + $sulutP +$sulselP + $sulbarP + $sumbarP + $sumselP + $sumutP + $kaltimP + $kalbarP + $kalselP + $kaltengP + $nttP + $ntbP;

$jumpet = $acehPet + $baliPet + $bengkuluPet + $jogyaPet + $jakartaPet + $bangkaPet + $jambiPet + $lampungPet + $riauPet + $goronPet + $kepulauanriauPet + $bantenPet + $malukuPet + $malukuutaraPet + $papuaPet + $papuabaratPet + $jabarPet + $jatimPet + $jatengPet + $sultenggaraPet + $sultengPet + $sulutPet + $sulselPet + $sulbarPet + $sumbarPet + $sumselPet + $sumutPet + $kaltimPet + $kalbarPet + $kalselPet + $kaltengPet + $nttPet + $ntbPet;

$jumsum = $jumjemah + $jumpen + $jumpet;
//$jumsum = $sumaceh + $sumbali + $sumbengkulu + $sumjogya + $sumjakarta + $sumbangka + $sumjambi + $sumlampung + $sumriau + $sumgoron + $sumkepriau + $sumbanten + $summaluku + $summalukuutara + $sumpapua + $sumpapuabarat + $sumjabar + $sumjatim + $sumjateng + $sumsultenggara + $sumsulteng + $sumsulut + $sumsulsel + $sumsulbar + $sumsumbar + $sumsumsel + $sumsumut + $sumkaltim + $sumkalbar + $sumkalsel + $sumkalteng + $sumntt + $sumntb;

?>

<div class="container">
<div class="row">
    <div class="col-md-12">
        <h2>Laporan Total Jamaah Haji Dari Semua Provinsi</h2>
    </div>
</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                       
                            <tr>
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>Jemaah Haji</th>
                                <th>Pendamping</th>
                                <th>Jumlah Petugas Haji Daerah</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                      
                            <tr>
                                <td>1</td>
                                <td>Aceh</td>
                                <td><?=number_format($aceh);?></td>
                                <td><?=number_format($acehP);?></td>
                                <td><?=number_format($acehPet);?></td>
                                <td><?=number_format($sumaceh);?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bali</td>
                                <td><?=number_format($bali);?></td>
                                <td><?=number_format($baliP);?></td>
                                <td><?=number_format($baliPet);?></td>
                                <td><?=number_format($sumbali);?></td>
                            </tr>
                            <tr>
                               <td>3</td>
                                <td>Jakarta</td>
                                <td><?=number_format($jakarta);?></td>
                                <td><?=number_format($jakartaP);?></td>
                                <td><?=number_format($jakartaPet);?></td>
                                <td><?=number_format($sumjakarta);?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bangka Belitung</td>
                                <td><?=number_format($bangka);?></td>
                                <td><?=number_format($bangkaP);?></td>
                                <td><?=number_format($bangkaPet);?></td>
                                <td><?=number_format($sumbangka);?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bengkulu</td>
                                <td><?=number_format($bengkulu);?></td>
                                <td><?=number_format($bengkuluP);?></td>
                                <td><?=number_format($bengkuluPet);?></td>
                                <td><?=number_format($sumbengkulu);?></td>
                            </tr>
                            <tr>
                               <td>6</td>
                                <td>Jambi</td>
                                <td><?=number_format($jambi);?></td>
                                <td><?=number_format($jambiP);?></td>
                                <td><?=number_format($jambiPet);?></td>
                                <td><?=number_format($sumjambi);?></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Riau</td>
                                <td><?=number_format($riau);?></td>
                                <td><?=number_format($riauP);?></td>
                                <td><?=number_format($riauPet);?></td>
                                <td><?=number_format($sumriau);?></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Kepulauan Riau</td>
                                <td><?=number_format($kepulauanriau);?></td>
                                <td><?=number_format($kepulauanriauP);?></td>
                                <td><?=number_format($kepulauanriauPet);?></td>
                                <td><?=number_format($sumkepriau);?></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Lampung</td>
                                <td><?=number_format($lampung);?></td>
                                <td><?=number_format($lampungP);?></td>
                                <td><?=number_format($lampungPet);?></td>
                                <td><?=number_format($sumlampung);?></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Banten</td>
                                <td><?=number_format($banten);?></td>
                                <td><?=number_format($bantenP);?></td>
                                <td><?=number_format($bantenPet);?></td>
                                <td><?=number_format($sumbanten);?></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Gorontalo</td>
                                <td><?=number_format($goron);?></td>
                                <td><?=number_format($goronP);?></td>
                                <td><?=number_format($goronPet);?></td>
                                <td><?=number_format($sumgoron);?></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Yogyakarta</td>
                                <td><?=number_format($jogya);?></td>
                                <td><?=number_format($jogyaP);?></td>
                                <td><?=number_format($jogyaPet);?></td>
                                <td><?=number_format($sumjogya);?></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Jawa Barat</td>
                                <td><?=number_format($jabar);?></td>
                                <td><?=number_format($jabarP);?></td>
                                <td><?=number_format($jabarPet);?></td>
                                <td><?=number_format($sumjabar);?></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Jawa Timur</td>
                                <td><?=number_format($jatim);?></td>
                                <td><?=number_format($jatimP);?></td>
                                <td><?=number_format($jatimPet);?></td>
                                <td><?=number_format($sumjatim);?></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Jawa Tengah</td>
                                <td><?=number_format($jateng);?></td>
                                <td><?=number_format($jatengP);?></td>
                                <td><?=number_format($jatengPet);?></td>
                                <td><?=number_format($sumjateng);?></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Nusa Tenggara Barat</td>
                                <td><?=number_format($ntb);?></td>
                                <td><?=number_format($ntbP);?></td>
                                <td><?=number_format($ntbPet);?></td>
                                <td><?=number_format($sumntb);?></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Nusa Tenggara Timur</td>
                                <td><?=number_format($ntt);?></td>
                                <td><?=number_format($nttP);?></td>
                                <td><?=number_format($nttPet);?></td>
                                <td><?=number_format($sumntt);?></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Papua</td>
                                <td><?=number_format($papua);?></td>
                                <td><?=number_format($papuaP);?></td>
                                <td><?=number_format($papuaPet);?></td>
                                <td><?=number_format($sumpapua);?></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Papua Barat</td>
                                <td><?=number_format($papuabarat);?></td>
                                <td><?=number_format($papuabaratP);?></td>
                                <td><?=number_format($papuabaratPet);?></td>
                                <td><?=number_format($sumpapuabarat);?></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Maluku</td>
                                <td><?=number_format($maluku);?></td>
                                <td><?=number_format($malukuP);?></td>
                                <td><?=number_format($malukuPet);?></td>
                                <td><?=number_format($summaluku);?></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Maluku Utara</td>
                                <td><?=number_format($malukuutara);?></td>
                                <td><?=number_format($malukuutaraP);?></td>
                                <td><?=number_format($malukuutaraPet);?></td>
                                <td><?=number_format($summalukuutara);?></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Sumatera Barat</td>
                                <td><?=number_format($sumbar);?></td>
                                <td><?=number_format($sumbarP);?></td>
                                <td><?=number_format($sumbarPet);?></td>
                                <td><?=number_format($sumsumbar);?></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Sumatera Selatan</td>
                                <td><?=number_format($sumsel);?></td>
                                <td><?=number_format($sumselP);?></td>
                                <td><?=number_format($sumselPet);?></td>
                                <td><?=number_format($sumsumsel);?></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Sumatera Utara</td>
                                <td><?=number_format($sumut);?></td>
                                <td><?=number_format($sumutP);?></td>
                                <td><?=number_format($sumutPet);?></td>
                                <td><?=number_format($sumsumut);?></td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Kalimantan Barat</td>
                                <td><?=number_format($kalbar);?></td>
                                <td><?=number_format($kalbarP);?></td>
                                <td><?=number_format($kalbarPet);?></td>
                                <td><?=number_format($sumkalbar);?></td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Kalimantan Selatan</td>
                                <td><?=number_format($kalsel);?></td>
                                <td><?=number_format($kalselP);?></td>
                                <td><?=number_format($kalselPet);?></td>
                                <td><?=number_format($sumkalsel)?></td>
                            <tr>
                                <td>27</td>
                                <td>Kalimantan Timur</td>
                                <td><?=number_format($kaltim);?></td>
                                <td><?=number_format($kaltimP);?></td>
                                <td><?=number_format($kaltimPet);?></td>
                                <td><?=number_format($sumkaltim);?></td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Kalimantan Tengah</td>
                                <td><?=number_format($kalteng);?></td>
                                <td><?=number_format($kaltengP);?></td>
                                <td><?=number_format($kaltengPet);?></td>
                                <td><?=number_format($sumkalteng);?></td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Sulawesi Barat</td>
                                <td><?=number_format($sulbar);?></td>
                                <td><?=number_format($sulbarP);?></td>
                                <td><?=number_format($sulbarPet);?></td>
                                <td><?=number_format($sumsulbar);?></td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Sulawesi Selatan</td>
                                <td><?=number_format($sulsel);?></td>
                                <td><?=number_format($sulselP);?></td>
                                <td><?=number_format($sulselPet);?></td>
                                <td><?=number_format($sumsulsel);?></td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Sulawesi Tengah</td>
                                <td><?=number_format($sulteng);?></td>
                                <td><?=number_format($sultengP);?></td>
                                <td><?=number_format($sultengPet);?></td>
                                <td><?=number_format($sumsulteng);?></td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Sulawesi Tenggara</td>
                                <td><?=number_format($sultenggara);?></td>
                                <td><?=number_format($sultenggaraP);?></td>
                                <td><?=number_format($sultenggaraPet);?></td>
                                <td><?=number_format($sumsultenggara);?></td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Sulawesi Utara</td>
                                <td><?=number_format($sulut);?></td>
                                <td><?=number_format($sulutP);?></td>
                                <td><?=number_format($sulutPet);?></td>
                                <td><?=number_format($sumsulut);?></td>
                            </tr>
                            <tr>
                                <td colspan="2">Jumlah : </td>
                                <td><?=number_format($jumjemah);?></td>
                                <td><?=number_format($jumpen);?></td>
                                <td><?=number_format($jumpet);?></td>
                                <td><?=number_format($jumsum);?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
		</div>
	</div>
</div>