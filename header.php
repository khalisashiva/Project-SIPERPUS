<?php
session_start();
if(!isset($_SESSION['id_petugas']))
{
  header("Location:http://localhost/siperpus/login/index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">

    <title>SIPERPUS</title>
</head>
<body>

<script src="http://localhost/siperpus/aset/jquery.js"></script>
<script src="http://localhost/siperpus/aset/bootstrap/js/bootstrap.min.js"></script>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#"></a>
        
          <a class="navbar-brand" href="#"><i class="fas fa-book-reader text-white mr-2"></i>SIPERPUS | Hai,Admin!</a>
        
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="http://localhost/siperpus/index.php">Dasboard</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/buku/index.php">Buku</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/anggota/index.php">Anggota</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/transaksi/index.php">Peminjaman</a>
      <a class="nav-item nav-link" href="http://localhost/siperpus/login/logout.php">Logout</a>
    </div>
  </div>
</nav>

</body>
</html>