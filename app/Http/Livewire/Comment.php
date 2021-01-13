<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{

    public $newComment;


    public $comments=[

        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ab magni iure autem nihil vero mollitia repudiandae asperiores dolore optio sunt,
                repellendus quam doloribus consequatur odio, reiciendis nam molestiae, voluptatibus exercitationem.',
            'created_at' => '3 min ago',
            'creator' => 'Mehedi'

        ]
    ];


    public function addComment()
    {
        if( !empty( trim( $this->newComment ) )) {

        array_unshift($this->comments, [
            'body' =>  trim( $this->newComment ) ,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'SoftX '
        ]);
        $this->newComment="";
        }
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
