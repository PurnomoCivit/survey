<?php

error_reporting(E_ALL ^(E_NOTICE | E_WARNING));

class koneksi
{
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "survey";

	function __construct(){
		mysql_connect($this->host, $this->username, $this->password);
		mysql_select_db($this->database) or die('Database tidak ditemukan');
	}
}


?>