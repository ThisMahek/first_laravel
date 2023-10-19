<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public $type,$lable,$name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$lable,$name)
    {
        $this->type=$type;
        $this->name=$name;
        $this->lable=$lable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}