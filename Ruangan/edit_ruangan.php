<?php

include("../config.php");
include("../Functions/function_ruangan.php");

// ambil kode ruangan yang ingin diedit
$kode = $_GET["kode_ruangan"];

// ambil data ruangan
$data = select_ruangan($kode);

// proses edit data ruangan
if(isset($_POST['edit']))
{
    if(delete_ruangan($_POST) > 0){
        echo "
            <script>
                alert('Ruangan berhasil ditambahkan!');
                window.location.href = '../input_ruangan.php'
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Ruangan gagal ditambahkan!');
                window.location.href = '../input_ruangan.php'
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Ruangan</title>
</head>

<body>
    <?php
        if($_SESSION['identifier'] == "admin")
        {
            include("Skin/navbar-admin.html"); 
        }
        else if($_SESSION['identifier'] == "pengurus")
        {
            include("Skin/navbar-moderator.html");
        }
        else
        {
            include("Skin/navbar-jamaah.html");
        }
    ?>

    <!-- Form Ruangan -->
    <section>
        <div class="container my-4">
            <form class="row" method="post" action="edit_ruangan.php">
                <div class="col-lg-6">
                    <!-- Kode Ruangan Read Only-->
                    <div class="mb-3">
                        <label for="kode_ruangan_ro" class="form-label">Kode Ruangan</label>
                        <input type="text" class="form-control" name="kode_ruangan_ro" value="<?php echo $data['kd_ruangan'] ?>" readonly>
                    </div>
                    <!-- Nama Ruangan -->
                    <div class="mb-3">
                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" name="nama_ruangan" value="<?php echo $data['nama_ruangan'] ?>">
                    </div>
                    <!-- Kode Ruangan Hidden -->
                    <input type="hidden" class="form-control" name="kode_ruangan" value="<?php echo $data['kd_ruangan'] ?>">
                </div>
                <div class="col-lg-6">
                    <!-- Button -->
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary" name="edit">Edit Ruangan</button>
                        </div>
                        <div class="col-2">
                            <a class='btn text-white btn-danger btn-sm' href='../input_ruangan.php'>Batalkan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>