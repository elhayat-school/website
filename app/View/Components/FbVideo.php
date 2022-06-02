<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FbVideo extends Component
{
    public $dataHref;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dataHref)
    {
        $this->dataHref = $dataHref;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fb-video');
    }
}
