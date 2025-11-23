Siap! Berikut **README Premium** — aesthetic, rapi, pakai badge, emoji, table of contents, dan layout bergaya produk profesional.
Cocok buat tugas akhir ataupun upload GitHub agar terlihat *niat* banget 🚀✨

---

# 🏢 ApartmentSys — Modern Apartment Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10%2F11-red?style=for-the-badge">
  <img src="https://img.shields.io/badge/PHP-8%2B-blue?style=for-the-badge">
  <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge">
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-0EA5E9?style=for-the-badge">
</p>

<p align="center"><b>A web-based platform for managing apartment units, residents, billing, and facility complaints — built with Laravel.</b></p>

---

## 📘 Table of Contents

* [✨ Features](#-features)
* [🖼️ UI Preview](#️-ui-preview)
* [🛠️ Tech Stack](#-tech-stack)
* [📦 Installation](#-installation)
* [🗄️ Database Setup](#-database-setup)
* [▶️ Run the App](#️-run-the-app)
* [📊 ERD Overview](#-erd-overview)
* [🔐 Demo Accounts](#-demo-accounts)
* [📄 License](#-license)

---

## ✨ Features

### 🔐 Role-Based Authentication

* Role **Admin** & **Resident**
* Akses fitur menyesuaikan role

### 🏢 Apartment Unit Management

* Tambah, edit, hapus, dan lihat unit
* Status unit: *Available* / *Occupied*

### 👥 Resident Management

* Registrasi penghuni baru
* Pengelolaan penyewa + data unit

### 💳 Billing System

* Admin membuat tagihan
* Penghuni upload bukti pembayaran
* Admin verifikasi

### 🔧 Complaint Management

* Penghuni mengirim keluhan fasilitas
* Upload foto
* Update status penanganan

---

## 🖼️ UI Preview

> *(Tambahkan screenshot nanti, tinggal upload lalu ganti linknya)*
> Contoh format:

```
p align="center">
  <img src="screenshots/dashboard-admin.png" width="800">
  <br>
  <i>Admin Dashboard</i>
</p>
```

---

## 🛠 Tech Stack

| Layer    | Tools                 |
| -------- | --------------------- |
| Backend  | Laravel 10/11, PHP 8+ |
| Frontend | Blade, TailwindCSS    |
| Database | MySQL                 |
| Others   | Node.js, npm, XAMPP   |

---

## 📦 Installation

### 1. Clone Repository

```bash
git clone https://github.com/username-kamu/nama-repo.git
cd nama-repo
```

### 2. Install Dependencies

```bash
composer install
npm install
npm run build
```

---

## 🗄️ Database Setup

### 1. Create Database

```
projectpaw
```

### 2. Copy & Configure Environment File

```bash
cp .env.example .env
```

Edit bagian:

```
DB_DATABASE=projectpaw
DB_PORT=3306   # atau 3307 jika XAMPP kamu pakai port itu
```

### 3. Generate Key & Migrate

```bash
php artisan key:generate
php artisan migrate:fresh --seed
```

---

## ▶️ Run the App

```bash
php artisan serve
```

Buka di browser:

```
http://127.0.0.1:8000
```

---

## 📊 ERD Overview

```
+-----------+       +-----------+
|   users   | 1   n | residents |
+-----------+-------+-----------+
       |                 |
       |                 |
       | 1         n     |
       +------ units ----+
               |
               | 1   n
              bills
```

*(bisa dibuatkan diagram versi gambar kalau mau)*

---

## 🔐 Demo Accounts

### 👑 Admin

```
email: admin@gmail.com
password: password
```

### 👤 Resident

```
email: user@gmail.com
password: password
```

---

## 📄 License

```
MIT License — free to modify and use.
```

---

## 💬 Need a More Custom Version?

Aku bisa buatkan:
✨ README premium + gradient + separator aesthetic
✨ README full dengan screenshot + badge CI/CD
✨ README versi dark mode
✨ README versi profesional untuk portfolio

Tinggal bilang mau gaya apa!
