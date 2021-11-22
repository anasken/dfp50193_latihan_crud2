<?php
require 'conn.php';

$idmakanan = $_GET['idmakanan'];

$sql = "DELETE FROM makanan_sampingan WHERE idmakanan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idmakanan);
$stmt->execute();

header('location: index.php');
