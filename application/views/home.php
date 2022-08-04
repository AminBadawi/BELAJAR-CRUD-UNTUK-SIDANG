<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="<?= base_url('user/input') ?>">input</a>
	<a href="<?= base_url('user/cetak') ?>">cetak</a>
	<table border=1>
		<tr>
			<th> Nomor </th>
			<th> Nama Buku </th>
			<th> Tahun Terbit </th>
			<th> Pengarang </th>
			<th> Aksi </th>
		</tr>
		<?php 
		$no  =1;
		foreach ($ambil_data as $keluar) { ?>
		
			<tr>
				<td><?= $no++ ?></td>
			<td><?= $keluar->nama_buku ?></td>
			<td><?= $keluar->tahun_penerbit ?></td>
			<td><?= $keluar->pengarang ?></td>

			<td>
				<a href="<?= base_url('user/edit/'. $keluar->id)?>">Edit</a>
				<a href="<?= base_url('user/hapus/'. $keluar->id)?>">Hapus</a>
				</td>
				
				</tr>
				<?php } ?>
		</table>
</body>
</html>