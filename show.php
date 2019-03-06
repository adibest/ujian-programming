<!DOCTYPE html>
<html>
<head>
	<title>Ujian Triwulan II Web Programming - Adib </title>
</head>
<body>
	<?php
	// include 'connect.php';
	require_once('connect.php');
	$db = new database();
	$db->connectMysql();
	$anggota=$db->show_data();
	?>
	<h2>Ujian Web Programming</h2>
	<h3>Data User</h3>

	<a href="create.php">Add Data</a>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
	<?php
	$no = 1;
	foreach($anggota as $x){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $x['nama']; ?></td>
			<td><?php echo $x['email']; ?></td>
			<td><?php echo $x['password']; ?></td>
		</tr>
	<?php 
	}
	?>
	</table>

</body>
</html>