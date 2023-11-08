<?php
$conn = mysqli_connect("localhost", "root", "", "week7_wad");

$nama_obat = $_POST['nama_obat'];
$gambar_obat = $_POST['gambar_obat'];
$tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];


    // Masukkan data ke database
$tambah = mysqli_query($conn, "INSERT INTO obat (nama_obat, gambar_obat, tanggal_kadaluarsa) VALUES ('$nama_obat', '$gambar_obat', '$tanggal_kadaluarsa')");

if ($tambah) {
    echo "Data obat berhasil disimpan ke database.";
    // sleep(10); // Tunda eksekusi selama 3 detik
    // header("Location: 1.php"); // Ganti 'halaman_sebelumnya.php' dengan nama file halaman sebelumnya
    exit(); // Pastikan tidak ada kode ekstra yang dieksekusi setelah header
} else {
    echo "Error: " . mysqli_error($conn);
}


?>