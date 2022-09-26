<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

 // ambil data dari formulir
 $nim = $_POST['nim'];
 $nama_lengkap = $_POST['nama_lengkap'];
 $email = $_POST['email'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $alamat = $_POST['alamat'];
 $jurusan = $_POST['jurusan'];
 $no_hp = $_POST['no_hp'];

 // buat query
 $sql = "INSERT INTO mahasiswa (nim, nama_lengkap, email, tempat_lahir, tanggal_lahir, alamat,jurusan,no_hp) 
 	    VALUE ('$nim', '$nama_lengkap', '$email', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jurusan','$no_hp')";

 $query = mysqli_query($koneksi, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php dengan status=sukses
 header('Location: index.php?status=sukses');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: index.php?status=gagal');
 }
} else {
 die("Akses dilarang...");
}
?>
