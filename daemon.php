<!-- daemon.php -->
<?php
session_start();

function writeLogoutLog($message) {
    file_put_contents('logout_log.txt', date('Y-m-d H:i:s') . " " . $message . PHP_EOL, FILE_APPEND);
}

// Fungsi daemon untuk mencatat logout
function daemon() {
    while (true) {
        if (isset($_SESSION['loggedout']) && $_SESSION['loggedout'] === true) {
            writeLogoutLog("User telah melakukan logout.");
            $_SESSION['loggedout'] = false; // Reset status logout
        }
        sleep(5); // Jalankan setiap 5 detik
    }
}

if (!isset($_SESSION['loggedin'])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['loggedout'] = false;
    daemon();
}
?>
