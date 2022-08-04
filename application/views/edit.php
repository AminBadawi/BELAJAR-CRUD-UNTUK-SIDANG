<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?= base_url('user/f_edit/'.$get->id) ?>" method="post">
<label for="">nama buku</label>
<input type="text" name="nama_buku" value=<?= $get->nama_buku?>><br>
<label for="">tahun penerbit</label>
<input type="text" name="tahun_penerbit" value=<?= $get->tahun_penerbit?>><br>
<label for="">pengarang</label>
<input type="text" name="pengarang" value=<?= $get->pengarang?>>

<button type="submit">simpan</button>
</form>
</body>
</html>