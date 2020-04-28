<?php
require 'functions.php';
//cek tombol sudah ditekan
    if(isset ($_POST["submit"])) {
        if(tambah($_POST) > 0) {
            echo"
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href='index.php';
                </script>            
            ";
        } else {
            echo"
            <script>
                alert('data gagal ditambahkan!');
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
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
            <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
            <label for="npm">Npm : </label>
                <input type="text" name="npm" id="npm">
            </li>
            <li>
            <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
            <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
    
    </form>
    
</body>
</html>