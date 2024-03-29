<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$books = query("SELECT * FROM books");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $books = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar books</title>
</head>

<body style="background-color:#A9A9A9">


  <a href="logout.php">LOGOUT</a>
  <h3>Daftar Buku </h3>
  
  <a href="tambah.php">Tambah Data books</a>
  <br><br>

  <form action="" method="POST">
    <input  style="background-color:#e3dac9 " type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">
    <table border="5" cellpadding="0" cellspacing="0" style="background-color: #708090">
      <tr>
        <th style="background-color: #708090">NO</th>
        <th style="background-color: #708090">GAMBAR</th>
        <th style="background-color: #708090">JUDUL</th>
        <th style="background-color: #708090">PENGARANG</th>
        <th style="background-color: #708090">TERBIT</th>
        <th style="background-color: #708090">DIMENSI</th>
        <th style="background-color: #708090">ISBN</th>
        <th style="background-color: #708090">DETAIL</th>
      </tr>

      <?php if (empty($books)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style: italic;">data books tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($books as $book) : ?>
        <tr>
          <td ><?= $i++; ?></td>
          <td ><img src="img/<?= $book['Gambar']; ?>" width="100"></td>
          <td ><?= $book['Judul']; ?></td>
          <td ><?= $book['Pengarang']; ?></td>
          <td ><?= $book['Terbit']; ?></td>
          <td ><?= $book['Dimensi']; ?></td>
          <td ><?= $book['ISBN']; ?></td> 
          <td>
            <a  style="background: #A9A9A9"href="detail.php?id=<?= $book['id']; ?>">lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <script src="js/script.js"></script>

</body>

</html>