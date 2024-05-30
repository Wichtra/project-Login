# Project Login

## Cara Menjalankan Repo Ini

### Dibutuhkan:

- Software git
- Composer
- PHP
- Database (MySQL atau yang kompatibel)

### Langkah-langkah:

1. Clone proyek:
    ```bash
    git clone https://github.com/Wichtra/project-Login
    ```

2. Masuk ke direktori proyek:
    ```bash
    cd project-login
    ```

3. Buka proyek di Visual Studio Code:
    ```bash
    code .
    ```

4. Buka terminal di Visual Studio Code dan jalankan perintah berikut:
    ```bash
    composer install
    ```

5. Salin file konfigurasi contoh menjadi file konfigurasi utama:
    ```bash
    cp .env.example .env
    ```

6. Buka file `.env` dan sesuaikan pengaturan database (DB_*) sesuai dengan konfigurasi database Anda.

7. Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

8. Seed database dengan data awal:
    ```bash
    php artisan db:seed --class=AkunTableSeeder
    ```

9. Jalankan migrasi database:
    ```bash
    php artisan migrate
    ```

10. Jalankan server pengembangan:
    ```bash
    php artisan serve
    ```

## Sebelum Melakukan Modifikasi Kode

### Pindah ke Branch Development

1. Pastikan Anda berada di luar branch `master` (lihat di pojok kiri bawah di Visual Studio Code).
2. Masuk ke branch nama_fitur: //contoh: buat_sorting
    ```bash
    git checkout nama_fitur
    ```

Setelah branch diubah ke `nama_fitur`, kalian bisa mulai melakukan perubahan kode.

### Cara Mengunggah Perubahan ke GitHub

1. Tambahkan perubahan ke staging area:
    ```bash
    git add .
    ```

2. Commit perubahan dengan pesan yang sesuai:
    ```bash
    git commit -m "opsional(kalau bisa apa yang udah diubah)"
    ```

3. Push perubahan ke branch `development`:
    ```bash
    git push -u origin development
    ```

## Sebelum Melakukan Modifikasi Kode (Download Terbaru di Laptop)

1. Ambil perubahan terbaru dari repository:
    ```bash
    git fetch
    ```

2. Cek apakah ada perubahan:
    ```bash
    git status
    ```

3. Tarik perubahan terbaru dari repository:
    ```bash
    git pull
    ```

4. Buat branch baru untuk melakukan modifikasi (misalnya `edit-frontend`):
    ```bash
    git branch edit-frontend
    ```

5. Pindah ke branch yang baru dibuat:
    ```bash
    git checkout edit-frontend
    ```

Sekarang Anda siap untuk melakukan modifikasi di branch yang baru dibuat.
