<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        // dd($books);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'required|string|max:255',
            'year' => 'required|numeric|digits_between:1,4',
            'genre'=> 'string|max:255',
            'description' => 'string|max:255',
        ]);
        $data = $request->all();
        
        // dd($data['cover']); //CONTROLLO I DATI
        if ($request->hasFile('cover')) {
            $validated['cover']= $request->file('cover')->store('covers', 'public');
        }

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Libro creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'required|string|max:255',
            'year' => 'required|numeric|digits_between:1,4',
            'genre'=> 'string|max:255',
            'description' => 'string|max:255',
        ]);
        
        $book->title= $validated['title'];
        $book->author= $validated['author'];
        $book->year= $validated['year'];
        $book->genre= $validated['genre'];
        $book->description= $validated['description'];

        if ($request->hasFile('cover')) {
            $book->cover= $request->file('cover')->store('covers', 'public');
        }

        $book->update();

        return redirect()->route('books.index')->with('success', 'Libro creato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if($book->cover && Storage::disk('public')->exists($book->cover) ){
            Storage::disk('public')->delete($book->cover);
        };
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Libro creato con successo');
    }
}
