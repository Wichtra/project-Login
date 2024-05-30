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

## Cara Melakukan Modifikasi

### Pindah ke Branch Development

1. Pastikan Anda berada di luar branch `master` (lihat di pojok kiri bawah di Visual Studio Code).
2. Masuk ke branch `development`:
    ```bash
    git checkout development
    ```

Setelah branch diubah ke `development`, Anda bisa mulai melakukan perubahan kode.

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

1. Masuk ke branch `main`:
    ```bash
    git checkout main
    ```

2. Ambil perubahan terbaru dari repository:
    ```bash
    git fetch
    ```

3. Cek apakah ada perubahan:
    ```bash
    git status
    ```

4. Tarik perubahan terbaru dari repository:
    ```bash
    git pull
    ```

5. Buat branch baru untuk melakukan modifikasi (misalnya `edit-frontend`):
    ```bash
    git branch edit-frontend
    ```

6. Pindah ke branch yang baru dibuat:
    ```bash
    git checkout edit-frontend
    ```

Sekarang Anda siap untuk melakukan modifikasi di branch yang baru dibuat.
