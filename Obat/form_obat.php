<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h2>Nama Obat</h2>
        <input name="nama_obat" type="text">
        <input type="submit" name="simpan">
    </form>
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