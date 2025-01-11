<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book; 

class AdminController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('admin.dashboard',['books' => $books]);
    }

}
