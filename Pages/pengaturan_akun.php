<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Home</title>
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

    <!-- Tabel Akun -->
    <section>
        <div class="container">
            <!-- Isi tabel -->
            <div class="row">
                <table class="col border border-5 mt-5 mx-3 border-primary table table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Pengurus</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>
                    <tbody class="table-secondary">
                
                    </tbody>
                </table>

                <table class="col border border-5 mt-5 mx-3 border-primary table table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Jamaah</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>
                    <tbody class="table-secondary">
                
                    </tbody>
            </table>

            </div>
            
        </div>
    </section>

</body>

</html>