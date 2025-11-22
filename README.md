# CYOA Portfolio Website

Website portofolio personal dengan konsep "Choose Your Own Adventure" (CYOA). Pengunjung memilih persona (Tech, Management, Creative) dan mendapatkan konten yang relevan. Termasuk halaman Resume, Portfolio, Gallery, Contact, serta CMS sederhana untuk mengelola konten.

## Fitur Utama

- Gateway persona dan konten AJAX untuk halaman `tech`, `management`, dan `creative`.
- Resume/Overview yang merangkum peran, skills, dan proyek.
- Halaman portfolio khusus: `kopinaren`, `bakso-boss`, `mik`.
- Gallery foto (creative persona) terkelompok per tema.
- Halaman Contact dengan form email server-side dan pencegahan scraping untuk email/telepon.
- CMS sederhana (tanpa auth) untuk memperbarui site dan item persona/proyek.

## Teknologi

- Laravel `^12.0`, PHP `^8.2`.
- Vite untuk bundling frontend.
- Tailwind CSS v4 style (lihat `resources/css/app.css`).
- Pest (plugin Laravel) untuk pengujian.

## Prasyarat

- PHP `8.2+`, Composer.
- Node.js `20.19+` atau `22.12+` (sesuai kebutuhan Vite).
- Database opsional (SQLite sudah didukung; MySQL/PostgreSQL bisa ditambahkan jika perlu).

## Instalasi

1. Clone repository ini.
2. Pasang dependencies:
   - `composer install`
   - `npm install`
3. Inisialisasi environment:
   - Salin `.env.example` menjadi `.env`
   - `php artisan key:generate`
   - (Opsional) buat file SQLite kosong `database/database.sqlite`
4. Migrasi database (opsional jika menggunakan tabel):
   - `php artisan migrate`

## Konfigurasi `.env`

- `APP_NAME`, `APP_URL`
- `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`
- `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME`

Contoh mailer dasar:

```
MAIL_MAILER=smtp
MAIL_FROM_ADDRESS=me@aradenta.com
MAIL_FROM_NAME="CYOA Contact"
```

Untuk pengembangan tanpa SMTP, Anda bisa menggunakan log mailer:

```
MAIL_MAILER=log
```

## Menjalankan Secara Lokal

- Jalur cepat (gabungan server + queue + vite):
  - `composer run dev`
- Atau jalankan terpisah:
  - `php artisan serve`
  - `php artisan queue:listen --tries=1`
  - `npm run dev`

## Build Produksi

- `npm run build`
- Pastikan `APP_ENV=production` dan `APP_DEBUG=false`.
- Hapus cache bila perlu: `php artisan config:clear`, `php artisan view:clear`.

## Testing

- `composer test`
- Atau `php artisan test`

## Rute & Halaman

- Beranda: `GET /` (`home`)
- Konten persona (AJAX): `GET /persona/{persona}` (`persona.content`)
- Resume: `GET /resume` (`resume`)
- Gallery (creative): `GET /persona/creative/gallery` (`persona.creative.gallery`)
- Portfolio khusus: `GET /portfolio/kopinaren`, `GET /portfolio/bakso-boss`, `GET /portfolio/mik`
- Contact: `GET /contact`, kirim pesan: `POST /contact/send`
- CMS: `GET /cms` dan berbagai `POST` untuk update konten

Lihat `routes/web.php` untuk daftar lengkap.

## Form Contact & Email

- Controller pengiriman: `app/Http/Controllers/ContactController.php:16`
- Mailable: `app/Mail/ContactMessage.php:19`
- Email dikirim ke alamat yang dikodekan di controller; sesuaikan jika perlu.

## Pencegahan Web Scraper (Kontak)

- Email dan telepon dirender melalui directive Blade yang di-obfuscate, lalu diubah menjadi tautan oleh JavaScript:
  - Blade directives:
    - `@obfuscateEmail('user@domain.com', 'optional-css-classes', 'optional-label')`
    - `@obfuscatePhone('+62 812-xxxx-xxxx', 'wa|tel', 'optional-css-classes', 'optional-label')`
  - Helper: `app/Support/Obfuscator.php`
  - Inisialisasi JS: `resources/js/app.js` fungsi `initContactObfuscation`

Jika JavaScript dinonaktifkan, akan ada fallback teks non-link yang lebih sulit di-scrape.

## Struktur Direktori Ringkas

- `app/Http/Controllers/` — controller halaman dan CMS
- `app/Mail/` — mailable untuk form contact
- `app/Support/Obfuscator.php` — helper obfuscation email/telepon
- `resources/views/` — Blade views (`gateway`, `personas/*`, `resume`, `contact`, `portfolio/*`)
- `resources/js/app.js` — inisialisasi frontend, utilitas UI, obfuscation
- `resources/css/app.css` — Tailwind v4 style dengan `@theme`
- `routes/web.php` — definisi rute
- `docs/*.md` — sumber konten teknis/management/creative (dibaca oleh controller)

## Catatan Deployment

- Pastikan konfigurasi mailer, domain, dan asset build sudah benar.
- Pertimbangkan reverse proxy dan HTTPS untuk produksi.
- Set `APP_ENV=production`, `APP_DEBUG=false`, dan jalankan `php artisan optimize`.

## Lisensi

Kode framework mengikuti lisensi MIT dari Laravel. Konten dan materi portofolio dimiliki oleh pemilik situs.
