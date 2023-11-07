<?php
require 'connection.php';
$kode_barang = $_GET['id'];

if (isset($_POST['submit'])) {
    // $kode_barang = $_POST['id'];
    // echo $kode_barang;
    delete_obat($kode_barang);
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
    <title>Delete barang di Toko Obat Afung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <h1>Delete barang di toko obat Afung</h1>
        <p>Are you sure want to delete?</p>
        <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        <button type="cancel" name="cancel" class="btn btn-outline-secondary">Cancel</button>
    </form>
</body>

</html>