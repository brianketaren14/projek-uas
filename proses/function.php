<?php 
    function upload_thumbnail(){
        $namathumbnail = $_FILES['thumbnail']['name'];
        $ukuranthumbnail = $_FILES['thumbnail']['size'];
        $tmpname = $_FILES['thumbnail']['tmp_name'];
        $error = $_FILES['thumbnail']['error'];
        if ($error === 4){
            echo "<script>alert('pilih file terlebih dahulu');</script>";
            return false;
        }
        $ekstensithumbnailvalid = ['jpg','jpeg','png'];
        $ekstensithumbnail = explode('.',$namathumbnail);
        $ekstensithumbnail = strtolower(end($ekstensithumbnail));
        if (!in_array($ekstensithumbnail,$ekstensithumbnailvalid)){
            echo "<script>alert('yang anda upload bukan thumbnail');  </script>";
            return false;
        }
        if($ukuranthumbnail > 1000000){
            echo "<script>alert('ukuran thumbnail terlalu besar');  </script>";
            return false;
        }
        // lolos 
        // generate nama baru
        $namathumbnailbaru = uniqid();
        $namathumbnailbaru .= '.';
        $namathumbnailbaru .= $ekstensithumbnail;
        move_uploaded_file($tmpname, '../thumbnail/' . $namathumbnailbaru);
        return $namathumbnailbaru;
    }
?>