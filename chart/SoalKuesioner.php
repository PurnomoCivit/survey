<?php 

include ("cek.php");

class SoalKuesioner{
	private $kd_soal, $jawab_soal, $kd_hasil, $jenis_soal, $kd_kuesioner;
	public $ShowSoalKuesioner, $insertSoalKuesioner;

	public function getKd_hasil(){
		return $this->kd_hasil;
	}

	public function setKd_hasil($kd_hasil){
		$this->kd_hasil = $kd_hasil;
	}
        
        public function getKd_soal(){
		return $this->kd_soal;
	}

	public function setKd_soal($kd_soal){
		$this->kd_soal = $kd_soal;
	}

        public function getJenis_soal(){
		return $this->jenis_soal;
	}

	public function setJenis_soal($jenis_soal){
		$this->jenis_soal = $jenis_soal;
	}
        
	public function getJawab_soal(){
		return $this->jawab_soal;
	}

	public function setJawab_soal($jawab_soal){
		$this->jawab_soal = $jawab_soal;
	}

	public function getKd_kuesioner(){
		return $this->kd_kuesioner;
	}

	public function setKd_kuesioner($kd_kuesioner){
		$this->kd_kuesioner = $kd_kuesioner;
	}
        
        public function showSoalKuesioner(){
		$show_soal = new cek();
		$show_soal = mysql_query("SELECT * FROM tb_soal_kuesioner order by jenis_soal ASC") or die(mysql_error());
                while ($show = mysql_fetch_array($show_soal)){
                    $soal[]=$show;
                }return $soal;
                
	}

	public function getInsertSoalKuesioner(){
                $insertSoalKuesioner = false;
		$hasil_soal = new cek();
		$hasil_soal = mysql_query("INSERT INTO tb_hasil_kuesioner VALUES('".$this->getKd_hasil()."','".$this->getKd_soal()."',
                    '".$this->getKd_kuesioner()."','".$this->getJenis_soal()."','".$this->getJawab_soal()."')");
                
                if($hasil_soal){
                    $insertSoalKuesioner = true;
                }return $insertSoalKuesioner;
	}
        
        public function showHasilKuesionerAdmission(){
            $show_hasil = new cek();
            $show_hasil = mysql_query("SELECT kd_hasil, kd_soal, kd_kuesioner, jenis_soal, date, count(jawab_soal) AS hasil FROM tb_hasil_kuesioner WHERE YEAR(date)='2015' AND jenis_soal='admission' GROUP BY MONTH(date) ASC, jenis_soal");
            $hasil_nilai=array();
            
            while ($show = mysql_fetch_array($show_hasil)){
                $hasil_nilai[]=$show;
            }return $hasil_nilai;
        }
        
        public function showHasilKuesionerAkses(){
            $show_hasil = new cek();
            $show_hasil = mysql_query("SELECT kd_hasil, kd_soal, kd_kuesioner, jenis_soal, date, count(jawab_soal) AS hasil FROM tb_hasil_kuesioner WHERE YEAR(date)='2015' AND jenis_soal='akses' GROUP BY MONTH(date) ASC, jenis_soal");
            $hasil_nilai=array();
            
            while ($show = mysql_fetch_array($show_hasil)){
                $hasil_nilai[]=$show;
            }return $hasil_nilai;
        }
        
        public function showHasilKuesionerDokter(){
            $show_hasil = new cek();
            $show_hasil = mysql_query("SELECT kd_hasil, kd_soal, kd_kuesioner, jenis_soal, date, count(jawab_soal) AS hasil FROM tb_hasil_kuesioner WHERE YEAR(date)='2015' AND jenis_soal='dokter anda' GROUP BY MONTH(date) ASC, jenis_soal");
            $hasil_nilai=array();
            
            while ($show = mysql_fetch_array($show_hasil)){
                $hasil_nilai[]=$show;
            }return $hasil_nilai;
        }
        
        public function showHasilKuesionerTahunanAdmission(){
            $show_hasil = new cek();
            $show_hasil = mysql_query("SELECT jenis_soal, date, count(jawab_soal) AS hasil FROM `tb_hasil_kuesioner` where jenis_soal = 'admission' Group by Year(date)");
            
            while ($show = mysql_fetch_array($show_hasil)){
                $hasil_nilai[]=$show;
            }return $hasil_nilai;
        }
        
        public function showHasilKuesionerTahunanAkses(){
            $show_hasil = new cek();
            $show_hasil = mysql_query("SELECT jenis_soal, date, count(jawab_soal) AS hasil FROM `tb_hasil_kuesioner` where jenis_soal = 'akses' Group by Year(date)");
            while ($show = mysql_fetch_array($show_hasil)){
                $hasil_nilai[]=$show;
            }return $hasil_nilai;
        }
        
        public function showHasilKuesionerTahunanDokter(){
            $show_hasil = new cek();
            $show_hasil = mysql_query("SELECT jenis_soal, date, count(jawab_soal) AS hasil FROM `tb_hasil_kuesioner` where jenis_soal = 'dokter anda' Group by Year(date)");
            
            while ($show = mysql_fetch_array($show_hasil)){
                $hasil_nilai[]=$show;
            }return $hasil_nilai;
        }
}


?>