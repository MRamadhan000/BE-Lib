# Docker MySQL Setup
## Cara Menggunakan:

### 1. Start MySQL Container
```bash
docker-compose up -d
```

### 2. Stop MySQL Container
```bash
docker-compose down
```

### 3. View Logs
```bash
docker-compose logs -f mysql
```

### 4. Access MySQL Shell
```bash
docker exec -it mysql_container mysql -u root -proot_password
```

### 5. Connect dengan Laravel (.env)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_password
```

### 6. Backup Database
```bash
docker exec mysql_container mysqldump -u root -proot_password laravel_db > backup.sql
```

### 7. Restore Database
```bash
docker exec -i mysql_container mysql -u root -proot_password laravel_db < backup.sql
```

## Konfigurasi:
- **Root Password**: root_password
- **Database**: laravel_db
- **User**: laravel_user
- **Password**: laravel_password
- **Port**: 3306
- **Data Volume**: mysql_data (persistent)

## Untuk Production:
Ubah password-password di docker-compose.yml dengan password yang lebih aman!
