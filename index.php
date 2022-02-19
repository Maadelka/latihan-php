<?php 

$conn=mysqli_connect("localhost", "root", "", "phpdasar");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];
    while($row= mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// =ambil data
$mahasiswa=query("SELECT * FROM mahasiswa" );
$barang= ["mie rebus", "teh gelas", "teh talua", "soda susu", "nasi goreng", "lontong", "pecel lele"];


$siswa=[
    ["Andhika Rizaldi", "Teknik Informatika", "dikarizal62@gmail.com"],
    ["Bambang Suryanto", "Teknik Mesin", "bamp11@gmail.com"],
    ["Zulkifli", "Teknik Industri", "zulkifli22@gmail.com"],
];

$siswa2=[
    ["Andhika Rizaldi", "Teknik Informatika", "dikarizal62@gmail.com"],
    ["Bambang Suryanto", "Teknik Mesin", "bamp11@gmail.com"],
    ["Zulkifli", "Teknik Industri", "zulkifli22@gmail.com"],
    ["Afizah sa'imun", "Tataboga", "saimiun@gmail.com"],
    ["Wahyu saputri", "Tataboga", "putri@gmail.com"],
    ["Egi Maulana", "Pertanian", "mailana@gmail.com"],
    ["Arya Octa", "Tataboga", "Fani@gmail.com"],
];
?>









<!-- ==========================================================================html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>latihan array</title>
</head>
<body>

<h1>hello world!</h1>
<!-- ---------------------------------array -->
<ul>
    <?php foreach($barang as $b) : ?>
        <li><?= $b ;?></li>
    <?php endforeach ?>
</ul>
<br>

 <!-- ==============================nesting array tampil dalam list-->
<?php foreach($siswa as $s) : ?>
    <ul>
        <li>Nama: <?= $s[0] ;?></li>
        <li>Jurusan: <?= $s[1] ;?></li>
        <li>Email: <?= $s[2] ;?></li>
    </ul>
    <br>
<?php endforeach ?>

<!-- ==============================nesting array tampil dalam table-->
<table border="1" cellspacing="1px" class="tbl">
    <tr>
        <td>Nama</td>
        <td>Jurusan</td>
        <td>Email</td>
    </tr>
    <?php foreach($siswa2 as $swa) : ?>
        <tr>
            <td><?= $swa[0] ;?></td>
            <td><?= $swa[1] ;?></td>
            <td><?= $swa[2] ;?></td>
        </tr>
    <?php endforeach ?>
</table>
<br>

<!-- ================================================= file database -->
<table border="1" cellspacing="2px" cellpadding="10" >
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Foto</td>
        <th>Nrp</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><a href="">edit </a>/<a href=""> delete</a></td>
        <td><img src="img/<?= $row["img"]; ?>" alt=""></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach ?>
</table>
</body>
</html>
