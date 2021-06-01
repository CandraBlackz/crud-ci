<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<title>Formulir Penambahan Artikel</title>
			<style type="text/css">
					label{
						width:100px; display: inline-block; margin-bottom: 10px;
					}
					input[type=text]{
						width: 280px;
					}
					textarea{
						width: 280px; height: 140px; vertical-align: text-top;
					}

					input[type=submit]{
						margin-top: 10px; margin-left: 105px;
					}
			</style>
	</head>
	<body>
		<h1>Formulir Tambah Artikel</h1>
			<p>Berikut adalah menu yang bisa diakses</p>
				<a href="<?=base_url('front/tambah_artikel');?>">Tambah Artikel</a> |
				<a href="<?=base_url('front/daftar_artikel');?>">Daftar Artikel</a>
				<br />
			<form action="<?php echo base_url('front/tambah_artikel/kirim');?>" method="POST">
				<label>Judul Artikel:</label><input type="text" name="title" /><br>
				<label>Penulis:</label><input type="text" name="author" /><br>
				<label>Isi Artikel</label><textarea  name="content"></textarea><br>
				<input type="submit" name="submit" value="Tambah Artikel" />
			</form>
	</body>
</html>
