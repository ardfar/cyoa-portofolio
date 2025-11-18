# Konsep Website: Portofolio Multi‑Peran “Choose Your Own Adventure”

## 1. Tujuan dan Fungsi

- Masalah yang diatasi: Portofolio tradisional menyajikan informasi seragam untuk semua audiens, membuat konten terasa tidak fokus terutama bagi generalist/polymath.
- Tujuan utama:
  - Relevansi instan: Menampilkan konten paling relevan berdasarkan peran/persona yang dipilih.
  - UX yang memorable: Pengalaman interaktif, minim friksi, tanpa perlu berpindah halaman penuh.
  - Branding terkurasi: Memposisikan sebagai “Master of many”, dengan konten yang difokuskan per-konteks.
- Fungsi inti website:
  - Gateway interaktif menanyakan “Ingin melihat saya sebagai apa?”
  - Pengunjung memilih persona; konten, navigasi, dan gaya bahasa beradaptasi secara dinamis.
  - Tersedia jalur “Gambaran Umum / Resume” sebagai ringkasan lintas peran.

## 2. Audiens, Persona, dan Peran

- Target audiens:
  - Perekrut teknis/Tech Lead: Fokus pada kode, arsitektur, dan stack.
  - Manajer HR/Non‑Teknis: Fokus pada pengalaman, hasil, dan soft skills.
  - Klien potensial (freelance): Fokus pada studi kasus, solusi bisnis, testimoni.
  - Kolega/Jaringan: Gambaran menyeluruh kemampuan.
- Master list peran (8):
  - Full Stack Developer (Laravel, Python, JS & TS, MySQL & NoSQL, Docker, CI/CD)
  - AI/ML Engineer (Python, TensorFlow, PyTorch, YOLO, OpenCV, CUDA)
  - IT Support
  - Project Manager
  - Product Manager
  - Photography
  - Business Development
  - Administrator
- Pengelompokan persona untuk mengurangi pilihan awal dan meningkatkan fokus:
  - Persona A — Technology & Engineering: Full Stack Developer, AI/ML Engineer
  - Persona B — Management & Strategy: Project Manager, Product Manager, Business Development
  - Persona C — Operations & Creative: IT Support, Administrator, Photography

## 3. Arsitektur Sistem

- Pendekatan umum:
  - Server‑side: Framework `Laravel` untuk routing, controller, view rendering, dan API endpoint.
  - Client‑side: View berbasis `Blade` dengan interaksi ringan (AJAX/Fetch) untuk memuat konten persona tanpa full reload.
  - Build assets: Bundling menggunakan Vite (sesuai struktur `public/build`), CSS konvensional atau utilitas yang tersedia di proyek.
  - Konten terkurasi per persona dipetakan ke partial view/section terpisah agar modular dan mudah diubah.
- Komponen utama:
  - `Gateway Page`: Halaman awal dengan pilihan persona dan tombol “Lihat Gambaran Umum/Resume”.
  - `Persona Content Sections`: Partial yang menampilkan konten spesifik tiap persona (headline, proyek, skill, CTA, gaya bahasa, tema visual).
  - `Persona Switcher`: Komponen tetap di header/sidebar untuk beralih persona secara dinamis.
  - `Resume Overview`: Ringkasan lintas peran, tautan unduh CV.
  - `API/Endpoints`: Mengambil blok konten persona (JSON atau HTML partial) untuk swap dinamis.
  - `Asset Pipeline`: Vite untuk JS/CSS; caching dan fingerprinting melalui build.
- Penyimpanan dan sumber data:
  - Konten statis di file view/markdown atau konfigurasi JSON.
  - Opsi untuk konten dinamis dari database (mis. daftar proyek/testimoni) bila diperlukan.
- State dan preferensi pengguna:
  - Simpan pilihan persona di `localStorage` atau query parameter untuk persistensi antar halaman.
  - URL dapat mencerminkan persona terpilih (mis. `/?persona=tech`).

### Diagram Alur (teks)

```
[Masuk: Gateway]
    ├─ Pilih Persona A (Tech & Engineering)
    │     ├─ Render konten: Full Stack + AI/ML
    │     ├─ Navigasi adaptif: Home, Proyek Tech, Stack, GitHub, Kontak
    │     └─ Persona Switcher tersedia
    ├─ Pilih Persona B (Management & Strategy)
    │     ├─ Render konten: PM + Product + BizDev
    │     ├─ Navigasi adaptif: Home, Studi Kasus, Roadmap, Kontak
    │     └─ Persona Switcher tersedia
    ├─ Pilih Persona C (Operations & Creative)
    │     ├─ Render konten: IT Support + Admin + Photography
    │     ├─ Navigasi adaptif: Home, Galeri/Operasional, Kontak
    │     └─ Persona Switcher tersedia
    └─ Lihat Gambaran Umum / Resume
          ├─ Ringkasan 8 peran
          └─ Tautan unduh CV
```

## 4. Fitur Utama dan Detail

- Gateway Minimalis:
  - Foto profesional, headline singkat, pertanyaan kunci, 3–4 tombol persona + 1 tombol Resume.
  - Animasi ringan (fade‑in) saat konten persona dimunculkan di bawah gateway.
- Konten Dinamis per Persona:
  - Headline dan gaya bahasa:
    - Tech: Teknis, analitis.
    - Management: Strategis, berorientasi hasil/ROI.
    - Operations & Creative: Terorganisir, solutif, kreatif.
  - Proyek unggulan:
    - Tech: Studi kasus E‑commerce (Full Stack), demo deteksi objek (AI/ML).
    - Management: Studi kasus peluncuran produk, roadmap pengembangan, strategi GTM.
    - Operations & Creative: Portofolio fotografi, studi kasus efisiensi (Admin/IT Support).
  - Skill yang ditampilkan:
    - Tech: Laravel, Python, JS/TS, TensorFlow, YOLO, Docker, CI/CD.
    - Management: Project/Product Management, Agile/Scrum, Analisis Bisnis, BizDev.
    - Operations & Creative: IT Support, Administrasi, Adobe Suite, Problem Solving.
  - CTA:
    - Tech: “Lihat proyek teknis saya”.
    - Management: “Lihat studi kasus saya”.
    - Operations & Creative: “Lihat galeri / Hubungi saya”.
  - Tema visual opsional:
    - Tech: Aksen Biru/Ungu (Teknologi/Futuristik).
    - Management: Aksen Hitam/Emas (Korporat/Profesional).
    - Operations & Creative: Aksen Hijau/Abu‑abu (Stabil/Kreatif).
- Persona Switcher Persisten:
  - Tombol/dropdown di header/sidebar: “Saat ini melihat: [Persona]. Ganti?”.
  - Mengubah konten inti tanpa pindah halaman penuh.
- Gambaran Umum / Resume:
  - Ringkasan semua 8 keahlian, pengalaman, penghargaan, sertifikasi.
  - Tautan unduh CV (PDF) dan kontak cepat.
- Navigasi Adaptif:
  - Item menu mengikuti persona aktif; tetap menyediakan akses universal ke Kontak.
- Testimoni dan Bukti Sosial:
  - Ditampilkan kontekstual sesuai persona; link ke GitHub/LinkedIn/Portfolio foto.

## 5. Wireframe (Sketsa Teks)

### Gateway (Above the Fold)

```
┌───────────────────────────────────────────────┐
│ [Foto/Avatar]  [Headline Singkat]            │
│ "Halo, saya [Nama]. Ingin melihat saya sebagai apa?" │
│                                               │
│ [A] Technology & Engineering  [B] Management & Strategy │
│ [C] Operations & Creative      [D] Gambaran Umum/Resume │
└───────────────────────────────────────────────┘
```

### Konten Persona (di bawah Gateway)

```
┌───────────────────────────────────────────────┐
│ Header: "Sebagai praktisi teknologi, saya fokus pada…" │
│ Nav: Home | Proyek Tech | Stack | GitHub | Kontak      │
│                                                       │
│ [Kartu Proyek Unggulan] [Kartu Proyek Unggulan]       │
│ [Testimoni Teknis]                                     │
│ CTA: "Lihat proyek teknis saya"                        │
└───────────────────────────────────────────────┘
```

### Persona Switcher (Header/Sidebar)

```
┌───────────────────────────────────────────────┐
│ Saat ini melihat: Technology & Engineering    │
│ Ganti ke: [Management] [Operations & Creative]│
└───────────────────────────────────────────────┘
```

### Gambaran Umum / Resume

```
┌───────────────────────────────────────────────┐
│ Ringkasan 8 Peran + Highlight Pencapaian      │
│ Timeline pengalaman | Pendidikan | Sertifikasi │
│ Tautan Unduh CV (PDF) | Kontak Cepat          │
└───────────────────────────────────────────────┘
```

## 6. Spesifikasi Teknis

- Backend: `Laravel` untuk routing, controller, view (Blade), API ringan.
- Frontend: Blade + JS modular dibundel melalui `Vite`; gunakan Fetch/AJAX untuk memuat konten persona.
- Data: Mulai dari konten statis (view/JSON); opsi DB jika diperlukan (mis. tabel `projects`, `testimonials`).
- Performance: Cache view, asset fingerprinting, lazy load gambar.
- Aksesibilitas: Kontras warna sesuai persona, navigasi keyboard, alt text pada media.
- SEO: Metadata dinamis per persona, sitemap, structured data untuk proyek/studi kasus.
- Keamanan: CSRF untuk request, sanitasi input, hindari penyimpanan rahasia di klien.
- Persyaratan sistem:
  - PHP sesuai versi Laravel pada proyek.
  - Node.js untuk Vite bundling.
  - Web server (Apache/Nginx) + konfigurasi `public/index.php`.
  - Opsional: Database MySQL/PostgreSQL bila konten dinamis dibutuhkan.

## 7. Rencana Pengembangan & Timeline

- Fase 0 — Perencanaan (Minggu 1):
  - Finalisasi persona, konten, dan struktur halaman.
  - Definisikan sumber konten (statis vs dinamis).
- Fase 1 — Kerangka & Gateway (Minggu 2):
  - Buat route, controller dasar, view gateway dengan tombol persona.
  - Implementasikan switcher dan state penyimpanan pilihan pengguna.
- Fase 2 — Konten Persona (Minggu 3–4):
  - Kembangkan partial untuk Tech, Management, Operations & Creative.
  - Integrasikan navigasi adaptif dan CTA spesifik.
  - Tambahkan proyek unggulan, testimoni, dan gaya bahasa.
- Fase 3 — Gambaran Umum/Resume (Minggu 5):
  - Bangun halaman ringkasan + tautan unduh CV.
  - Optimasi aksesibilitas dan SEO dasar.
- Fase 4 — Integrasi Data & Polish (Minggu 6):
  - Opsional: Hubungkan ke database untuk proyek/testimoni.
  - Optimasi performa (cache, minify, lazy load), uji lintas perangkat.
- Fase 5 — Rilis & Monitoring (Minggu 7):
  - Deployment, verifikasi, dan iterasi berdasarkan feedback.

## 8. Kriteria Keberhasilan

- Pengunjung menemukan konten relevan dalam ≤ 2 klik dari gateway.
- Waktu di halaman dan interaksi meningkat untuk audiens yang ditarget.
- Konversi CTA (kontak/unduh CV/lihat proyek) meningkat per persona.
- Konten mudah dipelihara dan diperluas untuk persona/peran baru.

## 9. Catatan Implementasi

- Mulai dengan konten statis agar cepat live; tingkatkan ke konten dinamis bertahap.
- Jaga modularitas partial persona agar tim/individu mudah memperbarui.
- Gunakan tema visual seperlunya; utamakan aksesibilitas dan konsistensi.