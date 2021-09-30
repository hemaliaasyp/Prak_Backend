<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta Charset= "UTF-8">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
</head>

<body>
    <h1 style="text-align: center;">Sistem Informasi Perpustakaan</h1>
    <center><a href="InputAnggota.php">Tambah Data</a></center>
    <table border="4" style="margin: auto;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Anggota</th>
                <th>Alamat</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Hapus</th>
                
            </tr>
            </thead>
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM anggota"); ?>
        <?php foreach ($result as $row) : ?>
            <tbody>
                <tr>
                    <td><?= $row['id_anggota']; ?></td>
                    <td><?= $row['nm_anggota']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['ttl_anggota'] ?></td>
                    <td><?= $row['status_anggota'] ?></td>
                    
                    <td>
                        <a href="EditAnggota.php?id=<?= $row['nm_anggota']; ?>">Edit</a>
                    </td>
                    <td>
                        <a href="HapusAnggota.php?id=<?= $row['nm_anggota']; ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
            <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>
</body>

</html>