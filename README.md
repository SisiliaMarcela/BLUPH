1.  Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses tabletersebut pada sidebar.
= Table dan halam CRUD yang saya tambah yaitu "Replacement Lounge", dengan CRUD Generator. Table yang saya buat bertujuan untuk agar siswa yang sudah membooking lounge tesebut bisa diubah sesuai jadwal yang sudah ditentukan

2.  Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan queryview tersebut kedalam file queryUAS.sql.
= view analisis data tersebut berupa data-data mahasiswa yang sudah ada dari file krs yang pak ade berikan serta nama dan mahasiswa dapat di input kembali jika kita klik tombol create pada halaman CRUD yang sudah tersedia seingga kita bisa menginput data mahasiswa yang baru.

3.  Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknyakedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan.
= untuk DompPDF yang pak ade ajarkan di sesi sebelumnya ada di kofugurasi dibagian config. Pada config, app.php (scroll paling bawah) di PDF dari pdh dompdf sama di bagian (scroll di nomor 177) provider tambahkan classnya untuk dompdf untuk kofigurasi. Untuk Nama dan StudentID saya tambahkan code nya di bagian "mahasiswa.blade.php" untuk bagian logo uph saya mengalami kesulitan mengakses foto ke dalam code dan foto tersebut tidak muncul berikut code yang saya buat seperti dibawah:
"<img src='{{ asset("adminlte/dist/img/logo-uph.png") }}' alt="User Avatar" class="img-size-50 img-circle mr-10">" 
Code tersebut sudah saya ikuti di video teams tapi foto tersebut tidak muncul. Banyak tutorial yang saya ikuti di youtube tapi tidak membuahkan hasil

4.  Buat validasi data untuk halaman insert dan update soal nomor 1.
= Semua halaman CRUD sudah saya periksa dan ada beberapa typo dan sudah saya revisi

5.  Simpan kode program beserta queryUAS.sqlke public repository github, tambahkan file readme.md yang berisikan:
o   Nama dan StudentID.
o   Soal dan penjelasan solusi untuk setiap soal beserta nama file yang berubah.
= Dari nomor 1 sammpai nomor 5 setiap soal sudah saya jelaskan berseta apa saja yang saya ubah dan revisi.
Setiap saya selesai code project ini saya selalu push ke github.
