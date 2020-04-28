<?php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek tombol sudah ditekan
    if(isset ($_POST["submit"])) {
        //cek apakah data berhasil diubah
        if( ubah($_POST) > 0) {
            echo"
                <script>
                    alert('data berhasil diubah!');
                    document.location.href='index.php';
                </script>            
            ";
        } else {
            echo"
            <script>
                alert('data gagal diubah!');
                document.location.href='index.php';
            </script>            
        ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
            <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
            </li>
            <li>
            <label for="npm">Npm : </label>
                <input type="text" name="npm" id="npm" value="<?= $mhs["npm"];?>">
            </li>
            <li>
            <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"];?>">
            </li>
            <li>
            <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
            <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
    
    </form>
    
</body>
</html>