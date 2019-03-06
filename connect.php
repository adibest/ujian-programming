<?php

class database{
 
	private $host = "localhost";
	private $uname = "root";
	private $pass = "123";
	private $db = "ujian";
 
	function connectMysql(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db) or die ("Database not found");
	}

	function show_data(){
	$data = mysql_query("SELECT * FROM users;");
		while($row = mysql_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
}

?>