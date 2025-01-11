<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book; 

class UserController extends Controller
{
    public function index(){
        $books = Book::all();
        return view("dashboard",['books' => $books]);
    }
}
