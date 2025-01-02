<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Breeze Permissions

## Deskripsi
Laravel Permission Role.

## Prasyarat
- PHP >= 8.2
- Composer >= 2.x.x
- Node.js >= 20.xx.x
- NPM => 10.2.3
- MysQL => 8.xx

## Instalasi

### Clone Repository
Clone repository ini ke direktori lokal Anda:

```bash

git clone https://github.com/abdul-lambada/permissions-spatie-app.git

cd permissions-spatie-app

```

### Instal Dependensi
Instal dependensi PHP menggunakan Composer:

```bash
composer install
```

Instal dependensi Node.js menggunakan npm:
```bash
npm install
```

### Konfigurasi Environment
Salin file .env.example ke .env dan sesuaikan konfigurasi environment Anda:

```bash
cp .env.example .env
```

### Konfigurasi MySQL
pastikan anda telah membuat ```database``` di mysql. Masuk ke file .env dan sesuaikan konfigurasi database Anda:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=database_name_mysql
DB_USERNAME=database_user_mysql
DB_PASSWORD=database_password_mysql
```

### Generate Key Laravel
Buat key baru project laravel:
```bash
php artisan key:generate
```

### Migrasi inisial laravel
menjalankan semua migrasi awal project laravel:

```bash
php artisan migrate

```
### Insert data awal
memasukan data awal ke project laravel:

### Build Assets
Build aset menggunakan Vite:

```bash
npm run build / npm run dev
```

### Jalankan Server
Jalankan server pengembangan Laravel::

```bash
php artisan serve
```


The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
