<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book; 

class ReviewController extends Controller
{
    public function index(Book $books){
        $userId = Auth::id();
        return view('addreview')->with('books',$books)->with('userId',$userId);
    }

    public function store(Request $request){
        
        $data = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'review' => 'required|string|max:255',
            'rating' => 'required'  
        ]);
        $newReview = new Review();
        $newReview->user_id = $data['user_id'];
        $newReview->book_id = $data['book_id'];
        $newReview->review = $data['review'];
        $newReview->rating = $data['rating'];
        $newReview->save();
        return redirect(route('books.show', [$newReview->book_id]))->with('success', 'Review created successfully.');
    }

    public function view(){
        $user_id = Auth::id(); 
        $reviews = Review::where('user_id','=',$user_id)->get();
        return view('review')->with('reviews',$reviews);
    }
}
