<?php
require 'conn.php';

$nama = $_POST['nama'];
$bilangan = $_POST['bilangan'];

$sql = "INSERT INTO makanan_sampingan (nama, bilangan) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $nama, $bilangan);
$stmt->execute();

if ($conn->error) {
?>
    <script>
        alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
<?php
    exit;
} else {
    header('location: index.php');
}
