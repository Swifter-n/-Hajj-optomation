<?php
date_default_timezone_set("asia/jakarta");
session_start();
ob_start();
include "function/config.php";
include "function/fuzzy.php";

if(!isset($_SESSION['admin_username'])) header("location: login.php");
?>
<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>
<body>
    <div id="wrapper">
        <?php include("include/header.php") ?>
        <div id="page-wrapper">
            <?php
            if(isset($_GET['jakarta']) || isset($_GET['page'])) include("page/wilayah/jakarta.php");
            else if(isset($_GET['jakarta-delete']) || isset($_GET['page'])) include("page/wilayah/jakarta-delete.php");
            else if(isset($_GET['optimasijakarta']) || isset($_GET['page'])) include("page/optimasi/op_jakarta.php");
            else if(isset($_GET['lapjkt']) || isset($_GET['page'])) include("page/kuota/kuota_jkt.php");

            else if(isset($_GET['bali']) || isset($_GET['page1'])) include("page/wilayah/bali.php");
            else if(isset($_GET['bali-delete']) || isset($_GET['page1'])) include("page/wilayah/bali-delete.php");
            else if(isset($_GET['optimasibali']) || isset($_GET['page1'])) include("page/optimasi/op_bali.php");
            else if(isset($_GET['lapbali']) || isset($_GET['page1'])) include("page/kuota/kuota_bali.php");

            else if(isset($_GET['aceh']) || isset($_GET['page2'])) include("page/wilayah/aceh.php");
            else if(isset($_GET['aceh-delete']) || isset($_GET['page2'])) include("page/wilayah/aceh-delete.php");
            else if(isset($_GET['optimasiaceh']) || isset($_GET['page2'])) include("page/optimasi/op_aceh.php");
            else if(isset($_GET['lapaceh']) || isset($_GET['page2'])) include("page/kuota/kuota_aceh.php");

            else if(isset($_GET['jogya']) || isset($_GET['page33'])) include("page/wilayah/yogyakarta.php");
            else if(isset($_GET['jogya-delete']) || isset($_GET['page33'])) include("page/wilayah/yogyakarta-delete.php");
            else if(isset($_GET['optimasijogya']) || isset($_GET['page33'])) include("page/optimasi/op_jogya.php");
            else if(isset($_GET['lapjogya']) || isset($_GET['page33'])) include("page/kuota/kuota_jogya.php");

            else if(isset($_GET['banten']) || isset($_GET['page4'])) include("page/wilayah/banten.php");
            else if(isset($_GET['banten-delete']) || isset($_GET['page4'])) include("page/wilayah/banten-delete.php");
            else if(isset($_GET['optimasibanten']) || isset($_GET['page4'])) include("page/optimasi/op_banten.php");
            else if(isset($_GET['lapbanten']) || isset($_GET['page4'])) include("page/kuota/kuota_banten.php");

            else if(isset($_GET['bangka']) || isset($_GET['page3'])) include("page/wilayah/bangka.php");
            else if(isset($_GET['bangka-delete']) || isset($_GET['page3'])) include("page/wilayah/bangka-delete.php");
            else if(isset($_GET['optimasibangka']) || isset($_GET['page3'])) include("page/optimasi/op_bangka.php");
            else if(isset($_GET['lapbangka']) || isset($_GET['page3'])) include("page/kuota/kuota_bangka.php");

            else if(isset($_GET['bengkulu']) || isset($_GET['page5'])) include("page/wilayah/bengkulu.php");
            else if(isset($_GET['bengkulu-delete']) || isset($_GET['page5'])) include("page/wilayah/bengkulu-delete.php");
            else if(isset($_GET['optimasibengkulu']) || isset($_GET['page5'])) include("page/optimasi/op_bengkulu.php");
            else if(isset($_GET['lapbengkulu']) || isset($_GET['page5'])) include("page/kuota/kuota_bengkulu.php");

            else if(isset($_GET['riau']) || isset($_GET['page23'])) include("page/wilayah/riau.php");
            else if(isset($_GET['riau-delete']) || isset($_GET['page23'])) include("page/wilayah/riau-delete.php");
            else if(isset($_GET['optimasiriau']) || isset($_GET['page23'])) include("page/optimasi/op_riau.php");
            else if(isset($_GET['lapriau']) || isset($_GET['page23'])) include("page/kuota/kuota_riau.php");

            else if(isset($_GET['jambi']) || isset($_GET['page7'])) include("page/wilayah/jambi.php");
            else if(isset($_GET['jambi-delete']) || isset($_GET['page7'])) include("page/wilayah/jambi-delete.php");
            else if(isset($_GET['optimasijambi']) || isset($_GET['page7'])) include("page/optimasi/op_jambi.php");
            else if(isset($_GET['lapjambi']) || isset($_GET['page7'])) include("page/kuota/kuota_jambi.php");

            else if(isset($_GET['lampung']) || isset($_GET['page16'])) include("page/wilayah/lampung.php");
            else if(isset($_GET['lampung-delete']) || isset($_GET['page16'])) include("page/wilayah/lampung-delete.php");
            else if(isset($_GET['optimasilampung']) || isset($_GET['page16'])) include("page/optimasi/op_lampung.php");
            else if(isset($_GET['laplampung']) || isset($_GET['page16'])) include("page/kuota/kuota_lampung.php");

            else if(isset($_GET['maluku']) || isset($_GET['page17'])) include("page/wilayah/maluku.php");
            else if(isset($_GET['maluku-delete']) || isset($_GET['page17'])) include("page/wilayah/maluku-delete.php");
            else if(isset($_GET['optimasimaluku']) || isset($_GET['page17'])) include("page/optimasi/op_maluku.php");
            else if(isset($_GET['lapmaluku']) || isset($_GET['page17'])) include("page/kuota/kuota_maluku.php");

            else if(isset($_GET['maluku_utara']) || isset($_GET['page18'])) include("page/wilayah/malukuutara.php");
            else if(isset($_GET['malukuutara-delete']) || isset($_GET['page18'])) include("page/wilayah/malukuutara-delete.php");
            else if(isset($_GET['optimasimalukuutara']) || isset($_GET['page18'])) include("page/optimasi/op_malukuutara.php");
            else if(isset($_GET['lapmalukuutara']) || isset($_GET['page18'])) include("page/kuota/kuota_malukuutara.php");

            else if(isset($_GET['papua']) || isset($_GET['page21'])) include("page/wilayah/papua.php");
            else if(isset($_GET['papua-delete']) || isset($_GET['page21'])) include("page/wilayah/papua-delete.php");
            else if(isset($_GET['optimasipapua']) || isset($_GET['page21'])) include("page/optimasi/op_papua.php");
            else if(isset($_GET['lappapua']) || isset($_GET['page21'])) include("page/kuota/kuota_papua.php");

            else if(isset($_GET['papua_barat']) || isset($_GET['page22'])) include("page/wilayah/papuabarat.php");
            else if(isset($_GET['papuabarat-delete']) || isset($_GET['page22'])) include("page/wilayah/papuabarat-delete.php");
            else if(isset($_GET['optimasipapuabarat']) || isset($_GET['page22'])) include("page/optimasi/op_papuabarat.php");
            else if(isset($_GET['lappapuabarat']) || isset($_GET['page22'])) include("page/kuota/kuota_papuabarat.php");

            else if(isset($_GET['nusatenggara_barat']) || isset($_GET['page19'])) include("page/wilayah/nusatenggarabarat.php");
            else if(isset($_GET['nusatenggarabarat-delete']) || isset($_GET['page19'])) include("page/wilayah/nusatenggarabarat-delete.php");
            else if(isset($_GET['optimasinusatenggarabarat']) || isset($_GET['page19'])) include("page/optimasi/op_nusatenggarabarat.php");
            else if(isset($_GET['lapnusatenggarabarat']) || isset($_GET['page19'])) include("page/kuota/kuota_nusatenggarabarat.php");

            else if(isset($_GET['nusatenggara_timur']) || isset($_GET['page20'])) include("page/wilayah/nusatenggaratimur.php");
            else if(isset($_GET['nusatenggaratimur-delete']) || isset($_GET['page20'])) include("page/wilayah/nusatenggaratimur-delete.php");
            else if(isset($_GET['optimasinusatenggaratimur']) || isset($_GET['page20'])) include("page/optimasi/op_nusatenggaratimur.php");
            else if(isset($_GET['lapnusatenggaratimur']) || isset($_GET['page20'])) include("page/kuota/kuota_nusatenggaratimur.php");

            else if(isset($_GET['gorontalo']) || isset($_GET['page6'])) include("page/wilayah/gorontalo.php");
            else if(isset($_GET['gorontalo-delete']) || isset($_GET['page6'])) include("page/wilayah/gorontalo-delete.php");
            else if(isset($_GET['optimasigorontalo']) || isset($_GET['page6'])) include("page/optimasi/op_gorontalo.php");
            else if(isset($_GET['lapgorontalo']) || isset($_GET['page6'])) include("page/kuota/kuota_gorontalo.php");

            else if(isset($_GET['kalimatan_barat']) || isset($_GET['page11'])) include("page/wilayah/kalimantanbarat.php");
            else if(isset($_GET['kalimatanbarat-delete']) || isset($_GET['page11'])) include("page/wilayah/kalimatanbarat-delete.php");
            else if(isset($_GET['optimasikalimatanbarat']) || isset($_GET['page11'])) include("page/optimasi/op_kalimantanbarat.php");
            else if(isset($_GET['lapkalimatanbarat']) || isset($_GET['page11'])) include("page/kuota/kuota_kalimantanbarat.php");

            else if(isset($_GET['kalimatan_timur']) || isset($_GET['page14'])) include("page/wilayah/kalimantantimur.php");
            else if(isset($_GET['kalimatantimur-delete']) || isset($_GET['page14'])) include("page/wilayah/kalimatantimur-delete.php");
            else if(isset($_GET['optimasikalimantantimur']) || isset($_GET['page14'])) include("page/optimasi/op_kalimantantimur.php");
            else if(isset($_GET['lapkalimatantimur']) || isset($_GET['page14'])) include("page/kuota/kuota_kalimantantimur.php");

            else if(isset($_GET['kalimatan_selatan']) || isset($_GET['page12'])) include("page/wilayah/kalimantanselatan.php");
            else if(isset($_GET['kalimatanselatan']) || isset($_GET['page12'])) include("page/wilayah/kalimatanselatan-delete.php");
            else if(isset($_GET['optimasikalimatanselatan']) || isset($_GET['page12'])) include("page/optimasi/op_kalimantanselatan.php");
            else if(isset($_GET['lapkalimatanselatan']) || isset($_GET['page12'])) include("page/kuota/kuota_kalimantanselatan.php");

            else if(isset($_GET['kalimatan_tengah']) || isset($_GET['page13'])) include("page/wilayah/kalimantantengah.php");
            else if(isset($_GET['kalimatantengah-delete']) || isset($_GET['page13'])) include("page/wilayah/kalimatantengah-delete.php");
            else if(isset($_GET['optimasikalimatantengah']) || isset($_GET['page13'])) include("page/optimasi/op_kalimantantengah.php");
            else if(isset($_GET['lapkalimatantengah']) || isset($_GET['page13'])) include("page/kuota/kuota_kalimantantengah.php");

            else if(isset($_GET['kepulauan_riau']) || isset($_GET['page15'])) include("page/wilayah/kepulauanriau.php");
            else if(isset($_GET['kepulauanriau-delete']) || isset($_GET['page15'])) include("page/wilayah/kepulauanriau-delete.php");
            else if(isset($_GET['optimasikepulauanriau']) || isset($_GET['page15'])) include("page/optimasi/op_kepulauanriau.php");
            else if(isset($_GET['lapkepulauanriau']) || isset($_GET['page15'])) include("page/kuota/kuota_kepulauanriau.php");

            else if(isset($_GET['sulewesi_barat']) || isset($_GET['page25'])) include("page/wilayah/sulewesibarat.php");
            else if(isset($_GET['sulewesibarat-delete']) || isset($_GET['page25'])) include("page/wilayah/sulewesibarat-delete.php");
            else if(isset($_GET['optimasisulewesibarat']) || isset($_GET['page25'])) include("page/optimasi/op_sulawesibarat.php");
            else if(isset($_GET['lapsulewesibarat']) || isset($_GET['page25'])) include("page/kuota/kuota_sulawesibarat.php");

            else if(isset($_GET['sulewesi_selatan']) || isset($_GET['page26'])) include("page/wilayah/sulewesiselatan.php");
            else if(isset($_GET['sulewesiselatan-delete']) || isset($_GET['page26'])) include("page/wilayah/sulewesiselatan-delete.php");
            else if(isset($_GET['optimasisulewesiselatan']) || isset($_GET['page26'])) include("page/optimasi/op_sulawesiselatan.php");
            else if(isset($_GET['lapsulewesiselatan']) || isset($_GET['page26'])) include("page/kuota/kuota_sulawesiselatan.php");

            else if(isset($_GET['sulewesi_tengah']) || isset($_GET['page27'])) include("page/wilayah/sulewesitengah.php");
            else if(isset($_GET['sulewesitengah-delete']) || isset($_GET['page27'])) include("page/wilayah/sulewesitengah-delete.php");
            else if(isset($_GET['optimasisulewesitengah']) || isset($_GET['page27'])) include("page/optimasi/op_sulawesitengah.php");
            else if(isset($_GET['lapsulewesitengah']) || isset($_GET['page27'])) include("page/kuota/kuota_sulawesitengah.php");

            else if(isset($_GET['sulewesi_utara']) || isset($_GET['page29'])) include("page/wilayah/sulewesiutara.php");
            else if(isset($_GET['sulewesiutara-delete']) || isset($_GET['page29'])) include("page/wilayah/sulewesiutara-delete.php");
            else if(isset($_GET['optimasisulewesiutara']) || isset($_GET['page29'])) include("page/optimasi/op_sulawesiutara.php");
            else if(isset($_GET['lapsulewesiutara']) || isset($_GET['page29'])) include("page/kuota/kuota_sulawesiutara.php");

            else if(isset($_GET['sulewesi_tenggara']) || isset($_GET['page28'])) include("page/wilayah/sulewesitenggara.php");
            else if(isset($_GET['sulewesitenggara-delete']) || isset($_GET['page28'])) include("page/wilayah/sulewesitenggara-delete.php");
            else if(isset($_GET['optimasisulewesitenggara']) || isset($_GET['page28'])) include("page/optimasi/op_sulawesitenggara.php");
            else if(isset($_GET['lapsulewesitenggara']) || isset($_GET['page28'])) include("page/kuota/kuota_sulawesitenggara.php");

            else if(isset($_GET['sumatra_barat']) || isset($_GET['page30'])) include("page/wilayah/sumatrabarat.php");
            else if(isset($_GET['sumatrabarat-delete']) || isset($_GET['page30'])) include("page/wilayah/sumatrabarat-delete.php");
            else if(isset($_GET['optimasisumatrabarat']) || isset($_GET['page30'])) include("page/optimasi/op_sumatrabarat.php");
            else if(isset($_GET['lapsumatrabarat']) || isset($_GET['page30'])) include("page/kuota/kuota_sumatrabarat.php");

            else if(isset($_GET['sumatra_selatan']) || isset($_GET['page31'])) include("page/wilayah/sumatraselatan.php");
            else if(isset($_GET['sumatraselatan-delete']) || isset($_GET['page31'])) include("page/wilayah/sumatraselatan-delete.php");
            else if(isset($_GET['optimasisumatraselatan']) || isset($_GET['page31'])) include("page/optimasi/op_sumatraselatan.php");
            else if(isset($_GET['lapsumatraselatan']) || isset($_GET['page31'])) include("page/kuota/kuota_sumatraselatan.php");

            else if(isset($_GET['sumatra_utara']) || isset($_GET['page32'])) include("page/wilayah/sumatrautara.php");
            else if(isset($_GET['sumatrautara-delete']) || isset($_GET['page32'])) include("page/wilayah/sumatrautara-delete.php");
            else if(isset($_GET['optimasisumatrautara']) || isset($_GET['page32'])) include("page/optimasi/op_sumatrautara.php");
            else if(isset($_GET['lapsumatrautara']) || isset($_GET['page32'])) include("page/kuota/kuota_sumatrautara.php");

            else if(isset($_GET['jawa_barat']) || isset($_GET['page8'])) include("page/wilayah/jawabarat.php");
            else if(isset($_GET['jawabarat-delete']) || isset($_GET['page8'])) include("page/wilayah/jawabarat-delete.php");
            else if(isset($_GET['optimasijawabarat']) || isset($_GET['page8'])) include("page/optimasi/op_jawabarat.php");
            else if(isset($_GET['lapjawabarat']) || isset($_GET['page8'])) include("page/kuota/kuota_jawabarat.php");

            else if(isset($_GET['jawa_tengah']) || isset($_GET['page9'])) include("page/wilayah/jawatengah.php");
            else if(isset($_GET['jawatengah-delete']) || isset($_GET['page9'])) include("page/wilayah/jawatengah-delete.php");
            else if(isset($_GET['optimasijawatengah']) || isset($_GET['page9'])) include("page/optimasi/op_jawatengah.php");
            else if(isset($_GET['lapjawatengah']) || isset($_GET['page9'])) include("page/kuota/kuota_jawatengah.php");

            else if(isset($_GET['jawa_timur']) || isset($_GET['page10'])) include("page/wilayah/jawatimur.php");
            else if(isset($_GET['jawatimur-delete']) || isset($_GET['page10'])) include("page/wilayah/jawatimur-delete.php");
            else if(isset($_GET['optimasijawatimur']) || isset($_GET['page10'])) include("page/optimasi/op_jawatimur.php");
            else if(isset($_GET['lapjawatimur']) || isset($_GET['page10'])) include("page/kuota/kuota_jawatimur.php");
            else if(isset($_GET['laporan'])) include("page/laporan/laporan.php");

            else if(isset($_GET['table'])) include("page/laporan/tbl-haji.php");

            else if(isset($_GET['reset_aceh'])) include("page/reset/reset_aceh.php");
            else if(isset($_GET['reset_bali'])) include("page/reset/reset_bali.php");
            else if(isset($_GET['reset_bangka'])) include("page/reset/reset_bangka.php");
            else if(isset($_GET['reset_banten'])) include("page/reset/reset_banten.php");
            else if(isset($_GET['reset_jogya'])) include("page/reset/reset_jogya.php");
            else if(isset($_GET['reset_bengkulu'])) include("page/reset/reset_bengkulu.php");
            else if(isset($_GET['reset_lampung'])) include("page/reset/reset_lampung.php");
            else if(isset($_GET['reset_riau'])) include("page/reset/reset_riau.php");
            else if(isset($_GET['reset_kepulauanriau'])) include("page/reset/reset_kepulauanriau.php");
            else if(isset($_GET['reset_jambi'])) include("page/reset/reset_jambi.php");
            else if(isset($_GET['reset_gorontalo'])) include("page/reset/reset_gorontalo.php");
            else if(isset($_GET['reset_papua'])) include("page/reset/reset_papua.php");
            else if(isset($_GET['reset_papuabarat'])) include("page/reset/reset_papuabarat.php");
            else if(isset($_GET['reset_maluku'])) include("page/reset/reset_maluku.php");
            else if(isset($_GET['reset_malukuutara'])) include("page/reset/reset_malukuutara.php");
            else if(isset($_GET['reset_jawabarat'])) include("page/reset/reset_jawabarat.php");
            else if(isset($_GET['reset_jawatimur'])) include("page/reset/reset_jawatimur.php");
            else if(isset($_GET['reset_jawatengah'])) include("page/reset/reset_jawatengah.php");
            else if(isset($_GET['reset_kalimatanbarat'])) include("page/reset/reset_kalimatanbarat.php");
            else if(isset($_GET['reset_kalimatantimur'])) include("page/reset/reset_kalimatantimur.php");
            else if(isset($_GET['reset_kalimatantengah'])) include("page/reset/reset_kalimatantengah.php");
            else if(isset($_GET['reset_kalimatanselatan'])) include("page/reset/reset_kalimatanselatan.php");
            else if(isset($_GET['reset_sumatraselatan'])) include("page/reset/reset_sumatraselatan.php");
            else if(isset($_GET['reset_sumatrabarat'])) include("page/reset/reset_sumatrabarat.php");
            else if(isset($_GET['reset_sumatrautara'])) include("page/reset/reset_sumatrautara.php");
            else if(isset($_GET['reset_sulawesiutara'])) include("page/reset/reset_sulewesiutara.php");
            else if(isset($_GET['reset_sulawesibarat'])) include("page/reset/reset_sulewesibarat.php");
            else if(isset($_GET['reset_sulawesitenggara'])) include("page/reset/reset_sulewesitenggara.php");
            else if(isset($_GET['reset_sulawesitengah'])) include("page/reset/reset_sulewesitengah.php");
            else if(isset($_GET['reset_sulawesiselatan'])) include("page/reset/reset_sulewesiselatan.php");
            else if(isset($_GET['reset_nusatenggarabarat'])) include("page/reset/reset_nusatenggarabarat.php");
            else if(isset($_GET['reset_nusatenggaratimur'])) include("page/reset/reset_nusatenggaratimur.php");
            else if(isset($_GET['reset_jakarta'])) include("page/reset/reset_jakarta.php");


            else if(isset($_GET['search'])) include("page/search/search.php");
            else if(isset($_GET['search_aceh'])) include("page/search/search_aceh.php");
            else if(isset($_GET['search_bali'])) include("page/search/search_bali.php");
            else if(isset($_GET['search_bangka'])) include("page/search/search_bangka.php");
            else if(isset($_GET['search_banten'])) include("page/search/search_banten.php");
            else if(isset($_GET['search_jogya'])) include("page/search/search_jogya.php");
            else if(isset($_GET['search_bengkulu'])) include("page/search/search_bengkulu.php");
            else if(isset($_GET['search_lampung'])) include("page/search/search_lampung.php");
            else if(isset($_GET['search_riau'])) include("page/search/search_riau.php");
            else if(isset($_GET['search_kepulauanriau'])) include("page/search/search_kepulauanriau.php");
            else if(isset($_GET['search_jambi'])) include("page/search/search_jambi.php");
            else if(isset($_GET['search_gorontalo'])) include("page/search/search_gorontalo.php");
            else if(isset($_GET['search_papua'])) include("page/search/search_papua.php");
            else if(isset($_GET['search_papuabarat'])) include("page/search/search_papuabarat.php");
            else if(isset($_GET['search_maluku'])) include("page/search/search_maluku.php");
            else if(isset($_GET['search_malukuutara'])) include("page/search/search_malukuutara.php");
            else if(isset($_GET['search_jawabarat'])) include("page/search/search_jawabarat.php");
            else if(isset($_GET['search_jawatimur'])) include("page/search/search_jawatimur.php");
            else if(isset($_GET['search_jawatengah'])) include("page/search/search_jawatengah.php");
            else if(isset($_GET['search_kalimantanbarat'])) include("page/search/search_kalimantanbarat.php");
            else if(isset($_GET['search_kalimantantimur'])) include("page/search/search_kalimantantimur.php");
            else if(isset($_GET['search_kalimantantengah'])) include("page/search/search_kalimantantengah.php");
            else if(isset($_GET['search_kalimantanselatan'])) include("page/search/search_kalimantanselatan.php");
            else if(isset($_GET['search_sumatrabarat'])) include("page/search/search_sumatrabarat.php");
            else if(isset($_GET['search_sumatrautara'])) include("page/search/search_sumatrautara.php");
            else if(isset($_GET['search_sumatraselatan'])) include("page/search/search_sumatraselatan.php");
            else if(isset($_GET['search_sulawesibarat'])) include("page/search/search_sulawesibarat.php");
            else if(isset($_GET['search_sulawesitengah'])) include("page/search/search_sulawesitengah.php");
            else if(isset($_GET['search_sulawesitenggara'])) include("page/search/search_sulawesitenggara.php");
            else if(isset($_GET['search_sulawesiselatan'])) include("page/search/search_sulawesiselatan.php");
            else if(isset($_GET['search_sulawesiutara'])) include("page/search/search_sulawesiutara.php");
            else if(isset($_GET['search_nusatenggarabarat'])) include("page/search/search_nusatenggarabarat.php");
            else if(isset($_GET['search_nusatenggaratimur'])) include("page/search/search_nusatenggaratimur.php");
            else if (isset($_GET["administrator"])) include("page/administrator/index.php");
            else if (isset($_GET["administrator-delete"])) include("page/administrator/delete.php");
            else if (isset($_GET["administrator-update"])) include("page/administrator/update.php");
            else include("page/home/index.php");


            ?>
        </div>
    </div>
    <?php include("include/footer.php") ?>
</body>
</html>
<?php
mysqli_close($conn);
ob_end_flush();

?>