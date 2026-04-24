<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    /**
     * Get all books
     */
    public function index(): JsonResponse
    {
        try {
            $books = Book::all();
            return response()->json([
                'success' => true,
                'message' => 'Books retrieved successfully',
                'data' => $books
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving books: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get single book by ID
     */
    public function show($id): JsonResponse
    {
        try {
            $book = Book::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Book retrieved successfully',
                'data' => $book
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving book: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Create new book
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'description' => 'required|string',
                'img' => 'nullable|string',
            ]);

            $book = Book::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Book created successfully',
                'data' => $book
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating book: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update book
     */
    public function update(Request $request, $id): JsonResponse
    {
        try {
            $book = Book::findOrFail($id);

            $validated = $request->validate([
                'title' => 'sometimes|required|string|max:255',
                'author' => 'sometimes|required|string|max:255',
                'description' => 'sometimes|required|string',
                'img' => 'nullable|string',
            ]);

            $book->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Book updated successfully',
                'data' => $book
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating book: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Delete book
     */
    public function destroy($id): JsonResponse
    {
        try {
            $book = Book::findOrFail($id);
            $book->delete();

            return response()->json([
                'success' => true,
                'message' => 'Book deleted successfully'
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting book: ' . $e->getMessage()
            ], 500);
        }
    }
}
