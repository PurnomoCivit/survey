<?php
require ("classSaran.php");

date_default_timezone_set('Asia/Jakarta');
$saran = $_POST['saran'];
$date = date("Y-m-d, g:i");
$kd_kuesioner = $_POST['kd_kuesioner'];
$nm_kuesioner = $_POST['nm_kuesioner'];

//blocking kode hasil
$kd1=substr($kd_kuesioner,3,2);
$kd2=substr($date, 15,2);
$kd_saran = $kd1.$kd2;

$soalKuesioner = new classSaran();
$soalKuesioner->setKd_saran($kd_saran);
$soalKuesioner->setSaran($saran);
$soalKuesioner->setDate($date);
$soalKuesioner->setKd_kuesioner($kd_kuesioner);
$soalKuesioner->setNm_kuesioner($nm_kuesioner);

$hasil = $soalKuesioner->getInsertSaran();

if($hasil){
    echo "<script>alert('Sukses');
    document.location='index.php';</script>";
 }else{
    echo "<script>alert('GAGAL');
    document.location='formSaran.php';</script>";
 }
?>
