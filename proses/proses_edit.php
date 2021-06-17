<?php 
    require("koneksi.php");
    require("function.php");
    if(isset($_POST["edit"])){
        $id = $_POST["id"];
        $judul = htmlspecialchars($_POST['judul']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);
        $isi = htmlspecialchars($_POST['isi']);
        $thumbanaillama = $_POST['thumbnaillama'];
        if($_FILES['thumbnail']['error'] === 4){
            $thumbnail = $thumbanaillama;
        } else {
            $thumbnail = upload_thumbnail();
        }
        if ($thumbnail === false){
            echo "<script>alert('thumbnail gagal diubah'); document.location.href = 'admin.php'; 
            document.location.href = '../tampilan/admin.php'; 
            </script>";
        } else {
            $edit = "UPDATE tabel_berita SET judul='$judul',deskripsi='$deskripsi',isi='$isi',thumbnail='$thumbnail' WHERE id=$id";
            $query = mysqli_query($db, $edit);
            if ($query){
                echo "<script>alert('data berhasil diubah');
                document.location.href = '../tampilan/admin.php';
                </script>";
            } else {
                echo "<script>alert('data gagal diubah');
                document.location.href = '../tampilan/admin.php';
                </script>";
            }
        }
    }

?>