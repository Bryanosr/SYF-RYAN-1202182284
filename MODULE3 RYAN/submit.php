<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_module3";
$koneksi = mysqli_connect($host,$user,$password,$database) or die("No connection");

if(isset($POST['submit'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar= $_POST['gambar'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir= $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $benefit = $_POST['benefit'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi,"INSERT INTO event_table VALUES('','$nama','$deskripsi','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')");
    if ($query > 0){
        echo "<script>alert('data baru telah tersimpan'); window.location.href='home.php'</script>";
    } else {
        echo "<script>alert('Gagal Disimpan');</script>";
    }
}

?>