<?php
    $conn = mysqli_connect("localhost", "root", "", "week7_wad");
    
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    $result = mysqli_query($conn, "SELECT * FROM obat");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="text-align:center" max-width= "800px" margin="0 auto">

<!-- MEMBUAT TABLE -->
<table class="table">
  <thead class="table-light">
            <th style="text-align:left">No.</th>
            <th>Nama Obat</th>
            <th>Foto Obat</th>
            <th>Tanggal Kadaluarsa</th>
  </thead>
  <tbody>
  <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td style='text-align:left'>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama_obat'] . "</td>";
            echo '<td><img src="img/'. $row['gambar_obat']. '" alt="" style="display: block; margin: 0 auto;" height="100px"></td>';
            echo "<td>" . $row['tanggal_kadaluarsa'] . "</td>";
            echo "</tr>";
        } ?>
  </tbody>
  </table>

<!-- MEMBUAT BUTTON -->
<div style= "text-align:center">
    <button type="button" class="btn btn-primary" onclick="bukaHalamanTambah()">Tambah</button>
    <button type="button" class="btn btn-warning" onclick="bukaHalamanUbah()">Ubah</button>
    <button type="button" class="btn btn-outline-danger" onclick="bukaHalamanHapus()">Delete</button>
    <script>
        function bukaHalamanTambah() {
            window.location.href = "3.php"; }
        function bukaHalamanUbah() {
            window.location.href = "5.php";}
        function bukaHalamanHapus() {
            window.location.href = "7.php"; 

        }
    </script>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
