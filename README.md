#  Realty Apartment

### *Modern Web-Based yang bisa mengatur sistem management apartement dengan efisiensi tinggi*

STATUS: Active | VERSION: 1.0 | FRAMEWORK: Laravel | TYPE: Final Project

---
## 1. Cara Penggunaan

## HOME WELCOME PAGE 
Di welcome page, saat scroll bawah bisa melihat menu apartemen yang disediakan, serta ada beberapa reason kenapa memilih kami adalah yang terbaik, 

- Jika klik " ABOUT US " maka bisa melihat visi misi serta apa itu realty ( Produk kami )
- jika klik " CONTACT US" maka bisa melihat kontak kami, " NAMA ANGGOTA KEL " 

- di facility bisa melihat kami meyediakan Kolam Renan, Lapangan tenis

Untuk mulai masuk ke managementnya maka bisa klik " Login " 

# CARA KERJA ADMINN ACCOUNT #

1. DASHBOARD : Di laman dashboard home admin* akan diperlihtkan menu dibagian kiri, dan di overview terlihat statistik secara realtime total unit, unit terisi, penghuni aktif, komplain yang merupakan dari sistem management

![Database Schema](SSreadmefoto/DashboardADMIN.png)


2. UNIT APARTEMEN : Klik menu " Unit Apartemen" dan adminn akan melihat unit apartemen yang statusnya ada Terisi, Tersedia, Maintenance. juga adminn bisa meng edit dari unit yang sudah ada. lalu di kanan atas ada menu " Tambah Unit Baru" yng dimana adminn bisa menambahkan status unit baru dengan menambah no unit, tower, lantai, tpe unit, status.

![Database Schema](SSreadmefoto/UnitApartementADMIN.png)

  - Menambahkan  UNIT BARU dengna klik TAMBAH UNIT BARU
![Database Schema](SSreadmefoto/AddUnitApartementAdmin.png)

3. DATA PENGHUNI : Ketika adminn mengklik menu Data Penghuni, adminn akan bisa melihat data dari penghuni mulai dari Nama, unit, kontak, mulai kontrak, status. Disini adminn bisa mengedit status jika penghuni ingin pindah unit ataupun keluar dari unit, di tombol ata ada menu tambah penghuni untuk adminn bisa menambahkan penghuni baru sesuai di unit yang ditentukan. Adminn juga bisa membuat akun guest baru yang akan di tempatkan di unit yang sudah direncanakan.

![Database Schema](SSreadmefoto/DataPenghuniADMIN.png)

  - Menambahkan Penghuni baru ataupun akun GUEST baru 
![Database Schema](SSreadmefoto/DataPenghuniADDGuestsADMIN.png)

4. TAGIHAN : Di menu tagihan ini adminn bisa mengelola dan melihat tagihan yang diberikan kepada penghuni mulai dari periode, jumlah total tagihan, status, beserta bukti bayar.Di bukti bayar admin bisa lihat Foto dari file yang penghuni kirimkan saat membayar tagihan serta Tombol terima jika memang sudah diterima pemabyarannya dan otomatis status akan menjadi " LUNAS ". Adminn juga bisa menambah tagihan baru kepada penghuni 

![Database Schema](SSreadmefoto/TagihanADMINN.png)

  - Membuat TAGIHAN BARU 
  
![Database Schema](SSreadmefoto/TagihanAdminnBuatTAgihan.png)


5. LAPORAN MASUK : Di menu laporan masuk ini adminn bisa melihat laporan yang penghuni ajukan, mulai dari Tanggal, nama pelapor, masalah, bukti foto, status, sampai tindakan. dimana di tindakannya ada " Pending ", " Proses ", " Selesai ", serta simpan.

![Database Schema](SSreadmefoto/LaporanMasukADMINN.png)

6. KELOLA FASILITAS : Di menu kelola fasilitas, adminn bisa melihat jadwal dari lapangan yang sudah dipesan oleh pengguna, dan admin juga bisa meng " HAPUS " jadwal yang sudah di reserve, serta meng set status menjadi " MAINTENANCE " dengan sitem real time

![Database Schema](SSreadmefoto/KelolaFasilitasADMINN.png)



# CARA KERJA WARGA/GUEST ACCOUNT # 

 1. Di Laman home klik " Login " 

 ![Database Schema](SSreadmefoto/Dashboardkelogin.png)

 2. Jika belum ada akun maka bisa " Register " Dulu

![Database Schema](SSreadmefoto/Registerakunbaru.png)

 3. Login menggunakan akun ( Contoh akun warga/ resident : ID : warga@gmail.com, PW : password)

![Database Schema](SSreadmefoto/LamanLoginGuests.png)

 4. Pengguna akan masuk ke halaman dashboard home, di bagian layout kiri bisa dilihat ada menu Home, Unit Hunian, Tagihan, Lapor Kerusakan.

![Database Schema](SSreadmefoto/DashboardGuest.png)

 5. Klik unit hunian dan pelanggan bisa lihat no hunian yang mereka miliki mulai dari tipe unit, no unit, lantai, tower. Dan jika belum maka akan tertulis belum memiliki 
  - Kalau Terisi : 
![Database Schema](SSreadmefoto/UnitHunianGuest.png)

  - Kalau Kosong : 
![Database Schema](SSreadmefoto/UnitHunianGuestKosong.png)

 6. Di menu " Tagihan " ada tagihan yang diberikan kepada pelanggan, terdapat tombol bayar sekarang dan pengguna akan diarahkan ke cara pembayaran dengan mengirim bukti gambar juga

![Database Schema](SSreadmefoto/GuestTagihan.png)

  - Klik Bayar Sekarang 

![Database Schema](SSreadmefoto/BayarTagihanGuest.png)

  - Menunggu verifikasi dari admin

![Database Schema](SSreadmefoto/VerifikasiTagihanGuest.png)

 7. Di menu " Lapor Kerusakan " pengguna bisa mengajukan laporan dengan mengisi judul masalah, deskripsi serta dilengkapi file yang bisa dikirimkan. Bila suidah terlaksana maka Status akan berubah jadi " Selesai " 

![Database Schema](SSreadmefoto/LaporKerusakanGuest.png)

 8. Di menu " Facility " ada reservasi fasilitas untuk pelanggan jika ingin reserve lapangan tenis ataupun kolam renang, dilenkgapi dengna sistem secara real time membuat pelanggan bisa melihat jadwal waktu apa yang sudah dipesan oleh guest lain/ sedang maintenance. 
 Note : Apartemen hanya memiliki 1 lapangan tenis dan 1 kolam renang yang bisa tersedia dan bisa di reserve

![Database Schema](SSreadmefoto/FacilitasGuests.png)





## 2. Features / Kegunaan

**Unit Management:** Mengatur apartment units & occupancy (CRUD).
**Resident Management:** Mengatur Resident management & registration (CRUD).
**Billing System:** Tagihan Bulanan, Receipt, Verifikasi pembayaran.
**Complaint System:** Untuk Komplan dari guest/ resident yang dilengkapi tanggal,foto untuk bukti.
**Facility Booking:** Sistem Booking (Tennis & Kolam Renang ) Dengan sistem waktu yang real time/live.
**Dashboard:** Admin dashboard yang dilengkapi statistik dari sistem.
**Security:** verifikasi authentication, session management, & role-based access control sesuai dari level aktor.
**Architecture:** menggunakan **MVC Architecture (Model-View-Controller)**.


## 3. List Path (Routes)

Dokumentasi *endpoint* atau jalur URL utama yang tersedia dalam aplikasi:

| Role      | Method    | Endpoint / Path     | Deskripsi |
| :---       | :---     | :---                | :--- |
| **Public** | GET      | `/`                 | Halaman Depan (Landing Page) |
| **Public** | GET      | `/facilities`       | Halaman Info Fasilitas  |
| **Auth**   | GET      | `/login`            | Halaman Masuk ke sistem  |
| **Auth**   | GET      | `/register`         | Pendaftaran penghuni baru |
| **Admin**  | GET      | `/admin/dashboard`  | Dashboard Utama Admin |
| **Admin**  | RESOURCE | `/admin/units`      | CRUD Unit Apartemen |
| **Admin**  | RESOURCE | `/admin/residents`  | CRUD Data Penghuni |
| **Admin**  | RESOURCE | `/admin/bills`      | Kelola Tagihan & Verifikasi |
| **Admin**  | GET      | `/admin/complaints` | Kelola Laporan Masuk |
| **Admin**  | GET      | `/admin/facilities` | Manajemen Jadwal Fasilitas |
| **Warga**  | GET      | `/resident/home`    | Dashboard Warga |
| **Warga**  | GET      | `/resident/my-unit` | Detail Unit Saya |
| **Warga**  | GET      | `/resident/bills`   | Lihat & Bayar Tagihan |
| **Warga**  | GET      | `/resident/facility-booking` | Booking Fasilitas |


## 4. Demo Login Accounts

Untuk memudahkan pengujian (Testing), gunakan akun berikut:

Login sebagai Warga
1. Budi 
   **Email:** `warga@gmail.com` 
   **Password:** `password`

2. Vizie hafiyyan
   **Email:** `warga2@gmail.com`
   **Password:**`password`


Login sebagai Admin
* **Email:** `admin@gmail.com`
* **Password:** `password`
---

## 5. Database Schema (ERD)

Sesuai persyaratan menggunakan **Relational Database Management System (RDBMS)** (MySQL), berikut adalah skema relasi antar tabel (User, Resident, Unit, Bills, Complaints, Facility Bookings) yang digunakan dalam project ini.

![Database Schema](SSreadmefoto/skema_databasepawprakt1.png)
> **Catatan:** Gambar ini menunjukkan relasi Foreign Key antar tabel yang saling terhubung.

---



## 6. Project Structure

RealtyApartment/
│── app/
│   ├── Http/Controllers/ (Controller Logic - MVC)
│   └── Models/ (Database Models - MVC)
│── bootstrap/
│── config/
│── database/
│   ├── migrations/
│   └── seeders/
│── public/
│── resources/
│   ├── views/ (Blade Templates - MVC)
│   ├── css/
│   └── js/
│── routes/ (Web Routes & Middleware)
│── storage/
│── tests/
└── vendor/


# 6.1. STRUCTRE MODULE
**Module**	    | **Description**
Unit Management	|  Mengatur unit apartemen & status hunian
Residents	Data  |  penghuni, kontrak, riwayat
Billing	        |  Tagihan bulanan + pembayaran
Complaints	    |  Keluhan fasilitas & tindak lanjut
Facilities	    |  Booking lapangan & kolam renang
Dashboard	      |  Statistik keuangan & occupancy



## 7. Cara MengInstall 

1. Clone Repository
git clone [https://github.com/Mangga123/Project_Akhir_PAW.git]
cd realtiy-apartment

2. Isntall Dependencies
composer install
npm install

3. Setup Enviroment
cp .env.example .env
php artisan key:generate

4. Setup Database
php artisan migrate --seed

5. Run Aplikas
php artisan serve
npm run dev

