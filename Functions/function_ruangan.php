<?php

// include("config.php");

// fungsi menampilkan data ruangan
function show_ruangan()
{
    global $koneksi;

    // query sql
    $sql = "SELECT * FROM ruangan";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// fungsi mengambil data ruangan berdasarkan kode ruangan
function select_ruangan($kode)
{
    global $koneksi;

    // query sql
    $sql = "SELECT * FROM ruangan WHERE kd_ruangan = '$kode'";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// fungsi menambahkan data ruangan
function add_ruangan($data)
{
    global $koneksi;

    $kode = $data['kode_ruangan'];
    $nama = $data['nama_ruangan'];

    $sql = "INSERT INTO ruangan VALUES('$kode', '$nama')";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function delete_ruangan($kode)
{
    global $koneksi;

    $sql = "DELETE FROM ruangan WHERE kd_ruangan = '$kode'";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

?>