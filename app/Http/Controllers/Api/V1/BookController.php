<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Database\QueryException;

class BookController extends Controller
{
    public function store(StoreBookRequest $request)
    {
        try {
            $book = Book::create($request->all());
            return response()->json($book, 201);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Error creating book', 'error' => $e->getMessage()], 500);
        }
    }

    public function index()
    {
        try {
            $books = Book::paginate(10);
            return response()->json($books, 200);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Error retrieving books', 'error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $book = Book::find($id);
            if (!$book) {
                return response()->json(['message' => 'Book not found'], 404);
            }
            return response()->json($book, 200);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Error retrieving book', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(UpdateBookRequest $request, $id)
    {
        try {
            $book = Book::find($id);
            if (!$book) {
                return response()->json(['message' => 'Book not found'], 404);
            }
            $book->update($request->all());
            return response()->json($book, 200);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Error updating book', 'error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $book = Book::find($id);
            if (!$book) {
                return response()->json(['message' => 'Book not found'], 404);
            }
            $book->delete();
            return response()->json(['message' => 'Book deleted successfully'], 200);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Error deleting book', 'error' => $e->getMessage()], 500);
        }
    }
}
