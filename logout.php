<!-- logout.php -->
<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: index.php'); // Arahkan kembali ke halaman utama
exit;
?>

