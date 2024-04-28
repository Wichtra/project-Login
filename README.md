## Cara menjalankan repo ini

Dibutuhkan:

-   Software git

Langkah-langkah:

Jalankan di terminal:
-   git clone https://github.com/Wichtra/project-Login (Clone project)
-   cd project-login (Masuk ke direktori)
-   code .
Buka terminal di vscode
-   composer install
-   cp .env.example .env
-   Buka .env trus cari DB\_\* sesuaikan sama database kalian (kalau port Db ga dimodifikasi langsung step selanjutnya)
-   php artisan key:generate
-   php artisan migrate
-   php artisan serve

## kalau mau modifikasi pastikan dulu keluar dari branch master (pojok kiri bawah)

Masuk ke dalam branch development

-   git checkout development

kalau yang di bawah kiri udah berubah dari master ke development yaudah tinggal ubah codingannya

## kalau mau upload github lagi gampang bang

Jalankan di terminal:

-   git add .
-   git commit -m "opsional(kalau bisa apa yang udah diubah)"
-   git push -u origin development

wess sudahh

## Sebelum modifikasi koding sudah donload di laptop

-   git checkout master (masuk ke main)
-   git fetch
-   git status (mengecek apaklah ada perubahan atau tidak)
-   git pull
-   git checkout development (pindah ke branch development lagi buat develop)
