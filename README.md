---

# 🌇 Realtiy Apartment

### *Modern Web-Based Apartment Management Platform*

<p align="center">
  <img src="https://img.shields.io/badge/STATUS-Active-4ade80?style=for-the-badge" />
  <img src="https://img.shields.io/badge/VERSION-1.0-6366f1?style=for-the-badge" />
  <img src="https://img.shields.io/badge/FRAMEWORK-Laravel-f43f5e?style=for-the-badge" />
</p>

---

## 🎨 **Preview**

> A clean and modern interface to manage apartment units, residents, billing, facilities, and daily administrative activities — all in one streamlined platform.

---

## 🔑 **Demo Login Accounts**

Untuk memudahkan pengujian, gunakan akun berikut:

### **👤 Login sebagai Warga**

```
Email: warga@gmail.com
Password: password
```

### **🛠️ Login sebagai Admin**

```
Email: admin@gmail.com
Password: password
```

---

## ✨ **Features**

* 🏢 Manage apartment units & occupancy
* 👥 Resident management & registration
* 💵 Monthly billing & invoice tracking
* 🧾 Payment history & receipt generation
* 🛠️ Facility complaint submission system
* 📊 Admin dashboard with charts & stats
* 🔐 Secure authentication & role-based access
* ⚙️ Responsive & minimalistic UI

---

## 🌈 **Aesthetic Gradient Separator**

```md
────────────────────────── ✦ 𝙍 𝙀 𝘼 𝙇 𝙏 𝙄 𝙔  ·  𝘼 𝙋 𝘼 𝙍 𝙏 𝙈 𝙀 𝙉 𝙏 ✦ ──────────────────────────
```

---

## 📂 **Project Structure**

```
RealtiyApartment/
│── app/
│── bootstrap/
│── config/
│── database/
│   ├── migrations/
│   └── seeders/
│── public/
│── resources/
│   ├── views/
│   ├── css/
│   └── js/
│── routes/
│── storage/
│── tests/
└── vendor/
```

---

## 🚀 **Installation Guide**

### 1️⃣ Clone Repository

```bash
git clone https://github.com/your-username/realtiy-apartment.git
cd realtiy-apartment
```

### 2️⃣ Install Dependencies

```bash
composer install
npm install
```

### 3️⃣ Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Setup Database

```bash
php artisan migrate --seed
```

### 5️⃣ Run The Application

```bash
php artisan serve
npm run dev
```

---

## 📊 **Core Modules**

| Module             | Description                             |
| ------------------ | --------------------------------------- |
| 🏢 Unit Management | Mengatur unit apartemen & status hunian |
| 👤 Residents       | Data penghuni, kontrak, riwayat         |
| 💵 Billing         | Tagihan bulanan + pembayaran            |
| 🛠️ Complaints     | Keluhan fasilitas & tindak lanjut       |
| 📈 Dashboard       | Statistik keuangan & occupancy          |

---

## 🗺️ **Roadmap**

* [ ] Mobile-friendly PWA
* [ ] Notification Center (Email & WhatsApp)
* [ ] Multi-Apartment Support
* [ ] Export laporan (PDF, Excel)
* [ ] Integrasi Payment Gateway

---
## 📜 **License**

Distributed under the MIT License.

---
