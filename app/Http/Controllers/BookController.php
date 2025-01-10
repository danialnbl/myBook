<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 

class BookController extends Controller
{
    public function index(){
        return view('admin/addbook');
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'sypnosis' => 'required|string|max:255',
    
            'year' => 'required|string',
            'genre' => 'required|string|max:255',
            
        ]);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        $newBook = new Book();
        $newBook->name = $data['name'];
        $newBook->author = $data['author'];
        $newBook->sypnosis = $data['sypnosis'];
        $newBook->year = $data['year'];
        $newBook->genre = $data['genre'];

        
        // $newBook->image = 'images/'.$imageName;

        $newBook->save();
        echo "<script>console.log('Debug Objects: " . $data . "' );</script>";
        return redirect(route('admin.dashboard'))->with('success', 'Product created successfully.');
    }
}
