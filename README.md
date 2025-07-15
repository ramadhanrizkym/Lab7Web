# Praktikum 1 #

1. Mengaktifkan Ekstensi di

bash
  php.ini


Berikut adalah ekstensi PHP yang harus diaktifkan:

1. php-json → Diperlukan untuk bekerja dengan JSON.
2. php-mysqlnd → Native driver untuk MySQL.
3. php-xml → Diperlukan untuk bekerja dengan XML.
4. php-intl → Diperlukan untuk mendukung aplikasi multibahasa.
5. libcurl (opsional) → Diperlukan jika ingin menggunakan Curl.

##

Buka xampp file Config

bash
  php.ini


Pastikan ekstensi berikut tidak dikomentari (hilangkan tanda ; di depannya jika ada):

bash
extension=json
extension=mysqli
extension=xml
extension=intl
extension=curl


![Hasil Serve](https://github.com/user-attachments/assets/7b776fc9-39ba-4606-95f4-3ee96a82859c)

## Instalasi

### 1. Instalasi CodeIgniter

Instalasi dengan cara manual:

1. Unduh CodeIgniter → (https://codeigniter.com/download)
2. Extrak file zip Codeigniter ke direktori htdocs/Lab7Web
3. Ubah nama direktory framework-4.x.xx menjadi ci4.
4. Menjalankan CLI XAMPP
   Arahkan direktori sesuai dengan project → (xampp/htdocs/Lab7Web/ci4/)
   Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: php spark serve Meluncurkan server pengembangan bawaan, Memungkinkan melihat aplikasi di browser (http://localhost:8080).

### 2. Menjalankan CLI XAMPP

- Arahkan direktori sesuai dengan project → (xampp/htdocs/Lab7Web/ci4/)
- Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: php spark serve Meluncurkan server pengembangan bawaan, Memungkinkan melihat aplikasi di browser (http://localhost:8080).

![Screenshot 2025-06-12 180638](https://github.com/user-attachments/assets/8f655722-403f-4b22-88c1-73a58ae0e353)
![Hasil Serve](https://github.com/user-attachments/assets/7b776fc9-39ba-4606-95f4-3ee96a82859c)

### 3. Mengaktifkan Mode Debugging

Fitur debugging dari CodeIgniter 4 untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Mengaktifkan mode debugging dengan mengubah niai konfigurasi pada file
env, cari variable CI_ENVIRONMENT ubah menjadi development

![Debug Config](https://github.com/user-attachments/assets/d8d3827e-69f4-43eb-bff3-c11caffe17ff)

Kemudian rename nama file env → .env

Contoh Error yang terjadi ketika menghapus function pada file app/Controller/Home.php

![Error Sample](https://github.com/user-attachments/assets/def8f63d-ed58-4707-b2d4-d57d29815e5e)

![image](https://github.com/user-attachments/assets/33ba4c9c-e603-4854-a916-273b256e188c)


## 4. Routing dan Controllers

Routing dalam CodeIgniter 4 adalah proses yang menghubungkan permintaan (request) dari pengguna ke Controller yang sesuai untuk diproses. Routing ini memungkinkan kita menentukan bagaimana URL diterjemahkan menjadi aksi dalam aplikasi, sehingga setiap permintaan dapat diarahkan dengan benar.

#### Membuat Route baru (autoRoute(false)):

Secara default fitur autoRoute sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false. Nonaktifkan Auto Routing ($routes->setAutoRoute(false);) ketika menjalankan di production.

tambahkan kode berikut dalam *app/Config/Routes.php*

![image](https://github.com/user-attachments/assets/47448e29-fbfa-4c8f-bfc6-d37e0c0e3c99)


Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah php spark routes:

![Route Output](https://github.com/user-attachments/assets/82bf7eeb-4988-42d4-ba21-1bf7f22f3ebc)


### Membuat Controllers:

tambahkan code berikut dalam *app/Controllers/Page.php*

#![Screenshot 2025-06-12 185420](https://github.com/user-attachments/assets/ee5eda62-a186-4150-b7e5-ab6ecb0a78d4)


### 5. Membuat View

1. Buat File app/Views/about.php dan ubah method about pada class Controller Page
2. Tambahkan code pada ke 4 file diatas:

![Screenshot 2025-06-12 185742](https://github.com/user-attachments/assets/c47167a6-5df6-40ba-9ae9-72522fc8f486)
![image](https://github.com/user-attachments/assets/00197742-46fb-4851-8b7b-7a98700d4ee8)


### 6. Membuat Layout

1. Buat direktori template pada direktori view kemudian buat file header.php dan footer.php Kemudian ubah file app/view/about.php seperti berikut.
   ![image](https://github.com/user-attachments/assets/adab12c9-e0df-4711-aec0-41ec74d49ab7)

   ![image](https://github.com/user-attachments/assets/95d03bd9-2a01-4c3d-ae7a-693a16696e0d)


2. buat di file style.css di dalam direktori public
   ![image](https://github.com/user-attachments/assets/62db5213-2d03-4423-b1a8-3fdaef9be076)


### 7. Hasil Output

![Screenshot 2025-06-14 084055](https://github.com/user-attachments/assets/bf4ec20a-285d-43c9-8540-59cfdc393640)
