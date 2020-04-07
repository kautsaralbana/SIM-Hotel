<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BcItemActive extends Component
{
    /**
     * The card title.
     *
     * @var string
     */
    public $field;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field)
    {
        $this->field = $field;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.bc-item-active');
    }
}
