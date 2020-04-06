<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
        .button_perintah{
            color: black;
        }
        .button_perintah:hover{
            color: red;
        }
        .
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
                    <li><a class="nav-link" data-toggle="tab" href="home.php">Home</a></li>
                    <div class="dropdown">
                    <li><a class="nav-link" data-toggle="tab" href="obat.php">Database</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <a class="btn btn-primary btn-lg" href="form_obat.php" role="button">Tambah Obat</a>
        <table id="example" border="1" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Obat<S/th>
                    <th>Perintah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query_mysql = mysqli_query($db, "SELECT * FROM obat") or die(mysqli_error());
                    $nomer = 1;
                    while($data = mysqli_fetch_array($query_mysql)){
                ?>
                    <tr>
                        <td><?php echo $nomer++; ?></td>
                        <td><?php echo $data['nama_obat']; ?></td>
                        <td>
                            <button><a class="button_perintah" href="<?php echo "hapus.php?id=".$data['id'].""; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                            <button><a class="button_perintah" href="<?php echo "edit.php?id=".$data['id'].""; ?>">Edit</a></button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
</body>
</html>