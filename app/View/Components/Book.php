<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Book extends Component
{
    public $image;
    public $title;
    public $author;
    

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $author)
    {
        $this->image = $image;
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.book');
    }
}
