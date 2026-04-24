# Book API Documentation

## Setup

### 1. Run Migration
```bash
php artisan migrate
```

### 2. API Endpoints

#### Get All Books
```
GET /api/books
```
**Response:**
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

#### Get Single Book
```
GET /api/books/{id}
```
**Example:** `GET /api/books/1`

**Response:**
```json
{
  "success": true,
  "message": "Book retrieved successfully",
  "data": {
    "id": 1,
    "title": "Laravel Basics",
    "author": "John Doe",
    "description": "Learn Laravel from scratch",
    "img": "https://example.com/image.jpg",
    "created_at": "2024-04-24T10:00:00.000000Z",
    "updated_at": "2024-04-24T10:00:00.000000Z"
  }
}
```

#### Create Book
```
POST /api/books
```
**Request Body:**
```json
{
  "title": "Laravel Basics",
  "author": "John Doe",
  "description": "Learn Laravel from scratch",
  "img": "https://example.com/image.jpg"
}
```

**Response (201 Created):**
```json
{
  "success": true,
  "message": "Book created successfully",
  "data": {
    "id": 1,
    "title": "Laravel Basics",
    "author": "John Doe",
    "description": "Learn Laravel from scratch",
    "img": "https://example.com/image.jpg",
    "created_at": "2024-04-24T10:00:00.000000Z",
    "updated_at": "2024-04-24T10:00:00.000000Z"
  }
}
```

#### Update Book
```
PUT /api/books/{id}
```
**Example:** `PUT /api/books/1`

**Request Body:**
```json
{
  "title": "Updated Title",
  "author": "Jane Doe",
  "description": "Updated description",
  "img": "https://example.com/new-image.jpg"
}
```

**Response:**
```json
{
  "success": true,
  "message": "Book updated successfully",
  "data": {
    "id": 1,
    "title": "Updated Title",
    "author": "Jane Doe",
    "description": "Updated description",
    "img": "https://example.com/new-image.jpg",
    "created_at": "2024-04-24T10:00:00.000000Z",
    "updated_at": "2024-04-24T10:00:00.000000Z"
  }
}
```

#### Delete Book
```
DELETE /api/books/{id}
```
**Example:** `DELETE /api/books/1`

**Response:**
```json
{
  "success": true,
  "message": "Book deleted successfully"
}
```

### 3. Test dengan Postman

**1. GET All Books**
- Method: GET
- URL: `http://localhost:8000/api/books`

**2. Create Book**
- Method: POST
- URL: `http://localhost:8000/api/books`
- Headers: `Content-Type: application/json`
- Body:
```json
{
  "title": "My Book",
  "author": "Author Name",
  "description": "Book description here",
  "img": "https://example.com/image.jpg"
}
```

**3. Get Single Book**
- Method: GET
- URL: `http://localhost:8000/api/books/1`

**4. Update Book**
- Method: PUT
- URL: `http://localhost:8000/api/books/1`
- Headers: `Content-Type: application/json`
- Body:
```json
{
  "title": "Updated Title",
  "author": "Updated Author",
  "description": "Updated description"
}
```

**5. Delete Book**
- Method: DELETE
- URL: `http://localhost:8000/api/books/1`

### 4. Files Created
- ✅ Model: `app/Models/Book.php`
- ✅ Controller: `app/Http/Controllers/BookController.php`
- ✅ Migration: `database/migrations/0001_01_01_000003_create_books_table.php`
- ✅ API Routes: `routes/api.php`

### 5. Quick Start
```bash
# Run migration
php artisan migrate

# Start development server
php artisan serve

# Now test API at http://localhost:8000/api/books
```

## Field Validations
- **title**: Required, string, max 255 characters
- **author**: Required, string, max 255 characters
- **description**: Required, string
- **img**: Optional, string (URL)
