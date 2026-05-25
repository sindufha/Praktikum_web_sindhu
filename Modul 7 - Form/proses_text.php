<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$dir="image/";
$upload = $dir.$_FILES['file']['name'];

echo "NIM : $nim <br>";
echo "Nama : $nama <br>";
echo "Tempat Lahir : $tempat_lahir <br>";
echo "Tanggal Lahir : $tanggal_lahir <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "agama : $agama <br>";
echo "hobi : <br>";
if (isset($_POST['hobi1'])) {
    echo "-" . $hobi1 = $_POST['hobi1'] . "<br>";
}
if (isset($_POST['hobi2'])) {
    echo "-" . $hobi2 = $_POST['hobi2'] . "<br>";
}
if (isset($_POST['hobi3'])) {
    echo "-" . $hobi3 = $_POST['hobi3'] . "<br>";
}
if (isset($_POST['hobi4'])) {
    echo "-" . $hobi4 = $_POST['hobi4'] . "<br>";
}
echo "<br>";
if(is_uploaded_file($_FILES['file']['tmp_name'])){
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $upload);
    if($kirim){
        echo "Foto berhasil di upload <br> <br>";
        echo "Nama File : " . $_FILES['file']['name'] . "<br>";
        echo "<img src='$upload' width='200px'>";
}else{
    echo "Foto gagal di upload <br>";
    echo "error : " . $_FILES['file']['error'] . "<br>";
}
}
?> 