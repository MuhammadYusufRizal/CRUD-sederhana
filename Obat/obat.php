<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="form_obat.php">Tambah Obat</a></button>
    <br>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Obat<S/th>
            <th>Perintah</th>
        </tr>
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
                    <button><a href="<?php echo "hapus.php?id=".$data['id'].""; ?>">Hapus</a></button>
                    <button><a href="<?php echo "edit.php?id=".$data['id'].""; ?>">Edit</a></button>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>