<?php 
    session_start();
    include("koneksi.php");
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
     
        $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' and password = '$password'");

        if (mysqli_num_rows($result)===1){
            $_SESSION['username'] = $username;
            header("location:../tampilan/admin.php");
            exit;
        }    
        else {
            echo"<script>alert('username atau password salah'); location = '../tampilan/login.php';</script>";
        }
    }
?>