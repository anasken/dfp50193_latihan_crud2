<?php
require 'conn.php';

$idmakanan = $_POST['idmakanan'];
$nama = $_POST['nama'];
$bilangan = $_POST['bilangan'];

$sql = "UPDATE makanan_sampingan SET nama = ?, bilangan = ? WHERE idmakanan = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sii', $nama, $bilangan, $idmakanan);
$stmt->execute();

if ($mysqli->error) {
    ?>
    <script>
        alert('Maaf! makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}