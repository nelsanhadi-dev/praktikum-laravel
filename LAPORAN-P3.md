# Laporan P3 — Database, Migration, Model, dan Eloquent ORM (SIM-Surat)

## Refleksi
1. **Beda data array P2 dan database P3?** Array hanya ada di kode Controller dan hilang/tidak terkelola saat kode berubah. Data database tersimpan permanen di tabel MySQL dan dibaca lewat Model Eloquent.
2. **Fungsi migration?** Mendefinisikan dan membuat/mengubah struktur tabel lewat file PHP, sehingga struktur database terdokumentasi, bisa diulang, dan bisa dibagikan lewat Git.
3. **Mengapa Model IncomingLetter bisa dipakai walau kosong?** Karena mewarisi `Illuminate\Database\Eloquent\Model`, sehingga method seperti `all()` dan `findOrFail()` sudah tersedia. Laravel otomatis memetakan `IncomingLetter` ke tabel `incoming_letters`.
4. **Mengapa Blade berubah dari array ke objek?** Eloquent mengembalikan objek Model (bukan array), jadi atribut diakses dengan `$surat->pengirim`, bukan `$surat['pengirim']`.
5. **Fungsi findOrFail()?** Mencari satu record berdasarkan primary key; jika tidak ditemukan, otomatis memberi respons 404.
