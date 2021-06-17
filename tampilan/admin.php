<?php 
 session_start();
      require("../proses/koneksi.php");

      if(!isset($_SESSION['username'])){
        header ('location:login.php');
      }

      if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
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
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section >
        <div class="container">
           <?php 
            for ($i=1; $i <=5 ; $i++) { 
              echo"<br>";
            }
           ?>
            <h1 class="display-6">Data Berita</h1>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Thumbnail</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                  $no = 1;
                  $select = "SELECT * FROM tabel_berita" ;
                  $query = mysqli_query($db, $select);
                  while ($isinya = mysqli_fetch_assoc($query)):
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $isinya["judul"] ?></td>
                    <td><?= $isinya["deskripsi"] ?></td>
                    <td><img src="../thumbnail/<?=$isinya["thumbnail"]?>" style="width:70px; height:70px;" class="rounded-circle"></td>
                    <td>
                        <a href="../proses/hapus.php?id=<?= $isinya["id"]?>" class="btn btn-danger">hapus</a>
                        <a href="edit.php?id=<?=$isinya["id"]?>" class="btn btn-warning">edit</a>
                    </td>
                </tr>
                <?php endwhile;  ?>
            </table>
            <a class="btn btn-primary" href="tambah.php">Tambah</a>
        </div>
        <?php 
          for ($i=1; $i <=7 ; $i++) { 
            echo"<br>";
          }
        ?>
    </section>
    <!-- Awal carousel -->

    <footer class="pt-5 mt-5" >
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
