<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::with('categories')->get();
        return view('books.index', compact('books'));
    }

    public function create(){
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request){
        $book = Book::create([
            'title' => $request->title,
            'price' => $request->price
        ]);

        $book->categories()->attach($request->categories);

        return redirect()->route('books.index');
    }

    public function destroy($id){
        Book::find($id)->delete();
        return redirect()->route('books.index');
    }
}
