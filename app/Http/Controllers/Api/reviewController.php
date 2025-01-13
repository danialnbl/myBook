<?php

namespace App\Http\Controllers\Api;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class reviewController extends Controller
{
    public function index() {
        return Review::all();
    }
    public function show($id) {
        return Review::find($id);
    }
    public function store(Request $request) {
        return Review::create($request->all());
    }
    public function update(Request $request, Review $review) {
        $review = Review::find($review->review_id);
        $data = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'review' => 'required|string',
            'rating' => 'required'
        ]);
        $review->update($data);
        $review->save();
        return redirect(route('review.view'))->with('success', 'Product Updated Successfully');
    }
    public function destroy(Review $review) {
        $review->delete();
        return redirect(route('review.view'))->with('success', 'Product Deleted Successfully');
    }

}
