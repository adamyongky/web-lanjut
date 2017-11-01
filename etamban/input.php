<?php
include 'header.php';

?>
<!DOCTYPE html>
<html>
<body>
	<form action="inputproses.php?aksi=tambah" method="post">
	<table>
	<h3 style="text-align: center; padding-top: 20px;">Input Biodata Bengkel</h3>
		<tr>
			<td>Nama Bengkel</td>
			<td><input type="text" name="nama_bengkel"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><input type="text" name="no_hp"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
			<select name="status">
					    <option value="Buka">Buka</option>
					    <option value="Tutup">Tutup</option>
			</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
	</form>
</body>
</html>