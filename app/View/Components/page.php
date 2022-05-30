<?php

namespace App\View\Components;

use Illuminate\View\Component;

class page extends Component
{
    public $src, $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src)
    {
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page');
    }
}
