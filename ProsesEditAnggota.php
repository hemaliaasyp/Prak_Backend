<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['edit']))
{
	$id_anggota = $row['id_anggota'];
	$nm_anggota = $row['nm_anggota'];
	$alamat = $row['alamat'];
	$ttl_anggota = $row['ttl_anggota'];
	$status_anggota = $row['status_anggota'];

	$query = "UPDATE anggota set nm_anggota = '$nm_anggota', alamat = '$alamat', ttl_anggota = '$ttl_anggota'
			,status_anggota = 'status_anggota ' where nm_anggota = '$nm_anggota'";
	$result = mysqli_query ($koneksi, $query);

	if (!$result)
{
	die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
}
else
{
	echo "<script>alert('Data Berhasil Diubah');window.location.href='anggota.php'</script> ";
}
}

?>