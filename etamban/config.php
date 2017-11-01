<?php
class database{
	var $dbhost = 'localhost'; 
	var $dbuser = 'root';     
	var $dbpass = '';         
	var $db = 'etamban';
	var $con;
	function __construct(){
		$this->con = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->db);
		
		// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		} else
			echo "Koneksi berhasil<br />";
	}
	function tampil_data(){
			$data = mysqli_query($this->con,"select * from crud");
	        while($d = mysqli_fetch_array($data)){
	            $hasil[] = $d;
	        }
	        return $hasil;
		}
		function input($nama_bengkel,$alamat,$no_hp,$status){
			mysqli_query($this->con,"insert into crud values('','$nama_bengkel','$alamat','$no_hp','$status')") or die(mysqli_error($this->con));
		}
		function hapus($id){
			mysqli_query($this->con,"delete from crud where id='$id'");
		}
		function edit($id){
			$data = mysqli_query($this->con,"select * from crud where id='$id'");
			while($d = mysqli_fetch_array($data)){
				$hasil [] = $d;
			}
			return $hasil;
		}
		function update($id,$nama_bengkel,$alamat,$no_hp,$status){
			mysqli_query($this->con,"update crud set nama='$nama_bengkel',alamat='$alamat',no_hp='$no_hp',status='$status' where id='$id'");
	}
}