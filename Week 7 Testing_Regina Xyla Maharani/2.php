<!DOCTYPE html>
<html>
<head>
    <title>Form Input Obat</title>
</head>
<body>
    <h2>Form Input Obat</h2>
    <form action="2_add.php" method="post" enctype="multipart/form-data">
        Nama Obat: <input type="text" name="nama_obat" required><br>
        Gambar Obat: <input type="text" name="gambar_obat" required><br>
        Tanggal Kadaluarsa: <input type="date" name="tanggal_kadaluarsa" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
