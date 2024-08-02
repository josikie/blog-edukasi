1. Pendahuluan

Tujuan Program: Menyediakan platform edukasi online yang interaktif untuk belajar matematika dan bahasa Inggris.
Fitur Utama: Registrasi pengguna, login, pembuatan posting, persetujuan posting oleh admin, halaman dari admin dan pengguna.
Target Pengguna: Siswa, guru, atau siapa saja yang ingin belajar matematika dan bahasa Inggris secara mandiri.

2. Panduan Instalasi

Persyaratan Sistem: PHP versi 5.6 , MySQL, web server Apache.

Langkah-langkah Instalasi:
Download dan ekstrak file program.
Buat database baru di MySQL.
Import file SQL untuk membuat struktur database.
Konfigurasi file koneksi database.
Jalankan program melalui web server.

3. Panduan Penggunaan

Untuk Pengguna:
Registrasi: Cara membuat akun baru, mengisi profil.
Login: Cara masuk ke akun.
Membuat Posting: Cara membuat posting baru (misal: soal matematika, artikel bahasa Inggris).
Melihat Posting: Cara melihat posting yang sudah dibuat dan disetujui oleh admin.

Untuk Admin:
Login: Cara masuk ke akun admin.
Dashboard Admin:
Menampilkan daftar posting yang belum disetujui.
Menyetujui atau menolak posting.
Mengelola pengguna (menambah, menghapus, mengubah peran).
Mengubah pengaturan sistem.

4. Struktur Database

Tabel Pengguna: id_user, username, password, email, role (user/admin).
Tabel Posting: id_posting, date, title, image, article, approval, user_id, category_id.
Tabel Kategori: id_kategori, nama_kategori.
Tabel Komentar: id, comment_date, comment_body, user_id, post_id

5. Kode Program Penting

Fungsi untuk melakukan registrasi, login, dan autentikasi pengguna.
Fungsi untuk menyimpan posting ke database.
Fungsi untuk menampilkan daftar posting berdasarkan status.
Fungsi untuk menyetujui atau menolak posting.

6. Troubleshooting

Masalah umum yang mungkin terjadi (misal: error koneksi database, form tidak valid, posting tidak muncul).
Solusi untuk masalah-masalah tersebut.
Contoh Dokumen (Fragment)
## **Panduan Penggunaan untuk Pengguna**

### **Membuat Posting Baru**
1. **Login** ke akun Anda.
2. Klik menu **"Buat Posting"**.
3. Pilih **kategori** posting Anda (Matematika atau Bahasa Inggris).
4. Isi **judul** dan **isi** posting.
5. Klik tombol **"Simpan"**.
   * **Catatan:** Posting yang Anda buat akan dalam status "Draf" hingga disetujui oleh admin.

## **Struktur Tabel Posting**

| Kolom       | Tipe Data | Keterangan                                |
|-------------|-----------|------------------------------------------|
| id_posting     | int       | ID posting (auto increment)               |
| judul        | varchar   | Judul posting                             |
| isi          | text      | Isi posting                               |
| kategori     | enum      | Kategori posting (matematika, bahasa_inggris) |
| tanggal_buat  | datetime | Tanggal dan waktu pembuatan posting       |
| status       | enum      | Status posting (draf, disetujui, ditolak)   |
| id_user     | int       | ID pengguna yang membuat posting         