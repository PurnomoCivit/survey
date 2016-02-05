<?php
require ("SoalKuesioner.php");

for($i=1;$i<18;$i++){
$kd_soal = $_POST['kd_soal'.$i];
$jenis_soal = $_POST['jenis_soal'.$i];
$jawaban = $_POST['nilai'.$i];
$kd_kuesioner = $_POST['kd_kuesioner'];


//blocking kode hasil
$kd1=substr($jenis_soal,0,3 );
$kd2=substr($kd_soal,6,1);
$kd3=substr($kd_kuesioner,3,2);
$kd4=  rand(01, 99);
$kd_hasil = $kd1.$kd2.$kd3.$kd4;

$soalKuesioner = new SoalKuesioner();
$soalKuesioner->setKd_hasil($kd_hasil);
$soalKuesioner->setKd_soal($kd_soal);
$soalKuesioner->setJenis_soal($jenis_soal);
$soalKuesioner->setKd_kuesioner($kd_kuesioner);
$soalKuesioner->setJawab_soal($jawaban);

$soalKuesioner->getInsertSoalKuesioner();

}

if($i==18){
    echo "<script>alert('Sukses');
    document.location='formSaran.php';</script>";
 }else{
    echo "<script>alert('GAGAL');
    document.location='formKuesioner.php';</script>";
 }
?>
