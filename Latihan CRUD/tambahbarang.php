<?php
require 'connection.php';

if (isset($_POST['submit'])) {
    $gambar_barang = $_POST["gambar_barang"];
    $nama_barang = $_POST["nama_barang"];
    $kode_barang = $_POST["kode_barang"];
    $harga_barang = $_POST["harga_barang"];
    $stok_barang = $_POST["stok_barang"];

    insert_obat($gambar_barang, $nama_barang, $kode_barang, $harga_barang, $stok_barang);
    header("Location: mainpage.php");
    exit();
} elseif (isset($_POST['cancel'])) {
    header("Location: mainpage.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah barang ke Toko Obat Afung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Tambah data barang ke toko obat Afung</h1>
    <form method="post">
        <ul>
            <li>
                <label for="gambar_barang">Gambar Barang : </label>
                <input type="text" name="gambar_barang" id="gambar_barang">
            </li>
            <li>
                <label for="nama_barang">Nama Barang : </label>
                <input type="text" name="nama_barang" id="nama_barang">
            </li>
            <li>
                <label for="kode_barang">Kode Barang : </label>
                <input type="text" name="kode_barang" id="kode_barang">
            </li>
            <li>
                <label for="harga_barang">Harga Barang : </label>
                <input type="text" name="harga_barang" id="harga_barang">
            </li>
            <li>
                <label for="stok_barang">Stok Barang : </label>
                <input type="text" name="stok_barang" id="stok_barang">
            </li>
        </ul>
        <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        <button type="cancel" name="cancel" class="btn btn-outline-secondary">Cancel</button>
    </form>
</body>

</html>