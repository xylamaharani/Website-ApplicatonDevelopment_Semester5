<?php
$conn = mysqli_connect("localhost", "root", "", "week7_wad");

$nama_obat_baru = $_POST['nama_obat'];
$gambar_obat_baru = $_POST['gambar_obat'];
$tanggal_kadaluarsa_baru = $_POST['tanggal_kadaluarsa'];
$id = $_POST['id_obat'];


    // Masukkan data ke database
    $ubah = mysqli_query($conn, "UPDATE obat 
    SET nama_obat = '$nama_obat_baru', gambar_obat = '$gambar_obat_baru', tanggal_kadaluarsa = '$tanggal_kadaluarsa_baru' 
    WHERE id = $id");

if ($ubah) {
    echo "Data obat berhasil diubah.";
    // sleep(10); // Tunda eksekusi selama 3 detik
    // header("Location: 1.php"); // Ganti 'halaman_sebelumnya.php' dengan nama file halaman sebelumnya
    // exit(); // Pastikan tidak ada kode ekstra yang dieksekusi setelah header
} else {
    echo "Error: " . mysqli_error($conn);
}


?>