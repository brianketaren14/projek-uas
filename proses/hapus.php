<?php 
    require("koneksi.php");
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $hapus="DELETE FROM tabel_berita WHERE id=$id";
        $query=mysqli_query($db,$hapus);
        if($query===true){
            echo "<script>alert('data berhasil dihapus'); document.location.href = '../tampilan/admin.php'; </script>";
        } else {
            // kalau gagal alihkan ke halaman admin.php dengan menjalankan alert gagal
            echo "<script>alert('data gagal dihapus'); document.location.href = 'admin.php'; </script>";
        } 
        
    }

?>