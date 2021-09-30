<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $nm_anggota = $row['nm_anggota'];
        $alamat = $row['alamat'];
        $ttl_anggota = $row['ttl_anggota'];
        $status_anggota = $row['status_anggota'];

        
    }
} else {
    header("Location: anggota.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
</head>
<body>
    <form action="ProsesEditAnggota.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset style="border-radius: 10px;">
            <legend>
                <h3>Data Anggota</h3>
            </legend>
            <table>
                <tr>
                    <td>ID Anggota</td> 
                    <td>:</td> 
                    <td><input name="id_anggota" type="text" id="id_anggota" size="50" /></td>
                </tr>
                <tr>
                    <td>Nama Anggota</td>
                    <td>:</td>
                    <td><input type="text" name="nm_anggota" id="nm_anggota" size="50" maxlength="15"></td>
                </tr>
                        <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" placeholder="Alamat" ></textarea></td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td> 
                    <td>:</td>
                    <td><input type="date" name="ttl_anggota" /></td>
                    <td> 
                 <tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name="status_anggota">
                    <option value="Aktif">aktif</option>
                    <option value="Tidak aktif">tidak aktif</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="edit" id="edit">Simpan</button></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>