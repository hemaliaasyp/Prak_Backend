<?php
    error_reporting(0);
    include 'koneksi.php';

    if (isset($_GET['id'])) 
    {
        $nm_anggota = $_GET['id'];
   
        $query = "DELETE FROM anggota WHERE nm_anggota = '$nm_anggota'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal dihapus." . mysqli_errno($koneksi) . mysqli_error($koneksi));
        }
        else 
        {
            echo    "<script>
                        alert('Data Berhasil Dihapus !');
                        window.location.href='anggota.php';
                    </script>";
        }
}
?>