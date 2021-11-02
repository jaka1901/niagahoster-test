## Installasi

Clone github ini, lalu copy file .env.example dengan nama file baru yaitu .env. Setelah itu jalankan perintah berikut

```bash
composer install && php artisan key:generate
```
Buat database baru, lalu sesuaikan konfigurasi database pada file .env
Lalu jalankan perintah dibawah ini

```bash
php artisan migrate --seed
```
## Akses panel admin
Setelah melakukan serve pada CLI artisan, masuk ke panel admin untuk mengedit paket yang akan ditampilkan di landing page. Buka route ```/gate``` pada url\
Contoh: `http://localhost:8000/gate`

Gunakan akun berikut ini:\
email: **testing@admin.com**\
password: **12345678**
