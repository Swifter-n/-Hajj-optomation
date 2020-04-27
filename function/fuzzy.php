<?php
// Menghitung Nilai RV Umur dan Rentang Waktu Pendaftaran 
function fuzzy($cur, $maxs){
	if($cur <= $maxs){
		return $cur / $maxs;
	}else if($cur >= $maxs){
		return 1;
	}
}

//Menghitung Nilai RV Record Haji
function record($belum,$sekali,$duakali,$max){
	
	if($belum == 'Belum'){
		return 1/$max;
	}elseif ($belum >= $max) {
		return 1;
	}
	if($sekali == 'Satu Kali'){
		return 0.5/$max;
	}elseif ($sekali >= $max) {
		return 1;
	}
	if($duakali == 'Dua Kali'){
		return 0/1;
	}elseif($duakali >= $max){
		return 1;
	}
}

//Menghitung Nilai RV Kesehatan
function kesehatan($null, $rendah, $sedang, $berat, $max){
	if($rendah == 'penyakit rendah'){
		return 0.75/$max;
	}elseif($rendah >= $max){
		return 1;
	}
	if($sedang == 'penyakit sedang'){
		return 0.25/$max;
	}elseif($sedang >= $max){
		return 1;
	}
	if ($berat == 'penyakit berat') {
		return 0/$max;
	}elseif ($berat >= $max) {
		return 1;
	}
	if ($null == '-') {
		return 1/$max;
	}elseif ($null >= $max) {
		return 1;
	}
}


//Menghitung Nilai RV Pekerjaan
function pekerjaan($pejabat, $profesional, $assisten_pro, $tu, $tu_jual, $tu_tani, $kerajinan, $operator ,$kasar, $army, $max){
	if($army == 'TNI'){
		return 10/$max;
	}elseif ($army == 'Polisi') {
		return 10/$max;
	}elseif ($army >= $max) {
		return 1;
	}
	if($pejabat == 'Hakim'){
		return 9/$max;
	}elseif ($pejabat == 'Mentri') {
		return 9/$max;
	}elseif ($pejabat == 'Jaksa') {
		return 9/$max;
	}elseif ($pejabat >= $max) {
		return 1;
	}
	if ($profesional == 'Dokter') {
		return 8/$max;
	}elseif ($profesional == 'Pengacara') {
		return 8/$max;
	}elseif ($profesional == 'Dosen') {
		return 8/$max;
	}elseif ($profesional == 'Guru') {
		return 8/$max;
	}elseif ($profesional == 'Bidan') {
		return 8/$max;
	}elseif ($profesional >= $max) {
		return 1;
	}
	if ($assisten_pro == 'Perawat') {
		return 7/$max;
	}elseif ($assisten_pro == 'Apoteker') {
		return 7/$max;
	}elseif ($assisten_pro >= $max) {
		return 1;
	}
	if($tu == 'Pegawai'){
		return 6/$max;
	}elseif ($tu == 'Buruh') {
		return 6/$max;
	}elseif ($tu == 'PNS') {
	 	return 6/$max;
	}elseif ($tu >= $max ) {
		return 1;
	}
	if ($tu_jual == 'Pedagang') {
		return 5/$max;
	}elseif ($tu_jual == 'Wiraswasta') {
		return 5/$max;
	}elseif ($tu_jual == 'Wirausaha') {
		return 5/$max;
	}elseif($tu_jual >= $max){
		return 1;
	}
	if($tu_tani == 'Petani'){
		return 4/$max;
	}elseif ($tu_tani == 'Nelayan') {
		return 4/$max;
	}elseif ($tu_tani >= $max) {
		return 1;
	}
	if($kerajinan == 'Entertainer'){
		return 3/$max;
	}elseif ($kerajinan == 'Aktor') {
		return 3/$max;
	}elseif ($kerajinan >= $max) {
		return 1;
	}
	if($operator == 'Ojek'){
		return 2/$max;
	}elseif ($operator == 'Astronot') {
		return 2/$max;
	}elseif ($operator == 'Pilot') {
		return 2/$max;
	}elseif ($operator == 'Nahkoda') {
		return 2/$max;
	}elseif ($operator == 'Masinis') {
		return 2/$max;
	}elseif ($operator == 'Supir') {
		return 2/$max;
	}elseif ($operator >= $max) {
		return 1;
	}
	if($kasar == 'Ibu Rumah Tangga'){
		return 1/$max;
	}elseif ($kasar == 'Assisten Rumah Tangga') {
		return 1/$max;
	}elseif($kasar == 'Tunakarya'){
		return 1/$max;
	}elseif ($kasar == 'Lain-lain') {
		return 1/$max;
	}elseif ($kasar >= $max) {
		return 1;
	}

} 

//Mengecek Data Atas - Bawah untuk mencari Nilai yang terbaik
function bestvalue($cpos, $data){
	if($cpos == 0){
		$leftvalue = $cpos + 1;
		$rightvalue = $cpos + 1;
	}else{
		$leftvalue = $cpos - 1;
		$rightvalue = $cpos + 1;
	}

	if(!isset($data[$leftvalue])){
		 @$data[$leftvalue] = @$data[$rightvalue];
	}elseif(!isset($data[$rightvalue])){
		$data[$rightvalue] = $data[$leftvalue];
	}

	if(@$data[$leftvalue] >= @$data[$rightvalue]){
		$bestvalue = $leftvalue;
	}else{
		$bestvalue = $rightvalue;
	}

	return $bestvalue;
}



?>