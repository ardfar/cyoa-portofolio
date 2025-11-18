# Action Plan AI Agent — Portofolio Multi‑Peran (CYOA)

## 1. Tujuan & Ruang Lingkup

- Membangun website portofolio interaktif “Choose Your Own Adventure” berbasis `Laravel + Blade + Vite`.
- Menghadirkan gateway minimalis, konten dinamis per persona (Tech, Management, Operations & Creative), switcher persisten, serta jalur resume.
- Menjaga performa, aksesibilitas, SEO, keamanan, dan kemudahan pemeliharaan.

## 2. Prinsip Operasi AI Agent

- Berorientasi hasil: Rencanakan → Implementasi → Verifikasi → Iterasi.
- Gunakan jalur terkecil: Mulai dari konten statis, tingkatkan ke data dinamis bila perlu.
- Jaga konsistensi dengan arsitektur proyek saat ini (Laravel, Blade, Vite, Pest, Pint).
- Dokumentasikan perubahan, hindari komit rahasia, ikuti lint dan test sebelum rilis.

## 3. Prasyarat & Lingkungan

- Perangkat lunak:
  - `PHP` (sesuai versi Laravel proyek), `Composer`, `Node.js`, `npm`.
  - Web server (Apache/Nginx) atau `php artisan serve` untuk dev.
- Konfigurasi:
  - Salin `.env.example` → `.env`, jalankan `php artisan key:generate`.
  - Instal dependensi: `composer install`, `npm ci`.
  - Build aset: `npm run build` atau jalankan dev: `npm run dev`.

## 4. Ikhtisar Arsitektur

- Backend: Routing `routes/web.php`, controller `app/Http/Controllers`, view `resources/views` (Blade), API ringan untuk memuat partial konten persona.
- Frontend: JS/CSS dibundel via `Vite`, interaksi ringan (Fetch/AJAX) mengganti konten tanpa full reload.
- Konten: Partial per persona, navigasi adaptif, CTA, testimoni, proyek unggulan.
- State: Simpan persona aktif di `localStorage` atau query param (mis. `/?persona=tech`).

## 5. Fase Implementasi

- Fase 0 — Perencanaan
  - Finalisasi mapping Persona ↔ Peran ↔ Konten ↔ Navigasi.
  - Tentukan sumber konten: statis (Blade/JSON) → opsional DB.
- Fase 1 — Kerangka Gateway
  - Tambah route `/` untuk gateway + parameter `persona` opsional.
  - Buat view `resources/views/gateway.blade.php` dengan tombol persona dan jalur resume.
  - Implementasikan animasi fade‑in saat menampilkan konten.
- Fase 2 — Konten Persona
  - Buat partial: `resources/views/persona/tech.blade.php`, `management.blade.php`, `ops_creative.blade.php`.
  - Navigasi adaptif per persona; komponen switcher header/sidebar.
- Fase 3 — Resume Overview
  - Halaman ringkasan lintas peran + tautan unduh CV (PDF).
- Fase 4 — Integrasi Data (Opsional)
  - Model database untuk proyek/testimoni; seed contoh; render dinamis.
- Fase 5 — QA & Optimasi
  - Jalankan lint `vendor/bin/pint`, test `vendor/bin/pest`.
  - Optimasi performa (cache, lazy load, fingerprint aset), aksesibilitas, SEO.
- Fase 6 — Rilis & Monitoring
  - Deploy build aset, cache config/route/view, aktifkan logging.

## 6. Daftar Tugas Terperinci (Checklist)

- Setup & Validasi
  - `composer install` | `npm ci` | `php artisan key:generate`.
  - `npm run build` atau `npm run dev`; verifikasi `public/build`.
- Routing
  - Tambah route: gateway `/`, persona fetch `/persona/{id}`, resume `/resume`.
- Controller
  - `PersonaController@index` (gateway), `PersonaController@content` (partial), `PersonaController@resume` (overview).
- View
  - `gateway.blade.php` (foto, headline, tombol persona/resume).
  - Partial persona: Tech, Management, Ops & Creative (headline, proyek, skill, CTA, testimoni).
  - Komponen switcher: “Saat ini melihat: [Persona]. Ganti?”.
- Frontend JS
  - Tambah fungsi fetch partial persona dan swap DOM; simpan state ke `localStorage`.
- Styling
  - Tema visual per persona: Biru/Ungu, Hitam/Emas, Hijau/Abu‑abu; jaga kontras.
- Aksesibilitas & SEO
  - Alt text, fokus keyboard, meta dinamis per persona.
- Testing (Pest)
  - Feature: route merespons, view render benar, switcher berfungsi.
  - Unit: utilitas mapping persona, formatter konten.
- Linting & Format
  - Jalankan `vendor/bin/pint`, perbaiki laporan otomatis.
- Build & Deploy
  - `npm run build`, `php artisan config:cache route:cache view:cache`.
  - Konfigurasi server (DocumentRoot ke `public/`).

## 7. Perintah Kunci

- Instalasi & Dev:
  - `composer install`
  - `npm ci`
  - `php artisan key:generate`
  - `npm run dev` (atau `npm run build`)
  - `php artisan serve`
- QA:
  - `vendor/bin/pint`
  - `vendor/bin/pest`
- Optimasi & Cache:
  - `php artisan config:cache`
  - `php artisan route:cache`
  - `php artisan view:cache`

## 8. Timeline Implementasi

- Minggu 1 — Perencanaan & Kerangka
  - Mapping persona, route dasar, gateway view, switcher.
- Minggu 2 — Konten Persona
  - Partial persona, navigasi adaptif, CTA, testimoni.
- Minggu 3 — Resume & QA
  - Halaman resume, aksesibilitas & SEO, lint + test.
- Minggu 4 — Integrasi Data & Rilis
  - Opsional DB untuk proyek/testimoni, optimasi, deployment.

## 9. Kriteria Keberhasilan

- Konten relevan tercapai ≤ 2 klik dari gateway.
- Navigasi adaptif & switcher bekerja tanpa reload penuh.
- Lint dan test lulus; performa dan aksesibilitas memenuhi standar.
- Konversi CTA meningkat; konten mudah diperbarui.

## 10. Risiko & Mitigasi

- Terlalu banyak pilihan awal → mitigasi pengelompokan persona (A/B/C + Resume).
- Performa menurun akibat gambar besar → gunakan lazy load dan optimasi aset.
- Aksesibilitas kurang → audit kontras, fokus, alt text.
- Konten sulit dipelihara → modularisasi partial dan sumber konten terstruktur.

## 11. Runbook Prompts (untuk AI Agent)

- “Tambahkan route gateway dan controller dasar untuk persona.”
- “Buat `gateway.blade.php` dengan tombol A/B/C + Resume dan animasi fade‑in.”
- “Implementasikan partial `persona/tech|management|ops_creative.blade.php` dan switcher.”
- “Tambahkan JS untuk fetch partial konten dan simpan state persona.”
- “Siapkan halaman resume + tautan unduh CV.”
- “Jalankan lint (`vendor/bin/pint`) dan test (`vendor/bin/pest`), perbaiki jika gagal.”
- “Build aset dan aktifkan cache artisan; siapkan deployment.”