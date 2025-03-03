<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewSection extends Component
{
public $name;
public $rating = 5;
public $review;

public function submitReview()
{
$this->validate([
'name' => 'required|string|max:255',
'rating' => 'required|integer|between:1,5',
'review' => 'required|string|max:1000',
]);

Review::create([
'name' => $this->name,
'rating' => $this->rating,
'review' => $this->review,
]);

$this->reset(['name', 'rating', 'review']);

session()->flash('message', 'Review submitted successfully!');
}

public function render()
{
$reviews = Review::latest()->get();
return view('livewire.review-section', ['reviews' => $reviews]);
}
}