<h1 align="center">Selamat datang di Payroll👋</h1>

[![](https://img.shields.io/github/issues/rizalihwan/perpustakaan?style=flat-square)](https://img.shields.io/github/issues/rizalihwan/perpustakaan?style=flat-square) ![](https://img.shields.io/github/stars/rizalihwan/perpustakaan?style=flat-square)
![](https://img.shields.io/github/forks/rizalihwan/perpustakaan?style=flat-square) 
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a> [![saythanks](https://img.shields.io/badge/say-thanks-ff69b4.svg?style=flat-square)](https://saythanks.io/to/rizalihwan94%40gmail.com)  [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com) [![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg?style=flat-square)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity) [![made-for-VSCode](https://img.shields.io/badge/Made%20for-VSCode-1f425f.svg?style=flat-square)](https://code.visualstudio.com/)

### 🤔 Untuk apa dibuat?
Web yang dibuat untuk memudahkan manajemen pembayaran gaji dan cuti(progress) kepada karyawan.

### 📆 <a href="#">Release Year</a>
- 2025 For Binaniaga University

------------

 ### 👤 Default Akun untuk login
	
**Superior Default Akun**
- Username: superior@gmail.com
- Password: password

**Employee Default Akun**
- Username: rizalihwan94@gmail.com
- Password: password

------------

## 💻 Install

1. **Clone Repository**
```bash
git clone https://github.com/rizalihwan/payroll-unbin.git
cd payroll-unbin
composer install
npm install
copy .env.example .env
```

2. **Buka ```.env``` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai, karena di project ini menggunakan PostgreSQL jadi saya kasih contoh seperti berikut, dan jika kamu ingin menggunakan MySQL atau lainnya tinggal sesuaikan.**
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=payroll
DB_USERNAME=postgres
DB_PASSWORD=root
```

3. **Instalasi website**
```bash
php artisan key:generate
php artisan migrate
php artisan db:seed
```

4. **Jalankan website**
```command
php artisan optimize:clear
php artisan serve
```

## 🧑 Author

👤 <a href="https://www.facebook.com/izal.whanz/"> **Rizal Ihwan**</a>
- Facebook : <a href="https://www.facebook.com/izal.whanz/"> Rizal Ihwan</a>
- LinkedIn : <a href="https://www.linkedin.com/in/rizal-ihwan-98a8a9199/"> Rizal Ihwan</a>

## 📝 License
- Copyright © 2021 Rizal Ihwan.
- **Perpustakaan is open-sourced software licensed under the MIT license.**

------------

- **Feel free to ask me at [Telegram](https://t.me/ihw_me/).**

