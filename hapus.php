<?php
include("config.php");
if(isset($_GET['nim'])){
 // ambil id dari query string
 $nim = $_GET['nim'];
 // buat query hapus
 $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
 $query = mysqli_query($koneksi, $sql);
 // apakah query hapus berhasil?
 if( $query ){
 header('Location: index.php');
 } else {
 die("gagal menghapus...");
 }
} else {
 die("akses dilarang...");
}
?>