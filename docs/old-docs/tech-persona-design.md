Design Pattern: Persona "Technology & Engineering"
1. Filosofi Desain
* Estetika: Modern, Minimalis, Tech-centric, Profesional.
* Mood: Inovatif, Presisi, Efisien, Canggih.
* Inspirasi: Antarmuka CLI (Command Line Interface), IDE (Integrated Development Environment), dashboard monitoring server, matrix-style code.
2. Palet Warna (Dark Theme)
* Background (Primary): #1A1A2E (Deep Dark Blue/Purple - menyerupai terminal)
* Text (Primary): #E0E0E0 (Soft White/Light Gray - mudah dibaca)
* Text (Secondary/Muted): #8C8C9A (Medium Gray - untuk detail, deskripsi)
* Accent (Primary): #00F7A6 (Neon Green/Cyan - seperti highlight kode, status aktif)
* Accent (Secondary/Highlight): #FFD700 (Gold - untuk CTA, elemen penting)
* Error/Warning (Optional): #FF4500 (Orange Red)
3. Tipografi (Font)
* Primary Font (Monospace):
   * Nama: Fira Code, Hack, JetBrains Mono, IBM Plex Mono, Space Mono
   * Fallback: monospace (agar browser memilih font monospace default)
   * Penggunaan: Hampir seluruh teks konten (heading, body, code snippets).
   * Kelebihan: Memberikan nuansa "kode", mudah dibaca untuk data/struktur.
* Secondary Font (Sans-serif - Opsional, untuk headline besar atau branding):
   * Nama: Inter, Roboto, Open Sans
   * Fallback: sans-serif
   * Penggunaan: Sangat minim, mungkin hanya untuk brandmark nama di header atau headline yang sangat besar jika ingin sedikit variasi. Sebaiknya tetap dominan monospace.
4. Komponen Utama & Gaya
4.1. Header / Navbar
* Background: Mengikuti warna background utama (#1A1A2E).
* Elemen: Logo/Nama Anda (Monospace, warna E0E0E0 atau 00F7A6), Tombol navigasi untuk "Ganti Persona" (ikon kecil/dropdown, teks 8C8C9A, hover 00F7A6).
* Efek: Sedikit blur atau transparency jika sticky untuk kesan modern.
* Contoh Navigasi Internal: [Home], [Projects], [Tech Stack], [GitHub], [Contact]
   * Link aktif: Text: #00F7A6, Underline: #00F7A6
   * Link pasif: Text: #8C8C9A
4.2. Hero Section (Landing Page Persona)
* Background: Sama dengan header, atau bisa sedikit lebih gelap (#10101A).
* Elemen:
   * Avatar/Foto: Bisa foto profesional dengan filter monokrom/duotone (biru/hijau), atau ikon/gambar abstrak yang merepresentasikan teknologi. Efek glowing tipis dengan warna accent di sekeliling.
   * Headline: <h1> - "Membangun Solusi Digital Inovatif." (Monospace, E0E0E0, ukuran besar, mungkin dengan efek typing perlahan)
   * Sub-headline: <p> - "Full Stack Developer | AI/ML Engineer | Pengalaman dalam Laravel, Python, TensorFlow, Docker, dan banyak lagi." (Monospace, 8C8C9A, ukuran sedang).
   * CTA (Call to Action): Tombol "Lihat Proyek Terbaru" atau "Lihat Stack Teknologi Lengkap".
      * Gaya Tombol: Background transparan, border tipis 00F7A6, teks 00F7A6.
      * Hover: Background 00F7A6 dengan teks 1A1A2E.
      * Ikon: Bisa ada ikon < > atau </> di dalam tombol.
4.3. Section Konten (e.g., "Proyek", "Tech Stack")
* Background: Tetap 1A1A2E.
* Separator: Garis tipis (#3A3A4E) atau gradient halus untuk memisahkan bagian.
4.3.1. Proyek
* Layout: Grid 2-3 kolom, atau daftar yang rapi.
* Item Proyek (Card):
   * Background Card: #2A2A3E (sedikit lebih terang dari background utama)
   * Border: Tipis, transparent atau 3A3A4E.
   * Hover: Border berubah jadi 00F7A6, shadow lembut, atau efek translateY sedikit ke atas.
   * Konten:
      * Judul Proyek: <h3> (Monospace, E0E0E0, ukuran medium).
      * Deskripsi Singkat: <p> (Monospace, 8C8C9A, 2-3 baris).
      * Tag Teknologi: <span class="tech-tag"> (Monospace, background #3A3A4E, teks #00F7A6, padding kecil, border-radius minimal).
      * Link: "View Live" (ikon panah) dan "View Code" (ikon GitHub). Gaya seperti CTA kecil, warna 00F7A6.
   * Gambar/Screenshot: Minimalis, mockup layar dengan tema gelap, atau logo proyek. Bisa dengan efek overlay warna accent saat hover.
4.3.2. Tech Stack
* Layout: Grid ikon atau daftar dengan progress bar.
* Item Skill (Icon + Text):
   * Ikon: Logo teknologi (SVG), warna monokrom atau diwarnai E0E0E0 / 00F7A6.
   * Nama Skill: Python, Laravel, TensorFlow (Monospace, E0E0E0).
   * Level (Opsional): Bar progress horizontal dengan warna 00F7A6 di atas background #3A3A4E.
4.3.3. GitHub / Kontribusi
* Elemen: Link ke profil GitHub, tampilan grafis kontribusi (jika ada API yang diintegrasikan), daftar proyek open-source.
* Gaya: Seperti kartu proyek, dengan fokus pada ikon GitHub dan angka kontribusi.
4.4. Footer
* Background: Sama dengan header atau sedikit lebih gelap (#10101A).
* Elemen: Hak Cipta, Link Sosial Media (ikon minimalis, warna 8C8C9A, hover 00F7A6), Tombol "Kembali ke Atas" (ikon panah ke atas).
5. Elemen Interaktif & Animasi (Untuk kesan Techy)
* Hover Effects: Semua elemen interaktif (link, tombol, card) harus memiliki efek hover yang jelas dan cepat (misal: perubahan warna, grow ringan, glow).
* Typing Animation: Headline atau sub-headline di hero section bisa menggunakan efek typing perlahan.
* Particles Background (Opsional): Latar belakang dengan efek partikel-partikel kecil yang bergerak pelan (seperti di banyak website teknologi), bisa menggunakan library seperti particles.js.
* Cursor Customization (Opsional): Mengganti cursor default dengan ikon kursor text-editor atau command-line.
* Code Snippets: Tampilkan blok kode dengan syntax highlighting yang konsisten (tema gelap).
def calculate_fibonacci(n):
   a, b = 0, 1
   for _ in range(n):
       yield a
       a, b = b, a + b

# Example Usage
for num in calculate_fibonacci(10):
   print(num)