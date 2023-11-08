<!DOCTYPE html>
<html>
<head>
    <title>Form Ubah Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h2>Form Ubah Obat</h2>
    <form action="5_edit.php" method="post" enctype="multipart/form-data">
        
  <div class="mb-3">
    <label for="id" class="form-label">ID yang ingin diubah</label>
    <input type="text" name="id_obat" required><br>

    <label for="namaobat" class="form-label">Nama Obat</label>
    <input type="text" name="nama_obat" required><br>

    <label for="gambarobat" class="form-label">Gambar Obat</label>
    <input type="text" name="gambar_obat" required><br>

    <label for="tanggal" class="form-label">Tanggal Kadaluarsa</label>
    <input type="date" name="tanggal_kadaluarsa" required><br>
    
    <button type="submit" class="btn btn-warning">Ubah</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
