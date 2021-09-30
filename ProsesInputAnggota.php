<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	
	$id_anggota = $_POST['id_anggota'];
	$nm_anggota = $_POST['nm_anggota'];
	$alamat = $_POST['alamat'];
	$ttl_anggota = $_POST['ttl_anggota'];
	$status_anggota = $_POST['status_anggota'];
	
	// if(move_uploaded_file($tamp, $path)) {
		$query = "INSERT INTO anggota VALUES('$id_anggota', '$nm_anggota ', '$alamat', '$ttl_anggota','$status_anggota') ";

		$result = mysqli_query($koneksi, $query);

		if(!$result){
			die("Query gagal dijalankan: ".mysqli_errno($koneksi).
				" - ".mysqli_error($koneksi));
		}
		else
		{
			echo "<script>
			alert('Data Berhasil Ditambah');
			window.location.href='anggota.php';
			</script> ";
		}
	}
		// }
 	
?>