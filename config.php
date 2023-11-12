<?php
$host = 'localhost';
$db = 'cv';
$user = 'roy';
$pwd = '123';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
