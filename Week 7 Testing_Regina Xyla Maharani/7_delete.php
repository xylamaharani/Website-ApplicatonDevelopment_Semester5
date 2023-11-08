<?php
$conn = mysqli_connect("localhost", "root", "", "week7_wad");

$id = $_POST['id_obat'];


    // Masukkan data ke database
    $delete = mysqli_query($conn, "DELETE FROM obat WHERE id = $id");

if ($delete) {
    echo "Data obat berhasil dihapus.";
    // sleep(10); // Tunda eksekusi selama 3 detik
    header("Location: 7_popup.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}


?>