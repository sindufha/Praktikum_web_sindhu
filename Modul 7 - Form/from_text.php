<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="form_text" enctype="multipart/form-data" name="form_text" method="POST" action="Proses_text.php">
        <p>NIM : <input type="text" name="nim"></p>
        <p>Nama : <input type="text" name="nama"></p>
        <p>Tempat Lahir : <input type="text" name="tempat_lahir"></p>
        <p>Tanggal Lahir : <input type="date" name="tanggal_lahir"></p>
        <p>Jenis Kelamin : <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </p>
        <p>Agama : <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select></p>
        <p>Alamat :<br><textarea name="alamat" id=""></textarea></p>
        <p>Hobi : <input type="checkbox" name="hobi1" value="Memancing"> Memancing
            <input type="checkbox" name="hobi2" value="Menulis"> Menulis
            <input type="checkbox" name="hobi3" value="Olahraga"> Olahraga
        </p>
        <input type="checkbox" name="hobi4" value="Lainnya"> Lainnya</p>
        <br>
        <p>Masukan Foto : <input type="file" name="file"></p>
        <p><input type="submit" name="button" id="button" value="Tampil"></p>
    </form>
</body>

</html>