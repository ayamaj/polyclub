<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentSection extends Component
{
    public $comments;
    public $newComment;
    public $club_id; // Add a property to store the anime ID

    public function mount($club_id)
    {
        $this->club_id = $club_id; // Initialize the anime ID property
        $this->loadComments();
    }

    public function loadComments()
    {
        // Load existing comments from the database
        $this->comments = $this->club_id
            ? Comment::where('club_id', $this->club_id)->with('user')->get()
            : [];
    }

    public function addComment()
    {
        // Validate new comment
        $this->validate([
            'newComment' => 'required|min:3|max:255',
        ]);

        // Create a new comment
        Comment::create([
            'user_id' => Auth::id(),
            'club_id' => $this->club_id,
            'comment' => $this->newComment,
        ]);

        // Clear the new comment input
        $this->newComment = '';

        // Reload comments
        $this->loadComments();
    }
    public function render()
    {
        return view('livewire.comment-section');
    }
//     public function one_club($club)
// {
//     // $id is the club ID
//     return view('one_club', ['club_id' => $club]);
// }

}
