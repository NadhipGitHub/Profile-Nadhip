<?php
if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$jenkel = $_POST['JK'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$saran = $_POST['saran'];

echo "name: $nama<br>";
echo "jenis kelamin: $jenkel<br>";
echo "email: $email<br>";
echo "no hp: $hp<br>";
echo "saran: $saran<br>";
} 
?>