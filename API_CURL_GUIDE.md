# Book API - cURL Command Guide

## cURL Commands

### 1. Get All Books
```
GET /api/books
```
```bash
curl -X GET http://localhost:5000/api/books
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


### 2. Get Single Book by ID
```
GET /api/books/{id}
```
```bash
curl -X GET http://localhost:5000/api/books/1
```
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


### 3. Create New Book
```
POST /api/books
```
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


### 4. Update Book by ID
```
PUT /api/books/{id}
```
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

### 5. Delete Book by ID
```
DELETE /api/books/{id}
```
```bash
curl -X DELETE http://localhost:5000/api/books/1
```
**Response:**
```json
{
  "success": true,
  "message": "Book deleted successfully"
}
```