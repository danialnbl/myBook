<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 
use App\Models\Review; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        return view('admin/addbook');
    }

    public function edit(Book $books){
        return view('admin.book', ['books' => $books]);
    }

    public function update(Book $books, Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'sypnosis' => 'required|string|max:255',
            'image' => 'required',
            'year' => 'required|string',
            'genre' => 'required|string|max:255',
            
        ]);
        $books->update($data);
        return redirect(route('admin.dashboard'))->with('success', 'Product Updated Successfully');
    }

    public function destroy(Book $books){
        $books->delete();
        return redirect(route('admin.dashboard'))->with('success', 'Product Deleted Successfully');
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'sypnosis' => 'required|string|max:255',
            'image' => 'required',
            'year' => 'required|string',
            'genre' => 'required|string|max:255',
            
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $newBook = new Book();
        $newBook->name = $data['name'];
        $newBook->author = $data['author'];
        $newBook->sypnosis = $data['sypnosis'];
        $newBook->year = $data['year'];
        $newBook->genre = $data['genre'];

        
        $newBook->image = 'images/'.$imageName;

        $newBook->save();
        return redirect(route('admin.dashboard'))->with('success', 'Product created successfully.');
    }

    //user
    public function show($book_id){
        $books = Book::find($book_id);
        $review = Review::where('book_id','=', $books->book_id)->get();
        return view('book')->with('books',$books)->with('review',$review);
    }
}
