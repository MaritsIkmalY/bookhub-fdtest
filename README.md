# 📚 BookHub FD Test

**FAN IT - Fullstack Developer Test**  
A simple **book management web application** built with **Laravel 11** & **Livewire 3**.

---

## ✨ Features

- 🔐 Authentication (Register, Login, Forgot/Reset Password, Email Verification)  
- 👤 Profile Management (update data, change password)  
- 📖 Book CRUD (create, edit, delete, rating)  
- 🌍 Public book listing with filters & pagination  
- 📱 Responsive UI (Tailwind CSS)  

---

## 🛠 Tech Stack

- **Backend**: Laravel 11, Livewire 3  
- **Database**: PostgreSQL  
- **Frontend**: Blade, Tailwind CSS  
  
---

## ⚡ Requirements

- PHP ≥ 8.2  
- Composer  
- Node.js ≥ 18  
- PostgreSQL ≥ 13  
- Git  

---

## 🚀 Installation & Running

Jalankan perintah berikut step-by-step:

```bash
# Clone repository
git clone https://github.com/MaritsIkmalY/bookhub-fdtest.git
cd bookhub-fdtest

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Sesuaikan konfigurasi .env (Database & Mailer)

# Run migrations & seed data
php artisan migrate --seed
php artisan storage:link

# Build assets
npm run dev

# Start Laravel server
php artisan serve
