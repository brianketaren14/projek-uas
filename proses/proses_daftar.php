<?php 
    include("koneksi.php");
    if(isset($_POST["daftar"])){
        $username = mysqli_real_escape_string($db,$_POST["username"]);
        $password1 = mysqli_real_escape_string($db,md5($_POST["password1"]));
        $password2 = mysqli_real_escape_string($db,md5($_POST["password2"]));
        $pilih = "SELECT * FROM user WHERE username='$username'";
        $query = mysqli_query($db,$pilih);
        $cek_user=mysqli_num_rows($query);
        if ($cek_user>0){
            echo"<script>
                alert('username sudah ada');
                document.location.href = '../tampilan/daftar.php';
            </script>";
        } else 
        if($password1!=$password2){
            echo"<script>
                alert('password tidak sama');
                document.location.href = '../tampilan/daftar.php';
            </script>";
        } else {
           
            $daftar = "INSERT INTO user (username, password) VALUE ('$username','$password1')";
            $query = mysqli_query($db,$daftar);
            echo"<script>
                alert('registrasi berhasil dilakukan');
                document.location.href = '../tampilan/daftar.php';
            </script>";
        }
    }

?>

