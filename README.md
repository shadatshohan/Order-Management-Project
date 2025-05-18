# Order Management System - Laravel

An Order Management System built using PHP Laravel with role-based access control for **Super Admin**, **Admin**, and **User**. The application is deployed at:  
🔗 [https://agora.naturalboostbd.com](https://agora.naturalboostbd.com)

---

## 🔐 Roles & Permissions

- **Super Admin**
  - Can add new Admins.
  - Can process and manage user orders.
- **Admin**
  - Can process and manage user orders.
- **User**
  - Can register an account.
  - Can place orders via the platform.

---

## 🔑 Login Credentials

### 🟩 Super Admin
- **Username/Email**: `superadmin@admin.com`  
- **Password**: `superadmin123`

### 🟦 Admin
- **Username/Email**: `admin@admin.com`  
- **Password**: `admin123`

### 🟨 User
- Users must **create their own account** by registering on the site:  
  [https://agora.naturalboostbd.com/register](https://agora.naturalboostbd.com/register)

---

## 🚀 Features

- Role-based login and dashboard views.
- Super Admin can manage admins.
- Admin and Super Admin can accept or reject user orders.
- Users can place new orders and track their status.

---

## 🛠️ Installation & Running Locally

### Prerequisites
- PHP >= 8.1
- Composer
- Laravel >= 10
- MySQL / MariaDB
- Node.js and NPM (optional, for frontend asset compilation)

### Steps to Run the Project

```bash
# Clone the project
git clone https://github.com/yourusername/order-management-system.git
cd order-management-system

# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Set up your database credentials in .env
# Then run migrations
php artisan migrate

# (Optional) Seed default users like Super Admin and Admin
php artisan db:seed

# Run Laravel development server
php artisan serve
