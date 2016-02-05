<?php
require ("ModelKuesioner.php");

$nm_pasien = $_POST['nm_pasien'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$noRekamMedik = $_POST['noRekamMedik'];
$noKamar = $_POST['noKamar'];
$hubungan = $_POST['hubungan'];
$nm_kuesioner = $_POST['nm_kuesioner'];
$jk_pasien = $_POST['jk_pasien'];
$tgl_masuk0 = $_POST['tgl_masuk'];
$tgl_keluar0 = $_POST['tgl_keluar'];

//changeFormat Tanggal Masuk
$tgl_masuk1 = substr($tgl_masuk0,0,2);
$tgl_masuk2 = substr($tgl_masuk0,3,2);        
$tgl_masuk3 = substr($tgl_masuk0,6,4);        
$tgl_masuk = $tgl_masuk3."-".$tgl_masuk2."-".$tgl_masuk1;

//changeFormat Tanggal Keluar
$tgl_keluar1 = substr($tgl_keluar0,0,2);
$tgl_keluar2 = substr($tgl_keluar0,3,2);        
$tgl_keluar3 = substr($tgl_keluar0,6,4);        
$tgl_keluar = $tgl_keluar3."-".$tgl_keluar2."-".$tgl_keluar1;

//blocking kode kuesioner
$kd1=substr($tgl_masuk,8,2);
$kd2=substr($noRekamMedik, 3,3);
$kd3=substr($noKamar, 1,2);
$kd4=rand(0, 9);
$kd_kuesioner = $kd1.$kd2.$kd3.$kd4;

    $ModelKuesioner = new ModelKuesioner();
    $ModelKuesioner->setNm_pasien($nm_pasien);
    $ModelKuesioner->setNm_kuesioner($nm_kuesioner);
    $ModelKuesioner->setContact($contact);
    $ModelKuesioner->setJk_pasien($jk_pasien);
    $ModelKuesioner->setEmail($email);
    $ModelKuesioner->setNoRekamMedik($noRekamMedik);
    $ModelKuesioner->setNoKamar($noKamar);
    $ModelKuesioner->setHubungan($hubungan);
    $ModelKuesioner->setKd_kuesioner($kd_kuesioner);
    $ModelKuesioner->setTgl_masuk($tgl_masuk);
    $ModelKuesioner->setTgl_keluar($tgl_keluar);

    $hasil = $ModelKuesioner->getInsert();
    if ($hasil) {
        echo "<script>alert('Sukses');
            document.location='formKuesioner.php';</script>";	
    }else{
    	echo "<script>alert('GAGAL');
	document.location='formDashbor.php';</script>";
    }
?>