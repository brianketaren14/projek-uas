<?php 
  require("../proses/koneksi.php");
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
    <section class="banner">
      <video autoplay loop muted>
        <source src="../item-web/bg.mp4" type="video/mp4" />
      </video>
      <div class="caption">
        <h1>Yediza</h1>
        <p>Memberi kualitas pendidikan yang terbaik bagi putra putri anda</p>
      </div>
    </section>

    <!-- Awal carousel -->
    <section class="about_us bg-dark">
      <div class="container">
        <div class="row">
          <div class="col text-center text-white" style="padding: 40px 0">
            <h2 class="display-6">About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, magni!</p>
          </div>
        </div>
        <div class="row d-flex justify-content-between">
          <div class="col-md-2 mb-4 petinggi">
            <div class="card text-white text-center img-about">
              <img src="../item-web/pic03.jpg" class="card-img-top rounded-circle w-75" alt="..." />
              <div class="card-body">
                <h5>Magna</h5>
                <p class="card-text">Cipdum dolor</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 mb-4 petinggi">
            <div class="card text-white text-center img-about">
              <img src="../item-web/pic04.jpg" class="card-img-top rounded-circle w-75" alt="..." />
              <div class="card-body">
                <h5>Magna</h5>
                <p class="card-text">Cipdum dolor</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 mb-4 petinggi">
            <div class="card text-white text-center img-about">
              <img src="../item-web/pic05.jpg" class="card-img-top rounded-circle w-75" alt="..." />
              <div class="card-body">
                <h5>Magna</h5>
                <p class="card-text">Cipdum dolor</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 mb-4 petinggi">
            <div class="card text-white text-center img-about">
              <img src="../item-web/pic06.jpg" class="card-img-top rounded-circle w-75" alt="..." />
              <div class="card-body">
                <h5>Magna</h5>
                <p class="card-text">Cipdum dolor</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,256L48,245.3C96,235,192,213,288,186.7C384,160,480,128,576,128C672,128,768,160,864,186.7C960,213,1056,235,1152,229.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <section class="container">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 class="display-6">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-md-6 mb-3">
            <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
          <div class="col-md-6  map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510024.9236242991!2d98.3309366328125!3d2.9392100000000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ae5407a76597%3A0x4e5c560579b30309!2sTK.BERSAMA!5e0!3m2!1sid!2sid!4v1623549360473!5m2!1sid!2sid"
              width="100%"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-5 mb-5">
      <div class="container">
        <h1 class="text-center display-6 mb-5">Berita</h1>
        <div class="row d-flex justify-content-between">
          <?php 
            $pilih = "SELECT * FROM tabel_berita ORDER BY id DESC LIMIT 3";
            $query = mysqli_query($db,$pilih);
            while($data=mysqli_fetch_assoc($query)) :
          ?>
            <div class="col-md-3 berita">
              <div class="card kartu">
                <a href="tampil_berita.php?id=<?=$data["id"]?>" class="d-block" style="text-decoration: none; color: black">
                <img src="../thumbnail/<?=$data["thumbnail"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  
                  <h5 class="card-title"><?=$data["judul"]?></h5>
                  <p class="card-text"><?=$data["deskripsi"]?></p>
                  <a href="tampil_berita.php?id=<?=$data["id"]?>" class="btn btn-primary mt-2">More..</a>
                </div>
              </a>
              </div>
            </div>
          <?php 
            endwhile;
          ?>
            
        </div>
      </div>
    </section>
    <footer>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,64L48,80C96,96,192,128,288,122.7C384,117,480,75,576,85.3C672,96,768,160,864,154.7C960,149,1056,75,1152,58.7C1248,43,1344,85,1392,106.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
      <div class="container">
        <div class="row text-light justify-content-between" style="border-top: 3px solid white; padding: 30px 0">
          <div class="col-md-5">
            <p>Created by Brian Maxwell Ketaren</p>
            <p>201401041 KOM A</p>
          </div>
          <div class="col-md-6 sosmed">
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
