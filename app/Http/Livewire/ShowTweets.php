<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;

    public $content = '';

    protected $rules = [
        'content' => [
            'required',
            'min:3',
            'max:255'
        ],
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate(5);

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create() {
        $this->validate();

        // Tweet::create([
        //     'content' => $this->content,
        //     'user_id' => 1,
        // ]);

        auth()->user()->tweets()->create([
            'content' => $this->content
        ]);

        $this->content = '';
    }
}
