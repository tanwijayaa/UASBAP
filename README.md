# [Amelia Tanwijaya - 03081200036](https://startbootstrap.com/theme/agency)

## 1. Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin). 

Menambah tabel dengan perintah CRUD di terminal. 
`php artisan crud:generate formvoucher --fields='Judul#string; Deskripsi#string; Diskon#integer;Tombol#string; Link_Tombol#string; Foto#string;Disable#string'--controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html`

Tabel yang saya tambahkan adalah tabel voucher dengan kolom Judul, Deskripsi, Diskon, Tombol, Ling Tombol, Foto, Disable/Status. Tidak lupa dihasilkan menu untuk mengakses tabel pada sidebar admin.

## 2. Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan queryview tersebut kedalam file queryUAS.sql(20poin)

Queryview yang dibuat menggabungkan 3 buah tabel, yaitu tabel voucher, transaksi, dan tabel produk sehingga menghasilkan tabel query yang menunjukan transaksi dengan produk apa saja yang telah menggunakan voucher dan tidak menggunakan voucher.

`CREATE VIEW TransaksidenganVoucher AS SELECT tabel.id as Transaksi_ID, tabel.productid as Product_ID,product.Nama as Product_Nama, tabel.Voucher_ID as Voucher_ID, voucher.Judul as Voucher_Judul, voucher.Deskripsi as Voucher_Deskripsi` 
`FROM form_transactions tabel` 
`LEFT JOIN formvouchers voucher on voucher.id = tabel.Voucher_ID` 
`LEFT JOIN form_products product on product.id = tabel.productid`

## 3. Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Digunakan template tabel bootstrap dengan tambahan header dibagian atasnya.
Adapun tombol cetak pdf yang akan mendownload pdf dengan preview sebagai berikut.
![Gambar PDF](/public/images/pdf.jpg)

Untuk ini diperlukan beberapa step seperti run perintah php untuk menginstal package dompdf, konfigurasi di config app.php, run code untuk create controller di terminal, pembuatan routes, create interface, dan pengubungan interface dengan data dan controller.

## 4. Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

install package di terminal `php artisan make:request StorePostRequest`
Akan muncul file di bagian Http-> Request -> StorePostRequest.php
Ubah baris ke 16 yang bagian authorize menjadi true
Kemudian isi StorePostRequest sesuai dengan validasi yang diinginkan
Selanjutnya hubungkan controller ke StorePostRequest ini agar mendapatkan validasi yang diinginkan

Berikut preview validasi yang telah dibuat.
![Gambar Validasi](/public/images/validation.jpg)

## 5. Simpan kode program beserta queryUAS.sqlke public repository github, tambahkan file readme.md yang berisikan (10 Poin)

Ditambahkan readme.md dengan penjelasan dari penyelesaian soal sesuai ketentuan yang diberikan yaitu berisi nama, NIM, soal, dan penjelasan jawaban. 
Adapun code ini akan di push ke dalam github sesuai soal yang diberikan.