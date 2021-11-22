<?php
require 'conn.php';

// $idmakanan = $_POST['idmakanan'];
$nama = $_POST['nama'];
$bilangan = $_POST['bilangan'];

$sql = "INSERT INTO makanan_sampingan (nama, bilangan) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $nama, $bilangan);
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
