# Bismillah Kabayan

Aplikasi web manajemen gudang dan transaksi berbasis Laravel untuk mendukung proses operasional inventori seperti pengelolaan gudang, produk, stok, pelanggan, serta transaksi penjualan dan pemindahan barang antar gudang.

## Fitur Utama

- Autentikasi pengguna dan login
- Sistem role-based access untuk administrator dan operator
- Manajemen data gudang
- Manajemen kategori, satuan, produk, dan pelanggan
- Kelola stok gudang
- Transaksi penjualan dan item transaksi
- Barang masuk dan transfer gudang
- Dashboard utama untuk operasional gudang

## Tech Stack

- PHP 8.3+
- Laravel 13
- MySQL / database yang didukung Laravel
- Blade templating
- Tailwind CSS
- Vite
- Pest untuk testing

## Struktur Project

- app/ : logika aplikasi, controller, model, middleware
- config/ : konfigurasi Laravel
- database/migrations/ : skema database
- database/seeders/ : data awal seeder
- resources/views/ : tampilan Blade
- routes/ : definisi route aplikasi
- tests/ : pengujian fitur

## Persyaratan Sistem

Pastikan perangkat Anda sudah memiliki:

- PHP 8.3 atau versi lebih baru
- Composer
- Node.js dan npm
- Database seperti MySQL/PostgreSQL/SQLite

## Instalasi

1. Clone repository:

```bash
git clone <url-repository>
cd bismillahkabayan
```

2. Install dependency PHP:

```bash
composer install
```

3. Buat file environment:

```bash
cp .env.example .env
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Konfigurasikan database di file `.env` sesuai environment Anda.

6. Jalankan migrasi dan seeder:

```bash
php artisan migrate --seed
```

7. Install dependency frontend:

```bash
npm install
```

8. Build assets frontend:

```bash
npm run build
```

9. Jalankan aplikasi:

```bash
php artisan serve
```

Akses aplikasi di browser pada URL yang ditampilkan oleh artisan, biasanya:

```text
http://127.0.0.1:8000
```

## Login Default

Setelah seeder dijalankan, Anda dapat login dengan akun yang tersedia dari data user/role yang sudah dibuat. Jika belum ada akun khusus, gunakan route login pada aplikasi dan buat akun sesuai kebutuhan melalui proses autentikasi yang tersedia.

## Route Utama

- `/` : halaman login
- `/dashboard` : dashboard utama
- `/gudang` : daftar gudang
- `/transaksi` : halaman transaksi

## Testing

Untuk menjalankan test aplikasi:

```bash
php artisan test
```

## Script yang Tersedia

```bash
composer run dev
npm run dev
npm run build
php artisan test
```

## Lisensi

Proyek ini dibuat untuk kebutuhan tugas/ project internal dan dapat dikembangkan lebih lanjut sesuai kebutuhan bisnis.
