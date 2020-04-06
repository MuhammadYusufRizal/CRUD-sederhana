<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <title>Document</title>
    <style>
        a{
            color: white;
        }
        a:hover{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%; height: 65px;">
        <div class="container">
            <div class="navbar-header">
                <a style="color: #fff" class="navbar-brand">Data Obat</a>
            </div>
            <div id="navbar">
                <ul class="nav navbar-tabs mr-auto">
                    <li><a class="nav-link" data-toggle="tab" href="home.php
                    ">Home</a></li>
                    <div class="dropdown">
                    <li><a class="nav-link" data-toggle="tab" href="obat.php">Database</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="POST">
            <h2>Nama Obat</h2>
            <input name="nama_obat" type="text">
            <input type="submit" name="simpan">
        </form>
    </div>
    <?php
        include "koneksi.php";

        if(isset($_POST['simpan'])){
            $nama_obat = $_POST['nama_obat'];

            $sql = "INSERT INTO obat (nama_obat) VALUE ('$nama_obat')";
            $query = mysqli_query($db, $sql);

            if($query){
                header('Location: obat.php');
            }
            else{
                echo "GAGAL!!";
            }
        }
    ?>
</body>
</html>