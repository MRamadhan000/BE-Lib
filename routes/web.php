<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Test route
// Route::get('/test', function () {
//     return response()->json(['message' => 'Test route works!']);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Book API Routes (CSRF excluded in app/Http/Middleware/VerifyCsrfToken.php)
Route::prefix('api/books')->group(function () {
    Route::get('/', [BookController::class, 'index']);              // GET all books
    Route::post('/', [BookController::class, 'store']);             // POST create book
    Route::get('/{id}', [BookController::class, 'show']);           // GET single book
    Route::put('/{id}', [BookController::class, 'update']);         // PUT update book
    Route::delete('/{id}', [BookController::class, 'destroy']);     // DELETE book
});
