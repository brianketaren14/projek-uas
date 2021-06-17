<?php 
  require("../proses/koneksi.php");
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $pilih = "SELECT * FROM tabel_berita WHERE id=$id";
    $query = mysqli_query($db, $pilih);
    $isinya = mysqli_fetch_assoc($query);
    if( mysqli_num_rows($query) < 1 ){
      echo "<script>alert('data gagal ditemukan'); document.location.href = 'admin.php'; </script>";
  }
  }
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../style.css" />

    <link rel="icon" href="../item-web/logo.png" />
    <title>Yediza</title>
  </head>
  <body>
    <!-- Awal navbar -->
    <div class="loader-container">
      <div class="loader"></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="../item-web/logo.png" width="30" height="30" class="d-inline-block align-text-top" />
          Yediza
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="visi.php">Visi dan Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita</a>
            </li>
                <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="mb-5">
        <div class="container ">
            <br><br><br>
        <div class="row">
          <div class="col">
          <h1 class="text-center"><?=$isinya["judul"]?></h1>
          </div>
        </div>      
        <div class="row">
          <div class="col d-flex justify-content-center">
            <img src="../thumbnail/<?=$isinya["thumbnail"]?>" alt="" style="height:80vh; width:100%">
          </div>
        </div>    
        <br>
        <div class="row">
          <div class="col">
          <p>
          <?=$isinya["isi"]?>          
          </p>
          </div>
        </div>
        </div>
    </section>
    <!-- Awal carousel -->

    <footer class="pt-5">
      <div class="container">
        <div class="row text-light justify-content-between " style="border-top: 3px solid #fff; ">
          <div class="col-md-5 mt-5">
            <p>Created by Brian Maxwell Ketaren</p>
            <p>201401041 KOM A</p>
          </div>
          <div class="col-md-6 sosmed mt-5">
            <ul class="ms-auto" style="list-style: none; display: flex; justify-content: flex-end">
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/fb.png" alt=""></i></a>
              </li>
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/ig.png" alt=""></i></a>
              </li>
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/tw.png" alt=""></i></a>
              </li>
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/yt.png" alt=""></i></a>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
