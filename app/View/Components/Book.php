<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Libro;

class Book extends Component
{
    public $image;
    public $title;
    public $author;
    public $libroId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $author, $libroId)
    {
        $this->image = $image;
        $this->title = $title;
        $this->author = $author;
        $this->libroId = $libroId;
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

