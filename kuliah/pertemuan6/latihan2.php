<?php
// $mahasiswa = [
//   ["Muhammad Fadhil Ashari", "203040148", "Teknik Informatika",
//   "203040148@mail.unpas.ac.id"],
//   ["Muhammad Fadhil Ashari", "203040148", "Teknik Informatika",
//   "203040148@mail.unpas.ac.id"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Muhammaf Fadhil Ashari",
    "nrp" => "203040148",
    "email" => "203040148@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dil.jpg"
    ],
    [
    "nama" => "Muhammad Fadhil Ashari",
    "nrp" => "203040148",
    "email" => "203040148@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "dil.jpg"
    ]
]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
     <ul>
         <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
         </li>
         <li>Nama : <?= $mhs["nama"]; ?></li>
         <li>NRP : <?= $mhs["nrp"]; ?></li>
         <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
         <li>Email : <?= $mhs["email"]; ?></li>
     </ul>
<?php endforeach; ?>
</body>
</html> 