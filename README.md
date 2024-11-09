## Website BioLink CRUD "Mirip Linktree"

## Project Tailwind CSS

Proyek ini menggunakan [Tailwind CSS](https://tailwindcss.com/) sebagai framework styling. Ikuti panduan di bawah ini untuk menjalankan proyek di lingkungan lokal Anda.

## Prasyarat

Pastikan Anda sudah menginstal:

- [Node.js](https://nodejs.org/) (disarankan versi LTS terbaru)
- [npm](https://www.npmjs.com/) (biasanya sudah terinstal bersama Node.js)

## Cara Menjalankan Proyek

1. **Clone Repository**,
   Clone repository ini ke komputer Anda dan pindah ke direktori proyek:

   ```bash
   git clone https://github.com/Haisyam/BioLink-CRUD.git
   cd BioLink-CRUD
   ```

1. **Instal Dependensi**,
   Instal semua dependensi yang diperlukan dengan perintah:

   ```bash
   npm install
   ```

1. **Menjalankan Server Pengembangan**,
   Setelah instalasi selesai, jalankan perintah berikut untuk memulai server pengembangan:

   ```bash
   npm run dev
   ```

   Perintah ini akan memulai server pengembangan, dan perubahan pada file akan langsung diterapkan serta terlihat di browser.

1. **Membuat Build untuk Produksi**,
   Jika Anda ingin membuat build untuk produksi, jalankan:

   ```bash
   npm run build
   ```

1. **Setup Database**,
   Create database dengan nama:

   ```bash
   linktree

   ```

   Impor linktree.sql ke database tersebut

1. **Login Admin**,
   localhost/BioLink-CRUD/public/admin:
   ```
   Username: 1
   Password: 1
   ```

## Feature Admin

- Login Admin
- CRUD:
  - Kelola Banner
  - Kelola Button Link
  - Kelola Footer
