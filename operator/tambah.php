<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA GADGET</h3>
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">>
		<table>
			<tr>			
				<td>Jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr>
				<td>Mrek</td>
				<td><input type="text" name="mrek"></td>
			</tr>
			<tr>
				<td>Seri</td>
				<td><input type="text" name="seri"></td>
			</tr>
			<tr>
				<td>Tahun Produksi</td>
                <td><input type="date" name="tahun_produksi"></td>
			</tr>
			<tr>
				<td>RAM</td>
				<td><input type="text" name="ram"></td>
			</tr>
			<tr>
				<td>Processor</td>
				<td><input type="text" name="processor"></td>
			</tr>
			<tr>
				<td>OS</td>
				<td><input type="text" name="os"></td>
			</tr>
			<tr>
				<td>SSD/HDD</td>
				<td><input type="text" name="ssd_hdd"></td>
			</tr>
				<td><input type="submit" value="SIMPAN"></td>	
		</table>
	</form>
</body>
</html>