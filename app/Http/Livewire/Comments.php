<?php

namespace App\Http\Livewire;
use Carbon\Carbon;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' =>'Hi',
            'created_at' =>'2 second ago',
            'creator'=> 'Niezam'
        ]
    ];

    public $newComment;

    public function addComment()
    {
        if($this->newComment ==''){
            return;
        }

        array_unshift($this->comments, [
     
            'body' =>$this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator'=> 'Putera'
        ]);
        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
