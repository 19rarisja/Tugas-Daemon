## Daemon Process di Laragon - Program Logout
1. Pengertian Daemon Process
Daemon process adalah program yang berjalan di latar belakang dan umumnya tidak memerlukan interaksi langsung dari pengguna. Di sistem operasi berbasis Unix/Linux, daemon sering dimulai saat booting dan tetap berjalan untuk menyediakan layanan sistem. Contoh daemon yang umum digunakan termasuk web server (Apache), database server (MySQL), dan task scheduler (cron).

Pada Windows, meskipun istilah "daemon" jarang digunakan, konsep yang sama berlaku untuk services yang berjalan di background tanpa interaksi langsung, seperti MySQL dan Apache di Laragon.

## 2. Laragon dan Daemon Process
Laragon adalah environment untuk mengelola local server yang digunakan dalam pengembangan web, biasanya untuk PHP, Node.js, Python, dan framework lainnya. Laragon memungkinkan beberapa layanan seperti Apache, MySQL, dan Redis untuk berjalan sebagai proses latar belakang (daemon), yang sangat berguna dalam pengembangan aplikasi.

## 3. Siapkan Lingkungan Pengembangan
Unduh Laragon dari situs resmi.
Install Laragon dan pastikan server Apache dan MySQL berjalan.
## 4. Struktur File Website
Buatlah folder website Anda dengan struktur berikut:

C:\laragon\www\website\index.php
C:\laragon\www\website\logout.php
C:\laragon\www\website\daemon.php
C:\laragon\www\website\logout_log.txt (untuk mencatat logout pengguna)

## 5. Menjalankan Program sebagai Daemon
Untuk menjalankan daemon.php sebagai daemon, ikuti langkah berikut:

Menggunakan terminal
Buka terminal (command prompt) dan arahkan ke folder proyek Anda:

bash
Salin kode
cd C:\laragon\www\website
Jalankan daemon.php menggunakan PHP:

bash
Salin kode
php -f daemon.php &
Dengan ini, daemon akan berjalan di latar belakang dan mencatat log setiap kali ada pengguna yang logout.

## 6. Pengujian
Buka browser dan akses http://localhost/website/index.php.
Klik tombol "Logout", dan pengguna akan diarahkan kembali ke halaman utama.
Cek file logout_log.txt untuk memastikan bahwa aktivitas logout dicatat setiap kali tombol ditekan.

## 7. Menghentikan Daemon
Untuk menghentikan daemon yang berjalan, temukan PID-nya dan gunakan perintah taskkill pada Windows.

Temukan PID dengan perintah:
bash
Salin kode
tasklist /FI "IMAGENAME eq php.exe"
Setelah menemukan PID yang sesuai, hentikan proses dengan:
bash
Salin kode
taskkill /PID <PID> /F

## 8. Hasil Screenshot
Tampilan index.php:
