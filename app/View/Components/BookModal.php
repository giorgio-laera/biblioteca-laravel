<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookModal extends Component
{   
    public $book;
    public $modalId;

    /**
     * Create a new component instance.
     */
    public function __construct($modalId=)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.book-modal');
    }
}
