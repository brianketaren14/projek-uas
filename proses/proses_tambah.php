<?php 
    require("koneksi.php");
    require("function.php");
    if(isset($_POST["tambah"])){
        $judul = htmlspecialchars($_POST["judul"]);
        $deskripsi = htmlspecialchars($_POST["deskripsi"]);
        $isi = htmlspecialchars($_POST["isi"]);
        $thumbanail = upload_thumbnail();
        if (!$thumbanail){
            echo "<script>alert('file thumbnail gagal ditambahkan'); document.location.href = '../tampilan/tambah.php'; </script>";
        } else {
        $tambah = "INSERT INTO tabel_berita (judul, deskripsi, isi, thumbnail) VALUE ('$judul','$deskripsi','$isi', '$thumbanail')";
        $query = mysqli_query($db, $tambah);
        if($query === true){
            // kalau berhasil alihkan ke halaman admin.php dengan menjalankan alert berhasil
            echo "<script>alert('data berhasil ditambahkan'); 
            document.location.href = '../tampilan/admin.php';
             </script>";
        } else {
            // kalau gagal alihkan ke halaman admin.php dengan menjalankan alert gagal
            echo "<script>alert('data gagal ditambahkan');  
            document.location.href = '../tampilan/tambah.php';
            </script>";
        } 
    }
}
?>