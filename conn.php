<?php
$host = 'localhost';
$user = 'root';
$pswd = ''; # sepasang single quotes
$dbname = 'makanan';

$conn = new mysqli($host, $user, $pswd, $dbname); session_start();