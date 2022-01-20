<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <div class="b-example-divider"></div>

<header>
  <div class="px-3 py-2 text-white" style="background-color: #E56E94;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <img class="bi me-2" width="200" role="img" src="foto/eriza.png">
        </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <li>
            <a href="home.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="foto/home.png" width="24" height="24">
              Home
            </a>
          </li>
          <li>
            <a href="pelanggan.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="foto/people.png" width="24" height="24">
              Pelanggan
            </a>
          </li>
          <li>
            <a href="paket.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="foto/box.png" width="24" height="24">
              Paket
            </a>
          </li>
          <li>
            <a href="pemesanan.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="foto/hand.png" width="24" height="24">
              Pemesanan
            </a>
          </li>
          <li>
            <a href="transaksi.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="foto/cart.png" width="24" height="24">
              Transaksi
            </a>
          </li>
          <li>
            <a href="logout.php" class="nav-link text-white">
              <img class="bi d-block mx-auto mb-1" src="foto/logout.png" width="24" height="24">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
</body>
</html>