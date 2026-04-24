# ⚙️ Lib Aspire Backend API

Backend API untuk project **Lib Aspire**, dibuat menggunakan Laravel dan MySQL (Docker).  
API ini menyediakan fitur CRUD (Create, Read, Update, Delete) untuk data buku.

---

### 🚀 1. Clone Project

```bash
https://github.com/MRamadhan000/BE-Lib.git
```
```bash
cd lib-aspire-backend
```


### 📦 2. Install Dependencies
```bash
composer install
```


### ⚙️ 3. Setup Environment
Copy file .env.example menjadi .env:

Generate application key:
```bash
php artisan key:generate
```


### 🐳 4. Setup Database (Docker MySQL)
▶️ Start MySQL Container
```bash
docker-compose up -d
```

⛔ Stop Container
```bash
docker-compose down
```

📄 View Logs
```bash
docker-compose logs -f mysql
```


### 🛠️ 5. Konfigurasi Database (.env)
Edit file .env:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_password
```

### 🧱 6. Run Migration
```bash
php artisan migrate
```

### 🌐 7. Run Laravel Server
```bash
php artisan serve
```

## 📡 API Documentation

Untuk melihat panduan lengkap penggunaan API (cURL & PowerShell), silakan buka:

👉 [API cURL Guide](./API_CURL_GUIDE.md)
