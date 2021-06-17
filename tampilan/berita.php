<?php 
  require("../proses/koneksi.php");
  $pilih = "SELECT * FROM tabel_berita";
  $query = mysqli_query($db, $pilih);
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
   
    <section > 
   
        <div class="container">
            <div class="row">
                <div class="col">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1 class="display-6 text-center ">Berita</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
              <?php 
                  while ($isinya=mysqli_fetch_assoc($query)) :
              ?>
                <div class="col-md-3 berita">
                  <div class="card kartu">
                    <a href="tampil_berita.php?id=<?=$isinya["id"]?>" class="d-block" style="text-decoration: none; color: black">
                    <img src="../thumbnail/<?=$isinya["thumbnail"]?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                      
                      <h5 class="card-title"><?=$isinya["judul"]?></h5>
                      <p class="card-text"><?=$isinya["deskripsi"]?></p>
                      <a href="tampil_berita.php?id=<?=$isinya["id"]?>" class="btn btn-primary mt-2">More..</a>
                    </div>
                  </a>
                  </div>
                </div>
            <?php 
                endwhile;
            ?>
                
        </div>        
        <?php 
            for ($i=1; $i <=5 ; $i++) { 
              echo"<br>";
            }
        ?>
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
