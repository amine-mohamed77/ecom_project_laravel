# 🛒 Laravel eCommerce Platform

A complete eCommerce web application built with **Laravel**, providing a full shopping experience including product management, categories, cart functionality, checkout, authentication, and order handling.

This project is designed to be clean, scalable, and easy to extend for real-world online stores.

---

## 🚀 Features

### 🛍 Storefront
- Product listing page  
- Product details page  
- Search & filtering  
- Category browsing  
- Add to cart  
- Update & remove cart items  
- Checkout page  

### 🛒 Shopping Cart
- Session-based cart  
- Add / Remove / Update quantity  
- Cart summary  
- Auto-calculate totals  

### 🛠 Admin Dashboard
- Manage products (CRUD)  
- Manage categories (CRUD)  
- Manage orders  
- Upload product images  

### 🔐 Authentication
- User registration  
- Login / logout  
- Protected user dashboard  
- Order history  

### ⚙️ Backend Logic
- RESTful controllers  
- Form validation  
- Laravel Eloquent ORM  
- Migrations & seeders  

---

## 🧰 Tech Stack

| Layer        | Technology |
|--------------|------------|
| Backend      | Laravel 10 / PHP 8+ |
| Frontend     | Blade Templates, TailwindCSS |
| Database     | MySQL |
| Auth         | Laravel Breeze / Sanctum |
| Storage      | Laravel Filesystem |

---

## 📁 Project Structure


---

## 🛠 Installation

### 1️⃣ Clone the repository
```bash
git clone https://github.com/your-username/ecommerce.git

---
```bash

### run project
cd ecommerce
cp .env.example .env
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
php artisan migrate --seed
npm run dev
/screenshots/home.png  
/screenshots/product.png  
/screenshots/cart.png  
GET    /api/products
GET    /api/products/{id}
POST   /api/products
PUT    /api/products/{id}
DELETE /api/products/{id}
POST   /api/cart/add
POST   /api/cart/update
POST   /api/cart/remove
