<!DOCTYPE html >
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Input Anggota</title>
</head>

<body>
<form action="ProsesInputAnggota.php" method="post" enctype="multipart/form-data" name="forml" id="forml">
    <fieldset>
    <legend><h3s>Data Anggota</h3></legend>
    <table> 
        <tr>
            <td>ID Anggota</td> 
            <td>:</td> 
            <td><input name="id_anggota" type="text" id="id_anggota" size="50" /></td>
        </tr>
        <tr>
            <td>Nama Anggota</td> 
            <td>:</td> 
            <td><input name="nm_anggota" type="text" id="nm_anggota" size="50" /></td>
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
            <option value="aktif">aktif</option>
            <option value="tidak aktif">tidak aktif</option>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
        </tr>
    </table>
    </fieldset>
</from>
</body>
</html>

