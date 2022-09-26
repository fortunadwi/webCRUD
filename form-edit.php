<?php
	include("config.php");

	// kalau tidak ada id di query string
	if(!isset($_GET['nim']) ){
	 header('Location: index.php');
	}

	//ambil id dari query string
	$nim = $_GET['nim'];

	// buat query untuk ambil data dari database
	$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
	$query = mysqli_query($koneksi, $sql);
	$mhs = mysqli_fetch_assoc($query);
	// jika data yang di-edit tidak ditemukan
	if( mysqli_num_rows($query) < 1 ){
 		die("data tidak ditemukan...");
		}
	?>

	<!DOCTYPE html>
	<html>

	<head>
	 <title>Formulir Edit Mahasiswa | Pelatihan Coding</title>
	</head>

	<body>
		<header>
	 		<h3>Formulir Edit Mahasiswa</h3>
	 	</header>
	 	<form action="proses-edit.php" method="POST">
	 	<input type="hidden" value="<?php echo $mhs['id_mahasiswa'] ?>" name="id_mahasiswa">

	 	<fieldset>
	 	<label for="nim">Nim: </label>	
	 	<input type="text" name="nim" value="<?php echo $mhs['nim'] ?>" />

	 	<p>
	 	<label for="nama">Nama: </label>
	 	<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php
		echo $mhs['nama_lengkap'] ?>" />
	 	</p>

	 	<p>
	 	<label for="email">Email: </label>
	 	<input type="email" name="email" value="<?php echo $mhs['email'] ?>" />
	 	</p>

	 	<p>
	 	<label for="tempat_lahir">Tempat Lahir: </label>
	 	<input type="text" name="tempat_lahir" value="<?php echo $mhs['tempat_lahir'] ?>" />
	 	</p>

	 	<p>
	 	<label for="tanggal_lahir">Tanggal Lahir: </label>
	 	<input type="date" name="tanggal_lahir" value="<?php echo $mhs['tanggal_lahir'] ?>" />
	 	</p>

	 	<p>
	 	<label for="alamat">Alamat: </label>
	 	<input type="text" name="alamat" value="<?php echo $mhs['alamat'] ?>" />
	 	

	 	<p>
	 	<label for="jurusan">Jurusan: </label>
	 	<input type="text" name="jurusan" value=" <?php echo $mhs['jurusan'] ?>" /> </textarea>
	 	</p>

	 	<p>
	 	<label for="no_hp">Nomor HP: </label>
	 	<input type="text" name="no_hp" value=" <?php echo $mhs['no_hp'] ?>" /> </textarea>
	 	</p>

	 	<!--p>
	 		<label for="sekolah_asal">Sekolah Asal: </label>
	 		<input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
	 	</p-->

		 <p>
		 	<input type="submit" value="Simpan" name="simpan" />
		 </p>

	 </fieldset>
	</form>
   </body>
</html>