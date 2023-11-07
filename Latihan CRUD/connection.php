<?php


$DATABASE = 'wadcrud';
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

function query($query)
{

    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert_obat($gambar_barang, $nama_barang, $kode_barang, $harga_barang, $stok_barang)
{
    global $conn;

    $query = "INSERT INTO tokoeim (kode_barang, nama_barang, harga_barang, stok_barang, gambar_barang)
                VALUES ('$kode_barang', '$nama_barang', '$harga_barang', '$stok_barang', '$gambar_barang')";
    mysqli_query($conn, $query);


    // header("Location: mainpage.php");
    // exit();
}

function update_obat($gambar_barang, $nama_barang, $kode_barang, $harga_barang, $stok_barang)
{
    global $conn;

    $query = "UPDATE tokoeim SET  
    nama_barang = '$nama_barang', 
    harga_barang = '$harga_barang', 
    stok_barang = '$stok_barang' 
    gambar_barang = '$gambar_barang', 
    WHERE kode_barang = '$kode_barang'";


    mysqli_query($conn, $query);


    // header("Location: mainpage.php");
    // exit();
}


function delete_obat($kode_barang)
{
    global $conn;

    $query = "DELETE FROM tokoeim WHERE kode_barang = '$kode_barang'";

    mysqli_query($conn, $query);

    // header("Location: mainpage.php");
    // exit();
}
