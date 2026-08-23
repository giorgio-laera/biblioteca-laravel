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
    public function __construct( $modalId='bookModal', $book=null)
    {
        $this->modalId=$modalId;
        $this->book=$book;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(){
        return view('components.book-modal');
    }
}
