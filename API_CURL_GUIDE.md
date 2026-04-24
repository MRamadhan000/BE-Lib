# Book API - cURL Command Guide

## cURL Commands

### 1. Get All Books
```bash
curl -X GET http://localhost:5000/api/books
```

### 2. Get Single Book by ID
```bash
curl -X GET http://localhost:5000/api/books/1
```

### 3. Create New Book
```bash
curl -X POST http://localhost:5000/api/books \
  -H "Content-Type: application/json" \
  -d '{
    "title": "Laravel Mastery",
    "author": "John Doe",
    "description": "Complete guide to Laravel framework",
    "img": "https://example.com/image.jpg"
  }'
```

### 4. Update Book by ID
```bash
curl -X PUT http://localhost:5000/api/books/1 \
  -H "Content-Type: application/json" \
  -d '{
    "title": "Laravel Advanced",
    "author": "Jane Doe",
    "description": "Advanced Laravel concepts",
    "img": "https://example.com/updated-image.jpg"
  }'
```

### 5. Delete Book by ID
```bash
curl -X DELETE http://localhost:5000/api/books/1
```

---

## PowerShell Equivalents

Jika Anda menggunakan PowerShell, gunakan format berikut:

### Get All Books (PowerShell)
```powershell
Invoke-WebRequest -Uri "http://localhost:5000/api/books" -Method GET
```

### Create Book (PowerShell)
```powershell
$body = @{
    title = "Laravel Mastery"
    author = "John Doe"
    description = "Complete guide to Laravel framework"
    img = "https://example.com/image.jpg"
} | ConvertTo-Json

Invoke-WebRequest -Uri "http://localhost:5000/api/books" `
  -Method POST `
  -Headers @{"Content-Type"="application/json"} `
  -Body $body
```

### Update Book (PowerShell)
```powershell
$body = @{
    title = "Laravel Advanced"
    author = "Jane Doe"
    description = "Advanced Laravel concepts"
    img = "https://example.com/updated-image.jpg"
} | ConvertTo-Json

Invoke-WebRequest -Uri "http://localhost:5000/api/books/1" `
  -Method PUT `
  -Headers @{"Content-Type"="application/json"} `
  -Body $body
```

### Delete Book (PowerShell)
```powershell
Invoke-WebRequest -Uri "http://localhost:5000/api/books/1" -Method DELETE
```

---

## API Response Format

### Success Response (200 OK / 201 Created)
```json
{
  "success": true,
  "message": "Books retrieved successfully",
  "data": [
    {
      "id": 1,
      "title": "Laravel Basics",
      "author": "John Doe",
      "description": "Learn Laravel from scratch",
      "img": "https://example.com/image.jpg",
      "created_at": "2024-04-24T10:00:00.000000Z",
      "updated_at": "2024-04-24T10:00:00.000000Z"
    }
  ]
}
```

### Error Response
```json
{
  "success": false,
  "message": "Error message here",
  "data": null
}
```

---

## Quick Start

1. **Start Server:**
   ```bash
   php artisan serve --host=0.0.0.0 --port=5000
   ```

2. **Test API (pilih salah satu):**
   ```bash
   # Test dengan Get All Books
   curl -X GET http://localhost:5000/api/books
   
   # atau test dengan Create Book
   curl -X POST http://localhost:5000/api/books \
     -H "Content-Type: application/json" \
     -d '{"title":"Test Book","author":"Test Author","description":"Test","img":"http://test.jpg"}'
   ```

3. **Troubleshooting:**
   - Jika port 5000 sudah terpakai, ubah ke port lain: `--port=6000`
   - Pastikan server sedang running sebelum test curl
   - Pastikan database migration sudah dijalankan: `php artisan migrate`
