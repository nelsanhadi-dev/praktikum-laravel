# Presentasi Singkat: Tailwind CSS Murni + Vite

## Konsep
- Tailwind CSS dipakai sebagai framework utility-first.
- `resources/css/app.css` hanya menjadi entry point Tailwind: `@import "tailwindcss";`.
- Styling ditulis langsung pada elemen Blade menggunakan utility class Tailwind seperti `bg-slate-950`, `rounded-2xl`, `px-5`, `shadow-sm`, `hover:bg-blue-700`, `md:grid-cols-2`, dan `lg:flex-row`.
- Vite memproses Tailwind dan menghubungkannya ke Laravel lewat `@vite`.

## Alur
1. `npm install` memasang package frontend.
2. `npm run dev` menjalankan Vite saat pengembangan.
3. Blade memanggil `@vite(['resources/css/app.css', 'resources/js/app.js'])`.
4. Tailwind membaca class utility pada Blade dan menghasilkan CSS yang dibutuhkan.
5. `npm run build` membuat aset final di `public/build`.

## Bagian yang Dipercantik
- Login.
- Header dan navigasi.
- Dashboard.
- Tabel Surat Masuk dan Surat Keluar.
- Form tambah/edit.
- Detail surat.
- Tampilan responsive untuk layar kecil dan besar.

## Fungsionalitas yang Tidak Diubah
- Controller.
- Model.
- Routes.
- Database/migration.
- Middleware/Gate.
- CRUD.
- Login/logout.
