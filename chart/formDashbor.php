<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Aplikasi Survey Kepuasan Pasien RS. X</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap-datetimepicker.min.css">
        
    </head>
    <body>
        
        <header>
        	   
        </header>
            <div class="container">
                <ul class="nav nav-tabs nav-pills nav-justified">
                <li><a href="#login" data-toggle="tab"><h5><b>LogIn</b><h5></a></li>
                    <li class="active"><a href="#kuesioner" data-toggle="tab"><h5><b>Kuesioner</b><h5></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="login">
                        <h2><center>Menu LogIn
                        Karyawan RS. X</center></h2>
                    <hr>
                    <div class="row">
                    <div class="col-lg-12">
                    <form action="prosesLogin.php" role="form" class="form-horizontal" id="frmlogin" name="frmlogin" action="POST">
                        <div class="form-inline form-group">
                                <label for="username" class="col-lg-5 control-label">Username</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required></input>
                                </div>
                        </div>
                        <div class="form-inline form-group">
                                <label for="password" class="col-lg-5 control-label">Password</label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required></input>
                                </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="btn-group">
                            <button type="submit" onClick="self.history.back()" class="btn btn-default">Back</button>
                            <button type="submit" id="login" onClick="check_login();"class="btn btn-success">Login</button>
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    <div class="tab-pane active" id="kuesioner">
                    <h2><center>Data Kuesioner Pasien</center></h2>
                    <hr>
                    <div class="row">
                    <div class="col-lg-10">
                    <form action="prosesDataKuesioner.php?action=insert" role="form" class="form-horizontal" method="POST">
                        <div class="form-group">
                                <label for="nm_pasien" class="col-lg-2 control-label">Nama Pasien</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" placeholder="Nama Pasien" required></input>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="jenis_kelamin_pasien" class="col-lg-2 control-label">Jenis Kelamin</label>
                            <div class="col-lg-10">
                                    <input type="radio" id="jenis_kelamin_pasien" name="jk_pasien" value="laki-laki">Laki-Laki</input>
                                    <input type="radio" id="jenis_kelamin_pasien" name="jk_pasien" value="perempuan">Perempuan</input>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="no_rekam_medik" class="col-lg-2 control-label">No. Rekam Medik</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" id="no_rekam_medik" name="noRekamMedik" placeholder="No. Rekam Medik" required></input>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="no_kamar" class="col-lg-2 control-label">No. Kamar</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" id="no_kamar" name="noKamar" placeholder="No. Kamar" required></input>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="datetimepicker6" class="col-lg-2 control-label">Tanggal Masuk</label>
                            <div class="col-lg-10">
                                <div class="input-group date" id="datetimepicker6">
                                    <input type="text" class="form-control" id="datetimepicker6" name="tgl_masuk" required/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datetimepicker7" class="col-lg-2 control-label">Tanggal Keluar</label>
                            <div class="col-lg-10">
                                <div class="input-group date" id="datetimepicker7">
                                    <input type="text" class="form-control" id="datetimepicker7" name="tgl_keluar" required/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="nm_kuesioner" class="col-lg-2 control-label">Nama Kuesioner</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" id="nm_kuesioner" name="nm_kuesioner"placeholder="Nama Kuesioner" required></input>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="form-elem-4" class="col-lg-2 control-label">Nomor Telepon/HP</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" id="form-elem-4" name="contact" placeholder="No. Telepon/HP" required></input>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="form-elem-5" class="col-lg-2 control-label">E-mail</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="form-elem-5" name="email" placeholder="Alamat E-mail" required></input>
                                </div>
                        </div>
                        
                        <div class="form-group">
                                <label for="form-elem-8" class="col-lg-2 control-label">Hubungan dengan Pasien</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" id="form-elem-8" name="hubungan" placeholder="Hubungan dengan Pasien" required></input>
                                </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default btn-lg" onClick="self.history.back()" name="back" value="Back">Back</button>
                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="Submit">Next</button>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
                    </div>
                    
                </div>
            </div>
            
            
        <script src="../bootstrap-3.3.5-dist/js/jquery-2.1.4.min.js"></script>
        <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        <script src="../bootstrap-3.3.5-dist/js/moment.js"></script>
        <script src="../bootstrap-3.3.5-dist/js/id.js"></script>
        <script src="../bootstrap-3.3.5-dist/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker6').datetimepicker();
                $('#datetimepicker7').datetimepicker({
                    useCurrent: false
                    
                });
                $("#datetimepicker6").on("dp.change", function(e){
                    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                });
                $("#datetimepicker7").on("dp.change", function(e){
                    $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                });
            });
            
        function check_login()
{
	//Mengambil value dari input username & Password
	var username = $('#username').val();
	var password = $('#password').val();
	//Ubah alamat url berikut, sesuaikan dengan alamat script pada komputer anda
	var url_login	 = 'http://localhost/ip/fix/prosesLogin.php';
	var url_admin	 = 'http://localhost/ip/fix/mainUtama.php';
	
	//Ubah tulisan pada button saat click login
	$('#login').attr('value','Silahkan tunggu ...');
	
	//Gunakan jquery AJAX
	$.ajax({
		url		: url_login,
		//mengirimkan username dan password ke script login.php
		data	: 'var_usn='+username+'&var_pwd='+password, 
		//Method pengiriman
		type	: 'POST',
		//Data yang akan diambil dari script pemroses
		dataType: 'html',
		//Respon jika data berhasil dikirim
		success	: function(pesan){
			if(pesan=='ok'){
				//Arahkan ke halaman admin jika script pemroses mencetak kata ok
				window.location = url_admin;
			}
			else{
				//Cetak peringatan untuk username & password salah
				alert(pesan);
				$('#login').attr('value','Coba lagi ...');
			}
		}
	});
}
        </script>
    </body>
</html>
