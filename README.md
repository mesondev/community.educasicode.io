# EducasiCode Papua Website

Dokumentasi singkat untuk halaman-halaman dan struktur aset situs EducasiCode Papua.

## Ringkasan

Proyek ini berisi kumpulan halaman HTML statis yang mendukung tampilan website komunitas dan kursus EducasiCode Papua. Halaman utama, kursus, kontributor, TechShare, kontak, pendaftaran, dan login tersedia di root proyek.

## Halaman Utama

- `index.html` - Halaman beranda dengan hero, tombol CTA, gambar slider, dan logo partner.
- `abouts.html` - Halaman About Us yang menjelaskan misi, visi, dan informasi komunitas.
- `course.html` - Halaman Kelas Kursus dengan detail program, modul, daftar mentor/kontributor, dan tombol pendaftaran.
- `techshere.html` - Halaman TechShare yang menampilkan inisiatif, kegiatan, dan dukungan teknologi.
- `contributors.html` - Halaman Profil Contributors yang menampilkan anggota komunitas dan grafik persentase peran.
- `contact.html` - Halaman kontak dengan formulir pesan.
- `login.html` - Halaman login UI placeholder.
- `register.html` - Halaman pendaftaran UI dan formulir pendaftaran.

## Fitur Utama

- Tema gelap/terang dengan tombol toggle.
- Menu navigasi responsif dan mobile hamburger.
- Hero image rotasi otomatis di halaman beranda.
- Modal pendaftaran yang muncul saat tombol `Daftar Sekarang` diklik.
- Grafik persentase peran `Mentor` dan `Contributor` di halaman contributors.
- Favicon menggunakan logo `edukasicode.png`.

## Struktur Proyek

```
/asset
  /css
    style.css
  /images
    edukasicode.png
    sacode.png
    SAGU-FOUNDATION-FONT-HITAM-1.png
    /contributors
      images-Meson.jpeg
      images Jansen-faidiban.jpg
      images-samuel.jpg
      rois-wanimbo.png
      Mr.Mee.png
      about-janzen-papuancoders.png
/asset/js
  script.js
/index.html
/abouts.html
/course.html
/techshere.html
/contributors.html
/contact.html
/login.html
/register.html
```

## Teknologi

- HTML
- CSS
- JavaScript

## Cara Menjalankan

1. Buka file `index.html` di browser Anda.
2. Atau gunakan server lokal sederhana:
   - `python -m http.server 8000` (untuk Python 3)
   - `npx serve .`
3. Akses `http://localhost:8000`.

## Catatan Penting

- Konten pendaftaran saat ini ditangani oleh modal frontend, tidak terhubung ke backend nyata.
- Halaman login dan register berfungsi sebagai UI placeholder.
- Untuk memperbarui gambar hero, gunakan file yang tersedia di `asset/images/contributors`.

## Pengembangan

- `asset/css/style.css` - Styling utama dan responsif.
- `asset/js/script.js` - Interaksi tema, menu, slider, modal pendaftaran, dan grafik peran.

---

Dokumen ini dibuat untuk mendokumentasikan seluruh halaman dan fitur situs EducasiCode Papua saat ini.