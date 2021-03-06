<?php
require 'conn.php';

$idmakanan = $_POST['idmakanan'];
$nama = $_POST['nama'];
$bilangan = $_POST['bilangan'];

$sql = "UPDATE makanan_sampingan SET nama = ?, bilangan = ? WHERE idmakanan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sii', $nama, $bilangan, $idmakanan);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Dia keluar error do');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}