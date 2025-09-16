<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="/simpan" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
