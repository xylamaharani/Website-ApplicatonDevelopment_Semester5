<!DOCTYPE html>
<html>
<head>
    <title>Form Ubah Obat</title>
</head>
<body>
    <h2>Form Ubah Obat</h2>
    <form action="4_edit.php" method="post" enctype="multipart/form-data">
        ID Yang Akan Diubah : <input type="text" name="id_obat" required><br><br>
        <h3>Pengubahan Data </h3>
        Nama Obat: <input type="text" name="nama_obat" required><br>
        Gambar Obat: <input type="text" name="gambar_obat" required><br>
        Tanggal Kadaluarsa: <input type="date" name="tanggal_kadaluarsa" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
